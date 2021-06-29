<?php
include ("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $keyword; ?>" />
<meta name="description" content="<?php echo $keyword; ?>" />
<style type=text/css>
<--
body {FONT-SIZE: 9pt ;color: #655222;SCROLLBAR-FACE-COLOR: #271803;SCROLLBAR-HIGHLIGHT-COLOR: #655222;SCROLLBAR-SHADOW-COLOR: #655222;SCROLLBAR-3DLIGHT-COLOR: #cccccc;SCROLLBAR-ARROW-COLOR: #ffffff;SCROLLBAR-TRACK-COLOR: #655222;SCROLLBAR-DARKSHADOW-COLOR: #655222}
 th {FONT-SIZE: 9pt }
 td {FONT-SIZE: 9pt ;line-height: 12pt}
 -->
A{color: #000000;TEXT-DECORATION: none}
A:hover {COLOR: #FF0000;TEXT-DECORATION: none}
.style10 {color: #FFFFFF; }
.style11 {color: #ffffff}
.top {
	FONT-WEIGHT: bold; COLOR: #BCB6A0; PADDING-TOP: 2px
}
.top A {
	COLOR: #BCB6A0
}
.top A:hover {
	COLOR: #ff0000; TEXT-DECORATION: none
}
</style>
<script type="text/javascript">
function newcode()
{
document.yzimg.src= "<?php echo $name."/code.php" ?>";
}
</script>
<style type="text/css">
a{text-decoration:none; color:#333333}
a:hover{text-decoration:underline; color:#666666}
#all{margin-left:auto; margin-right:auto; width:960px;}
#logo{width:430px;margin-left:auto; margin-right:auto;}
#upk{width:420px; margin-left:auto; margin-right:auto; border:double; border-bottom-width:1px; border-bottom-color:#CCCCCC; border-top-width:1px; border-top-color:#CCCCCC; border-left-width:1px; border-left-color:#CCCCCC; border-right-width:1px; border-right-color:#CCCCCC;}
#blank{width:430px; height:25px; margin-left:auto; margin-right:auto; }
#topr{float:right;}
#shuoming{font-family:Arial, Helvetica, sans-serif; font-size:8px; width:420px; border:double; border-bottom-width:1px; border-bottom-color:#CCCCCC; border-top-width:1px; border-top-color:#CCCCCC; border-left-width:1px; border-left-color:#CCCCCC; border-right-width:1px; border-right-color:#CCCCCC; margin-left:auto; margin-right:auto;}
#shuomingtip{font-family:Arial, Helvetica, sans-serif; font-size:14px; border:double; border-bottom-width:1px; border-bottom-color:#999999; border-top-width:0px; border-top-color:#CCCCCC; border-left-width:0px; border-left-color:#CCCCCC; border-right-width:0px; border-right-color:#CCCCCC;}
</style>
</head>
<body leftMargin=0 topMargin=0 marginheight="0" marginwidth="0" bgcolor=#655222 style="SCROLLBAR-FACE-COLOR: #271803;SCROLLBAR-HIGHLIGHT-COLOR: #655222;SCROLLBAR-SHADOW-COLOR: #655222;SCROLLBAR-3DLIGHT-COLOR: #cccccc;SCROLLBAR-ARROW-COLOR: #ffffff;SCROLLBAR-TRACK-COLOR: #655222;SCROLLBAR-DARKSHADOW-COLOR: #655222">
 
<TABLE width=770 height="201" border=0 align=center cellPadding=0  cellSpacing=0 
bgColor=#655222 class=table1>
  <TBODY>
    <TR> 
      <TD height="65" background="systemimg/top.gif" bgcolor="#655222" Align="right"> <a href="http://www.0321.tk"><img src="systemimg/logo.gif" width="214" height="109" border="0"></a>&nbsp;&nbsp;</TD>
    </TR>
  </TBODY>
</TABLE>
<TABLE class=table1 cellSpacing=0 cellPadding=0 width=770 align=center>
  <TBODY>
  <TR>
      <TD height=39 vAlign=center background="systemimg/banner.gif" bgcolor="#655222" class=top>&nbsp;&nbsp;<A 
      href="/"><FONT color=#BCB6A0>首 
      页</A> | <a class=no1 href="list.php">图片列表</a> | 

<a class=no1 href="http://www.free163.com/" target="_blank">听松阁</a> | 
<a class=no1 href="http://www.444.info/" target="_blank">导航</a> | 
<a class=no1 href="http://www.2345.ltd/" target="_blank">桌面</a> | 
<a class=no1 href="http://blog.444.info/" target="_blank">博客</a> | 
<a class=no1 href="http://660000.xyz/" target="_blank">美图</a> | 
<a class=no1 href="http://book.444.info/" target="_blank">小说</a> | 
<a class=no1 href="http://movie.444.info/" target="_blank">电影</a> | 
<a class=no1 href="http://down.444.info/" target="_blank">软件</a> | 
<a class=no1 href="http://www.mp4.run/" target="_blank">音乐</a> | 
<a class=no1 href="http://mail.444.info/" target="_blank">邮局</a> | 
<a class=no1 href="http://cloud.444.info/" target="_blank">网盘</a> | 
<a class=no1 href="http://vip.444.info/" target="_blank">VIP视频</a> | 
<a class=no1 href="http://game.444.info/" target="_blank">小游戏</a> | 


</FONT></TD>
  </TR></TBODY></TABLE>
   <table width="770" cellpadding="0" cellspacing="0" style="border:0px solid #B2D0EA;" id="top" align="center">
    <tr>
     <td background="systemimg/list_head.gif" width="770" height="34" align="center" valign="middle" border="0"><b><FONT size="2" color=#000000>海 棠 图 片 上 传 系 统</font></b>
     </td>
    </tr>
    <tr>
     <td background="systemimg/list_bg.gif" align="left" valign="middle" width="770" height="60" border="0">
<form action="u.php" method="post" enctype="multipart/form-data"><div id="upk"><label for="file">&nbsp;选择文件:</label>
<input type="file" name="file" id="file" /> 
<br /><!--font>备注：<input type="text" name="beizhu" />&nbsp;</font-->&nbsp;验 证 码：<input type="text" name="yzcode" />&nbsp;<img src="code.php" title="验证码。点击更换..." alt="验证码。点击更换" onclick="newcode()" name="yzimg" id="yzimg">&nbsp;<input type="submit" name="submit" value="开始上传" /></div>
</form>
<div id="shuoming"><div id="shuomingtip">&nbsp;&nbsp;&nbsp;上传说明：</div><?php echo $shuoming; ?></div>

     </td>
    </tr>
    <tr>
     <td background="systemimg/list_bottom.gif" align="center" width="770" height="59" border="0">
     </td>
    </tr>
 <tr>
  <td background="systemimg/bottom.gif" width="770" height="188" border="0"><br><br><br><br>
<center><font color="#ffffff" size="2">Copyright @ 2006-2013 <a href="http://www.0321.tk/" target="_blank"><font color="#ffffff" size="2">0321.TK</font></a> All Right Reserved.</font></center>
  </td>
 </tr>
 <tr>
  <td width="770" align="center">
<script type="text/javascript"><!--
google_ad_client = "pub-8742386847853865";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_ad_type = "text_image";
google_ad_channel ="";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script><br>
<script src="http://s84.cnzz.com/stat.php?id=28195&web_id=28195&show=pic" language="JavaScript"></script>
  </td>
 </tr>
   </table>
</body>
</body>
</html>
