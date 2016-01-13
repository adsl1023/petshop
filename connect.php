<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();
include("mysqlconnect.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>連結查詢資料庫</title>
</head>
<body>
<?php
$account=$_POST['account'];
$password=$_POST['password'];
date_default_timezone_set('Asia/Taipei');
$date=date("Y-m-d H:i:s");
$sql="select * from member where 帳號='".$account."'and 密碼='".$password."'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
if($rows==0)
{
	echo "登入錯誤";	
	echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	?>
    <SCRIPT language=javascript>
  alert ("..您輸入的帳號或密碼錯誤，請重新輸入！");
  //document.location.href="home.php";
  history.go(-1);
 //-->
 </SCRIPT>
 <?php
}
else//登入成工作權限判斷
{
        $_SESSION['時間']=$date;
		 $_SESSION['姓名']=$rows['姓名'];
		 $_SESSION['信箱']=$rows['信箱'];
		$_SESSION['帳號']=$rows['帳號'];
		$_SESSION['密碼']=$rows['密碼'];
		$_SESSION['性別']=$rows['性別'];
		$_SESSION['權限']=$rows['權限'];
		echo $rows['姓名']."登入成功";
echo '<meta http-equiv=REFRESH CONTENT=1;url=dives.php>';

}

?>

</body>
</html>