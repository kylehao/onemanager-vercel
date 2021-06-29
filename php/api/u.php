<?php

session_start();

if($_SESSION['yzcode'] != $_POST['yzcode'])
{
	echo "验证码错误!<a href=\"index.php\">返回</a>";
	exit;
}

$_SESSION['yzcode'] == rand(1,100000);

include ("config.php");

//文件格式判断
$imgtypearray = explode("|",$expectimgtype);
$counttype = count($imgtypearray);
$getimgtype = str_replace("image/"  ,"", $_FILES["file"]["type"]);
for($i=0;$i<$counttype;$i++)
	{
		if ($getimgtype == $imgtypearray[$i])
			{
				break;
			}
		else
			{
				if($i == $counttype - 1)
					{
						$pagetitle = "上传错误！文件格式只支持：GIF、JPG和png; 文件最大".$imgmax."KB .";
					}
			}
	}





//上传限制
if ($_FILES["file"]["size"] < $imgmax)
	{
		if ($_FILES["file"]["error"] > 0)
			{
				$pagetitle = "上传错误！错误号： " . $_FILES["file"]["error"] ;
			}
	}
else
	{
		$pagetitle = "上传错误！文件最大".$imgmax." KB";
	}


		
//判断文件是否存在
$imagename = $_FILES["file"]["name"];
$imagebak = $_FILES["file"]["name"];
$get_imgtype = str_replace("image/"  ,"", $_FILES["file"]["type"]);
if($get_imgtype == "jpeg")
{
	$get_imgtype = "jpg";
}
$fp = fopen("count.txt","r");
$num = fread($fp,filesize("count.txt"));
fclose($fp);
$imagename = date("Ymd")."-". $num .".".$get_imgtype;
//date("Y.m.d")
$count = 1;
while(file_exists($imgdir. "/" . $imagename))
	{
		$num++;
		$imagename = date("Ymd")."-" . $num .".".$get_imgtype;
	}
if(move_uploaded_file($_FILES["file"]["tmp_name"], $imgdir . "/" . $imagename))
	{
		$pagetitle = "图片上传成功";
	}
$fp = fopen("count.txt","w");
fwrite($fp,$num);
fclose($fp);
$num = 0
?>



<?php
//********图片上传成功********
if($pagetitle == "图片上传成功")
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $pagetitle; ?></title>
<script language="javascript"> function oCopy(obj){ obj.select(); js=obj.createTextRange(); js.execCommand("Copy"); alert("复制成功!"); } </script>
<style type="text/css">
a{text-decoration:none; color:#666666;}
a:hover{text-decoration:underline;}
#all{width:800px; margin-left:auto; margin-right:auto;}
#top{position:absolute; top:3px; left:10px}
#info{height:200px;}
#left{float:left;}
#right{float:right;}
#yl{width:798px; border:double; border-bottom-width:1px; border-bottom-color:#999999; border-top-width:1px; border-top-color:#999999; border-left-width:0px; border-left-color:#CCCCCC; border-right-width:0px;}
</style>
</head>
<body>
<div id="all">
<div id="top"><a href="index.php">返回首页</a></div>
<div id="info"><div id="left"><table border="0" width="400" style="font-size:14px;"><tr><td><font color="#FF0000" size="+1">图片信息</font></td><td></td></tr><tr><td>图片名字：</td><td><?php echo $_FILES["file"]["name"]; ?></td></tr><tr><td>图片格式：</td><td><?php echo str_replace("image/"  ,"", $_FILES["file"]["type"]); ?></td></tr><tr><td>图片大小：</td><td><?php echo $_FILES["file"]["size"]/1024 . "kb"; ?></td></tr><tr><td>图片地址：</td><td><input onclick="oCopy(this)" style="width:300px" id="url" name="url" type="text" value="<?php echo $name ."/" . $imgdir . "/" . $imagename; ?>" ></td></tr><tr><td>查看地址：</td><td><input onclick="oCopy(this)" style="width:300px" id="url" name="url" type="text" value="<?php echo $name; ?>/read.php?img=<?php echo $imagename; ?>" ></td></tr><tr><td>&nbsp;</td><td></td></tr><tr><td>图片预览</td><td><a href="<?php echo $name; ?>/read.php?img=<?php echo $imagename; ?>" style="color:#FF0000" target="_blank">查看原图</a>&nbsp;&nbsp;<a href="index.php" style="color:#FF0000">返回首页</a></td></tr></table></div>
<div id="right"><?php echo $upimgads; ?></div></div>
<div id="yl">
<?php
$getimgwidth = getimagesize($name ."/" . $imgdir . "/" . $imagename);
if($getimgwidth[1]>=798)
	{
		echo "<center><div style=\"height:10px\"></div><img border=\"0\" src=\"" . $name ."/" . $imgdir . "/" . $imagename . "\" width=\"798\" alt=\"图片预览\" /><div style=\"height:10px\"></div></center>";
	}
else
	{
		echo "<center><div style=\"height:10px\"></div><img border=\"0\" src=\"" . $name ."/" . $imgdir . "/" . $imagename . "\" alt=\"图片预览\" /><div style=\"height:10px\"></div></center>";
	}
?>
</div><center>
<font size="-1">Copyright @ 2006-2013 <a href="http://cloud.eu.org/" target="_blank"><font color="#000000" size="2">0321.TK</font></a> All Right Reserved.</font></center>
</div>
</body>
</html>
<?php
	}
else
	{
//********图片上传失败********
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $pagetitle; ?></title>
<style type="text/css">
a{color:#0066FF; text-decoration:none;}
a:hover{text-decoration:underline;}
#all{width:600px; margin-left:auto; margin-right:auto;}
</style>
</head>
<body>
<div id="all">图片上传失败！图片格式只支持：<?php echo $expectimgtype; ?>; 最大<?php echo $imgmax." KB"; ?>。<a href="index.php">返回</a>
</div>
</body>
</html>
<?php
	}
?>