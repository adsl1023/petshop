<?php
session_start();
include("mysqlconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<body>
<?php

$account=$_POST['account'];
$mail=$_POST['信箱'];
$name=$_POST['name'];
$password=$_POST['password'];
$address=$_POST['地址'];
$phone=$_POST['電話'];
$year=$_POST['年份'];
$mon=$_POST['月份'];
$day=$_POST['日期'];
$sex=$_POST['性別'];
$loginroot=1;
$birth=$year."-".$mon."-".$day;
$sql="update member set 信箱='".$mail."',密碼='".$password."',姓名='".$name."',地址='".$address."',電話='".$phone."',生日='".$birth."',性別='".$sex."'where 帳號='".$account."'";
echo $sql;
$result=mysql_query($sql,$link)or die ("無法執行新增");
 echo"<SCRIPT language=javascript>
			alert ('修改成功');
		location.href = 'index.php';

	</SCRIPT>";
?>
</body>
</html>