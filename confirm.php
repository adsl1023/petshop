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
$sql="select * from member where 帳號='".$account."'";
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
if($row['帳號']>0)
{
	echo"<SCRIPT language=javascript>
			alert ('註冊失敗，帳號重複');
		history.go(-1);

	</SCRIPT>";
}
else
{
  $sql_insert = "insert into member (帳號,密碼,姓名,信箱,地址,電話,生日,性別,權限) values ('" . $account . "','" . $password . "','" . $name . "','" .$mail. "','".$address."','" . $phone . "','" . $birth . "','"  .$sex. "','". $loginroot."');";
$result_insert=mysql_query($sql_insert,$link) or die ("無法執行新增");
 echo"<SCRIPT language=javascript>
			alert ('註冊成功');
		location.href = 'index.php';

	</SCRIPT>";


}
?>
</body>
</html>