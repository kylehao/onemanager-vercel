<?php
include("config.php");
if($_GET['img'] != "")
{
	$action = "open";
}
else
{
	header("location:https://cloud.eu.org");
}

if($action == "open")
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="<?php echo $keyword; ?>,ͼƬ�鿴" />
<meta name="description" content="<?php echo $keyword; ?>,ͼƬ�鿴" />
<title>ԭͼ�鿴</title>
</head>
<body>
<a href="index.php">����</a>&nbsp;&nbsp;&nbsp;&nbsp;���淽��������Ƶ�ͼƬ������Ҽ���ͼƬ���Ϊ�����漴��<p>
<img src="<?php echo $name ."/" . $imgdir . "/" . $_GET['img']; ?>" alt="ԭͼ�鿴" /></p><p></p><p><font color="#000000" size="2">Copyright @ 2006-2013 <a href="http://www.cloud.eu.org/" target="_blank"><font color="#000000" size="2">cloud.eu.org</font></a> All Right Reserved.</font></p>
</body>
</html>
<?php
}
?>