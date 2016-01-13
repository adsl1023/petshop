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

$shopnumber=$_POST['guestNumber'];
$shopname=$_POST['guestName'];
$mail=$_POST['guestEmail'];
$sender=$_POST['guestGender'];
$topic=$_POST['guestSubject'];
$content=$_POST['guestContent'];
date_default_timezone_set('Asia/Taipei');
$date=date("Y-m-d H:i:s");
$sql="select * from message where 商品代號='".$shopnumber."'";
echo $sql;
$result=mysql_query($sql);
$row=mysql_fetch_row($result);
$account=mysql_num_rows($result);
$account=$account+1;
echo $account;
$rand=rand(1,9);
$ordernumber=$shopnumber.$rand.$account;//商品代號-隨機數-最大數量+1;
  $sql_insert = "insert into message (識別碼,商品代號,商品名稱,信箱,性別,留言主旨,留言內容,留言時間) values ('" . $ordernumber."','" . $shopnumber . "','" . $shopname . "','" . $mail . "','" .$sender. "','".$topic."','".$content."','" . $date . "')";
  echo $sql_insert;
$result_insert=mysql_query($sql_insert,$link) or die ("無法執行新增");
 echo"<SCRIPT language=javascript>
			alert ('留言成功');
		location.href = 'leftmessageshow.php';

	</SCRIPT>";
?>
</body>
</html>