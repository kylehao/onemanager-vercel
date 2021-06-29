<?php

if($_GET['page'] == "")
{
	header("location:list.php?page=1");
}

$nowpage = $_GET['page'];

include("config.php");

$imgstop = $nowpage * $listnum;

$dir = opendir($imgdir);

$imgstart = $imgstop - $listnum;

$num = 0;

while (($file = readdir($dir)) !== false)
{
	if($file != "." && $file != "..")
	{
		$allcount++;
		if($imgstart >= $imgstop)
		{
			break;
		}
		if($imgstart != $num)
		{
			$num++;
		}
		else
		{
			$imgstart++;
			$num++;
			$imglist = "<li><a href=\"./read.php?img=" . $file . "\" target=\"_blsnk\"  title=\"" . $file . "\" ><img src=\"" . $imgdir . "/" . $file . "\" width=\"160\" height=\"120\" alt=\"" . $file . "\"  title=\"" . $file . "\" /></a></li>" . $imglist;
		}
	}
}

$d = dir($imgdir);
$allcount=0;
while (false !== ($entry = $d->read()))
{
	if(is_file($d->path."/".$entry))
	{
		$allcount++;
	}   
}
$d->close();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>图列列表 - Powered by cloud.eu.org</title>
<meta name="keywords" content="<?php echo $keyword; ?>,图片大全,图片列表" />
<meta name="description" content="<?php echo $keyword; ?>,图片大全,图片列表" />
<style type="text/css">
body { margin:0 auto; font-size:12px; font-family:Verdana; line-height:1.5; margin-left:auto; margin-right:auto; }
ul,dl,dt,dd,h1,h2,h3,h4,h5,h6,form { padding:0; margin:0;}
ul { list-style:none;}
img { border:0px;}
a { color:#05a; text-decoration:none;}
a:hover { color:#f00;}
#layout { width:960px; border:2px solid #ccc; padding-bottom:20px; overflow:auto; zoom:1;margin-left:auto; margin-right:auto; }
#layout ul li { width:165px; float:left; margin:20px 0 0px 20px; display:inline; text-align:center;}
#layout ul li a { display:block;}
#layout ul li a img { padding:1px; border:1px solid #e1e1e1; margin-bottom:3px; display:block;}
#layout ul li a:hover img { padding:0px; border:2px solid #f98510;}
#pagechoose{ width:958px; border:0px solid #ccc; padding-bottom:1px; overflow:auto; zoom:1;margin-left:auto; margin-right:auto;}
#top{margin-left:auto; margin-right:auto;}
</style>
</head>
<body>
<p style="position:absolute; left:;10px; top:2px;"><a href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;<<返回&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
<table border="0" width="960" id="top">
<tr>
<td width="225">
<a href="<?php echo $name; ?>"><img src="systemimg/list_logo.gif" border="0" width="225" /></a>
</td>
<td>
<!--广告位728*90开始-->
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
</script>
<!--广告位728*90结束-->
</td>
</tr>
</table>
<p></p>
<div id="layout">
<ul>
<?php echo $imglist; ?>
</ul>
<div id="pagechoose">
<center>
<hr width="956px" />
<?php

$pagecount = $allcount/$listnum;

$pagecount = ceil($pagecount);


for($i=1;$i<=$pagecount;$i++)
{
	if($nowpage == $i)
	{
		$hreflink .= "[" . $i . "] ";
	}
	else
	{
		$hreflink .= "<a href=\"list.php?page=" . $i . "\">[" . $i . "]</a> ";
	}
}

$next = $nowpage + 1;

$last = $nowpage - 1;

if($nowpage == 1)
{
	$hreflink .= "<a href=\"list.php?page=" . $next . "\">下一页</a>";
}
elseif($nowpage == $pagecount)
{
	$hreflink = "<a href=\"list.php?page=1\">首页</a> " . "<a href=\"list.php?page=" . $last . "\">上一页</a>" . $hreflink;
}
else
{
	$hreflink = "<a href=\"list.php?page=1\">首页</a> " . "<a href=\"list.php?page=" . $last . "\">上一页</a>" . $hreflink . "<a href=\"list.php?page=" . $next . "\">下一页</a>";
}

echo $hreflink;

?>
</center>
</div>
</div>
<center>
<p>本站图片由网友上传，如无意间侵犯了您的版权或者图片含有违法内容，请联系本站管理员，我们会立即删除</p>
<br />版权所有&copy;<a href="http://cloud.eu.org">cloud.eu.org</a>
</center>
</body>
</html>
