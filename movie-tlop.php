ECHO ♪ $Movie.ID;
SP;
if( $Movie.Request.IsRequest ){
	ECHO <FONT COLOR="#FF6600"><I>$Movie.Title</I></FONT>;
	SP;
	ECHO <B>[ﾘｽﾅｰ推薦]</B>;
}elseif( $CanRequest ){
	ECHO <FONT COLOR="#2EFEF7">$Movie.Title</FONT>;
}else{
	ECHO <FONT COLOR="#FF0000">$Movie.Title</FONT>;
}
SP;
ECHO <FONT COLOR="#B3B3B3">By</FONT>;
SP;
ECHO $Movie.ProducerName;

SP;
if( $Movie.ViewCount >= 3000000 ){
	ECHO <FONT COLOR="#FC3232"><B>[ﾄﾘﾌﾟﾙﾐﾘｵﾝ!]</B></FONT>;
}elseif( $Movie.ViewCount >= 2000000 ){
	ECHO <FONT COLOR="#FFEB00"><B>[Wﾐﾘｵﾝ]</B></FONT>;
}elseif( $Movie.ViewCount >= 1000000 ){
	ECHO <FONT COLOR="#58FE60"><B>[ﾐﾘｵﾝ]</B></FONT>;
}elseif( $Movie.ViewCount >= 100000 ){
	ECHO <B>[殿堂入り]</B>;
}

ECHO {[Tag：$Movie.UserTag]};

ECHO <BR>$Movie.Length;

if( $Movie.ViewCount ){
	SP;
	ECHO <FONT COLOR="#B3B3B3">再</FONT>;
	SP;
	ECHO $Movie.ViewCount;
}

if( $Movie.CommentCount ){
	SP;
	ECHO <FONT COLOR="#B3B3B3">コ</FONT>;
	SP;
	ECHO $Movie.CommentCount;
}

if( $Movie.MyListCount ){
	SP;
	ECHO <FONT COLOR="#B3B3B3">マ</FONT>;
	SP;
	ECHO $Movie.MyListCount（$Movie.MyListRate(0.0#%)）;
}

if( $Movie.PostDate ){
	SP;
	ECHO <FONT COLOR="#B3B3B3">投</FONT>;
	SP;
	ECHO $Movie.PostDate.Year(#)年 $Movie.PostDate.Month(#)月 $Movie.PostDate.Day(#)日（$Movie.PostElapsed.TotalDays(0)日前）;
}

SP;
ECHO <FONT COLOR="#B3B3B3">ビ</FONT>;
SP;
ECHO $Movie.Bitrate;
SP;

ECHO <BR>;

if( $CanRequest ){
	ECHO <FONT SIZE="18" COLOR="#F7FE2E">;
	if( $RequestSetting.UserLimitCount.Enabled ){
		if( $RequestSetting.UserLimitCount.Enabled ){
			ECHO 1人 $RequestSetting.UserLimitCount件;
		}
		if( $MovieCondition.Length.IsMaximum ){
			SP;
			ECHO 1動画 $MovieCondition.Length.Maximum;
		}
		if( $RequestSetting.UserLimitTime.Enabled ){
			SP;
			ECHO 計 $RequestSetting.UserLimitTime;
		}
		if( $TotalRequest_MaximumCount.Enabled ){
			SP;
			ECHO 全体 $TotalRequest_MaximumCount件;
		}
		if( $RequestSetting.TotalLimitTime.Enabled ){
			SP;
			ECHO $RequestSetting.TotalLimitTime;
		}
			ECHO までﾘｸｴｽﾄ受付中</FONT>;
		}else{
		SP;
		ECHO リクエスト受付中</FONT>;
		}
	}else{
		SP;
		ECHO <FONT COLOR="#FE2E2E"><U><B>リクエストの受付は終了しました</B></U></FONT>;
}
SP;

if( $RequestCount ){
	ECHO <FONT COLOR="#B3B3B3">ﾘｸ</FONT>;
	SP;
	ECHO <FONT COLOR="#FA58F4">$RequestCount 件 $RequestTime;
}elseif( $StockCount ){
	ECHO <FONT COLOR="#B3B3B3">ｽﾄ</FONT>;
	SP;
	ECHO <FONT COLOR="#F781BE">$StockCount 件 {$StockTime.TotalHours(#)時間} {$StockTime.Minutes分};
}else{
	ECHO <FONT COLOR="#B3B3B3">ﾘｸ</FONT>;
	SP;
	ECHO <FONT COLOR="#FF3399">0 件;
}
SP;
ECHO </FONT>;
SP;
ECHO <FONT COLOR="#808080">特</FONT>;
SP;
ECHO $Movie.VocaranDay Pts;
