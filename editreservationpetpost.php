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
$file = $_FILES['file']['name'];
echo $file;
echo move_uploaded_file($_FILES['file']['tmp_name'],"images/designer/".$file);
$designname=$_POST['設計師名稱'];
$designtime=$_POST['預約時間'];
$designintroduct=$_POST['設計師自我介紹'];
$reservationamount=$_POST['設計師名額'];
  $sql="update designer set 預約時間='" .$designtime. "',設計師自我介紹='" .$designintroduct.  "',設計師圖檔='" .$file. "',設計師名額='" .$reservationamount. "'where 設計師名稱='" .$designname. "'";
echo $sql;
$result=mysql_query($sql,$link)or die ("無法執行新增");
 echo"<SCRIPT language=javascript>
			alert ('修改成功');
		location.href = 'index.php';

	</SCRIPT>";
?>
</body>
</html>