<?php
session_start();
include("mysqlconnect.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="registeredit.js"></script>
<title>會員資料修改註冊</title>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(background1.jpg);background-repeat:repeat-x;
}
-->
</style>
</head>
<body>
<?php 
$sql="select * from member where 帳號='".$_SESSION['帳號']."'";
							$row=mysql_query($sql);
							$total=mysql_num_rows($row);
							$member=mysql_fetch_array($row);
							?>
<table width="500"border="2" align="center"background="background2.jpg" >
<form name="sign" method="post" action="confirmedit.php">
<tr bgcolor="#666666"> 
    <td height="30" colspan="2" align="center">
      <font color="#FFFFFF">修改基本資料</font>
    </td>
  </tr>
  <tr>
	  <td height="30" align="right" ><b>帳號： </b></td>
	  <td ><div style="float:left"><?=htmlspecialchars($member['帳號'])?><input type="hidden" size="10" id="account" name="account" onblur="checkaccount()" value="<?=$member['帳號']?>" ></div><div style="float:left" id="Checkac"></div></td>
  </tr>
  <tr>
	  <td height="30" align="right" ><b>密碼：</b></td>
	  <td><div style="float:left"><input type="text" size="10" id="Password" name="Password" onblur="checkpd()" value="<?=$member['密碼']?>"></div><div style="float:left" id="Checkpd"></div></td>
  </tr>
   <tr>
	  <td height="30" align="right" ><b>密碼確認：</b></td>
	  <td ><div style="float:left"><input type="password" size="10" id="password" onblur="changeFunc()" name="password" value="<?=$member['密碼']?>"></div><div style="float:left" id="Check"></div></td>
	</tr>
   <tr>
	  <td height="30" align="right" ><b>姓名：</b></td>
	  <td ><div style="float:left"><input type="text" size="10" id="name" onblur="checkname()" name="name" value="<?=$member['姓名']?>"></div><div style="float:left" id="Checkname"></div></td>
  </tr>
  <tr>
	  <td height="30" align="right"><b>信箱： </b></td>
	  <td ><div style="float:left"><input type="text" size="30" name="信箱" id="mail" onblur="checkmail()" value="<?=$member['信箱']?>"></div><div style="float:left" id="Checkmail"></div></td>
  </tr>
  <tr>
	  <td height="30" align="right"><b>地址： </b></td>
	  <td ><input type="text" size="30" name="地址" value="<?=$member['地址']?>"></td>
  </tr>
   <tr>
	  <td height="30" align="right" ><b>電話： </b></td>
	  <td ><div style="float:left"><input type="text" size="25" name="電話" id="phone" onblur="checkphone()" value="<?=$member['電話']?>"></div><div style="float:left" id="Checkphone"></div></td>
  </tr>
   <tr>
   	  <td height="30" colspan="2"><a style="color:#06F;">(家用電話請加區碼,例:區碼:02,號碼:12345678,請輸入0212345678)</a></td>
  </tr>
   <tr>
	  <td height="30" align="right" ><b>請輸入生日： </b></td>
	  <td >  <select name="年份" class="txt_input_180" id="year">
               <option value="N"></option>
               <?php $setyear=date("Y");
			   
                      for ($i=$setyear-100; $i < $setyear; $i++) {?>
                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php } ;?>
                     </select>
                     <b>年(西元)</b>
          <select name="月份" class="txt_input_180" id="mon">
               <option value="N"></option>
               <?php for ($i=1; $i <= 12; $i++) {?>
                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php } ;?>
                     </select>
                      <b>月</b>
          <select name="日期" class="txt_input_180" id="day">
               <option value="N"></option>
               <?php for ($i=1; $i <= 31; $i++) {?>
                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php } ;?>
                     </select>
                      <b>日</b></td>
  </tr>
  <tr>
  <td height="30" align="right" ><b>請選擇性別： </b></td>
  <td ><select name="性別" class="txt_input_180" id="性別">
  					 <option value="N"></option>
                	  <option value="男" <?php if($member['性別']=="男") echo "selected";?>>男</option>
                    <option value="女" <?php if($member['性別']=="女") echo "selected";?>>女</option>
                     </select></td>
  </tr>
  <tr >
    <input type="hidden" value="N" id="finalcheck">
    <td height="30"  align="right" ><input type="button" value="返回" onclick="back()"> 
      <input type="reset" value="清除" onclick="clean()">
      </td>
    <td height="30"  align="center"><input type="button" value="修改" onclick="send()">
    <?php if($_SESSION['權限']=="0"){?>
    <input type="button" value="查看所有帳戶" onclick="searchaccount()">
    <?php }?>
    </tr>
</form>
</table></body>
</html>