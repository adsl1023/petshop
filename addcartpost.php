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
$account=$_POST['帳號'];
$shopname=$_POST['商品名稱'];
$account=$_POST['訂購數量'];
$shopprice=$_POST['商品單價'];
$account=(int)$account;
$shopprice=(int)$shopprice;
$total=$account*$shopprice;
$year=$_POST['年份'];
$month=$_POST['月份'];
$day=$_POST['日期'];
$order="缺貨中";
$send=$year."-".$month."-".$day;
$sql_select="select * from 訂單";
$result=mysql_query($sql_select);
$row=mysql_fetch_row($result);
$accounts=mysql_num_rows($result);
$accounts=$accounts+1;
echo $account;
$rand=rand(1,9);
$ordernumber=$_SESSION['帳號'].$rand.$accounts;//商品代號-隨機數-最大數量
$sql_insert = "insert into 訂單 (訂單編號,訂購人帳號,商品名稱,商品數量,商品價格,合計,出貨狀況,取貨日期) values ('".$ordernumber."','". $_SESSION['帳號'] . "','" . $shopname . "','" . $account. "','" .$shopprice. "','".$total. "','".$order."','" . $send. "')";
echo $sql_insert;
$result_insert=mysql_query($sql_insert,$link) or die ("無法執行新增");
echo"<SCRIPT language=javascript>
			alert ('商品預定成功，請耐心等待');
		location.href = 'about.php';

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