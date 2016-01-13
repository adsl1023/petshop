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
echo move_uploaded_file($_FILES['file']['tmp_name'],"images/product/".$file);   // 搬移上傳檔案
$title=$_POST['標題'];
$content=$_POST['內文'];
date_default_timezone_set('Asia/Taipei');
$date=date("Y-m-d H:i:s");
$sql_select="select max(識別碼) from news";
$result=mysql_query($sql_select);
$row=mysql_fetch_row($result);
$start=$row[0];
$end=$start+1;
echo $end;
$sql_insert = "insert into news (識別碼,標題,內文,圖片,日期) values ('".$end."','". $title . "','" . $content . "','" . $file. "','" .$date. "')";
echo $sql_insert;
$result_insert=mysql_query($sql_insert,$link) or die ("無法執行新增");
echo $result_insert;
echo"<SCRIPT language=javascript>
			alert ('最新消息新增成功');
		location.href = 'dives.php';

	</SCRIPT>";
/*
if($reservationamount>=2)
{
	echo"<SCRIPT language=javascript>
			alert ('預約人數不能>=2人，請重新填一次');
		history.go(-1);

	</SCRIPT>";
}
else
{
  $sql_insert = "insert into designreservation (帳號,設計師名稱,預約時間,是否有任何意見,性別,預約名額,預約表單送出時間) values ('" . $_SESSION['帳號'] . "','" . $design . "','" . $designtime. "','" .$customidea. "','".$_SESSION['性別']."','" . $reservationamount . "','" . $date . "')";
$result_insert=mysql_query($sql_insert,$link) or die ("無法執行新增");
echo $result_insert;
$sql_select="select * from designer where 設計師名稱='".$design."'";
echo $sql_select;
$sql_select=mysql_query($sql_select,$link) or die ("無法執行新增");
$row=mysql_fetch_array($sql_select);
echo $row['設計師名額'];
$sql_select1="select * from designreservation where 設計師名稱='".$design."'";
$sql_select1=mysql_query($sql_select1,$link) or die ("無法執行新增");
$row1=mysql_fetch_array($sql_select1);
echo $row1['預約名額'];
$total=$row['設計師名額']-$row1['預約名額'];
$sql_update="update designer set 設計師名額='".$total."'WHERE 設計師名稱='".$design."'";
echo $sql_update;
$result_update=mysql_query($sql_update,$link) or die ("無法執行新增");

 echo"<SCRIPT language=javascript>
			alert ('預約和修改成功');
		location.href = 'rooms.php';

	</SCRIPT>";
}
*/
?>
</body>
</html>