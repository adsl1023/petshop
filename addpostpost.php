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
echo move_uploaded_file($_FILES['file']['tmp_name'],"images/question/".$file);// 搬移上傳檔案   
$title=$_POST['主題'];
$content=$_POST['簡單描述'];
date_default_timezone_set('Asia/Taipei');
$date=date("Y-m-d H:i:s");
$sql_select="select *  from question";
$result=mysql_query($sql_select);
$row=mysql_fetch_row($result);
$start=$row[0];
$end=$start+1;
echo $end;
$sql_insert = "insert into question(識別碼,主題,簡單描述,圖檔,發文帳號,最後上傳日期) values ('".$end."','". $title . "','" . $content . "','" . $file. "','". $_SESSION['姓名']."','" . $date . "')";
echo $sql_insert;
$result_insert=mysql_query($sql_insert,$link) or die ("無法執行新增");
echo $result_insert;
echo"<SCRIPT language=javascript>
			alert ('最新消息新增成功');
		location.href = 'dives.php';

	</SCRIPT>";
?>
</body>
</html>