<?php
session_start();
include("mysqlconnect.php");
include_once("rootcontrol.php");
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>聯絡我們</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
    <script src="login.js"></script><!-- ... 登入判斷... -->
    <script>
function btneven ()
{
	var input = document.getElementById("numb").value;
	if (isNaN(input) || input == "" || input < 1|| input > 100)
	{
		document.getElementById("t1").innerHTML = "請輸入0~100的數值!!";
	}
	else
	{
		document.getElementById("t1").innerHTML = "你選的數字為: "+document.getElementById("numb").value;
		var computerValue = randForComputer();
		document.getElementById("t2").innerHTML = "電腦挑的數字為: "+computerValue;
		var radioChose = "";
		var radios = document.getElementsByName('radio');
		for(var i = 0, length = radios.length; i < length; i++)
		{
			if (radios[i].checked)
				radioChose = radios[i].value;
		}
		document.getElementById("t3").innerHTML = "賭注大小為: "+radioChose;
		compare(document.getElementById("numb").value,computerValue,radioChose);
		
	}
}
function randForComputer()
{
	return Math.floor(Math.random() * 100)+1;
}
function compare(user,computer,money)
{
	if (user == computer)
	{
		document.getElementById("ans").innerHTML = "與電腦挑的數字相同，莊家(電腦)贏，你輸了"+money;	
		document.getElementById("ans").className = "textCss3";
		return 0;
	}
	var MaxOrMin = Math.floor(Math.random() * 100)+1;
	if (MaxOrMin > 5)
	{
		document.getElementById("ans").innerHTML = "這次比大";
		if (user > computer)
		{
			document.getElementById("ans").innerHTML += "，你贏了"+money;
			document.getElementById("ans").className = "textCss2";
		}
		else
		{
			document.getElementById("ans").innerHTML += "，你輸了"+money;	
			document.getElementById("ans").className = "textCss3";
		}
	}
	else
	{
		document.getElementById("ans").innerHTML = "這次比小";
		if (user < computer)
		{
			document.getElementById("ans").innerHTML += "，你贏了"+money;
			document.getElementById("ans").className = "textCss2";
		}
		else
		{
			document.getElementById("ans").innerHTML += "，你輸了"+money;	
			document.getElementById("ans").className = "textCss3";
		}
	}
}
</script>
<style type="text/css">
.titleCss {
	font-size: 20px;
}
.textCss1 {
	font-size: 24px;
	text-decoration: blink;
}
.textCss2 {
	font-size: 36px;
	text-decoration: blink;
	color: #00F;
	background-color: #FC9;
	border-top-width: 4px;
	border-right-width: 4px;
	border-bottom-width: 4px;
	border-left-width: 4px;
	border-top-style: dotted;
	border-right-style: none;
	border-bottom-style: dotted;
	border-left-style: none;
	border-top-color: #00F;
	border-right-color: #00F;
	border-bottom-color: #00F;
	border-left-color: #00F;
	text-align: center;
}
.textCss3 {
	font-size: 36px;
	text-decoration: blink;
	color: #F00;
	background-color: #FC9;
	border-top-width: 4px;
	border-right-width: 4px;
	border-bottom-width: 4px;
	border-left-width: 4px;
	border-top-style: dotted;
	border-right-style: none;
	border-bottom-style: dotted;
	border-left-style: none;
	border-top-color: #F00;
	border-right-color: #F00;
	border-bottom-color: #F00;
	border-left-color: #F00;
	text-align: center;
}
.textCss4 {
	font-size: 36px;
	text-decoration: blink;
	color: #000;
	border-top-width: 4px;
	border-right-width: 4px;
	border-bottom-width: 4px;
	border-left-width: 4px;
	border-top-style: dotted;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #F96;
	border-right-color: #F96;
	border-bottom-color: #F96;
	border-left-color: #F96;
	text-align: center;
}
</style>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>
				</div>
                                <style>
                .button {
   border-top: 1px solid #ffea05;
   background: #fafafa;
   background: -webkit-gradient(linear, left top, left bottom, from(#ffea05), to(#fafafa));
   background: -webkit-linear-gradient(top, #ffea05, #fafafa);
   background: -moz-linear-gradient(top, #ffea05, #fafafa);
   background: -ms-linear-gradient(top, #ffea05, #fafafa);
   background: -o-linear-gradient(top, #ffea05, #fafafa);
   padding: 10px 20px;
   -webkit-border-radius: 14px;
   -moz-border-radius: 14px;
   border-radius: 14px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #2b2a2b;
   font-size: 20px;
   font-family: Georgia, Serif;
   text-decoration: none;
   vertical-align: middle;
   float:left;
   }
.button:hover {
   border-top-color: #586785;
   background: #586785;
   color: #ccc;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
   </style>
                       <?php
				 if(isset($_SESSION['帳號'])&&$_SESSION['權限']==1)////使用者
				 {
					 echo $_SESSION['時間'] .'<br>';
					 echo $_SESSION['帳號'].'<br>';
					 echo '<a href="logout.php" class="button">登出</a>';
					  echo '<a href="registeredit.php" class="button">會員修改</a>';
					  echo '<a href="registeredit.php" class="button">優惠專區</a>';
					  echo '<a href="searchreservation.php" class="button">預約記錄</a>';
				
				?> 
				<?php 
				}
				 else if (isset($_SESSION['帳號'])&&$_SESSION['權限']==0)//管理者
				{
				echo $_SESSION['時間'] .'<br>';
					 echo $_SESSION['帳號'].'<br>';
					 echo '<a href="logout.php" class="button">登出</a>';
					  echo '<a href="registeredit.php" class="button">管理者會員修改</a>';
					  echo '<a href="registeredit.php" class="button">優惠專區更新</a>';
					   echo '<a href="searchreservationforadmin.php" class="button">所有預約記錄修改</a>';
					 echo '<a href="editreservationforadmin.php" class="button">編輯所有設計師</a>';	     
					  echo '<a href="searchorderforadmin.php" class="button">所有訂單記錄</a>';
				}
				else
				{
				?>
                <div id="login">
					<table width="192"border="2" align="center"background="background2.jpg" >
<form name="sign" method="post" action="connect.php">
<tr bgcolor="#666666"> 
    <td height="30" colspan="2" align="center">
      <font color="#FFFFFF">登入</font>
    </td>
  </tr>
  <tr>
	  <td height="30" align="right" ><b>帳號： </b></td>
	  <td ><div style="float:left"><input type="text" size="10" id="account" name="account" onblur="checkaccount()"  ></div><div style="float:left" id="Checkac"></div></td>
  </tr>
  <tr>
	  <td height="30" align="right" ><b>密碼：</b></td>
	  <td><div style="float:left"><input type="password" size="10" id="Password" name="password" onblur="checkpd()"></div><div style="float:left" id="Checkpd"></div></td>
  </tr>
   <tr >
    <input type="hidden" value="N" id="finalcheck">
    <td height="25"  align="right" > 
      <input type="reset" value="清除" onclick="clean()">
      <input type="button" value="註冊" onclick="register()">
      </td>
    <td height="25"  align="center"><input type="button" value="登入" onclick="send()">
    </tr>
  </form>
</table>
			 </div>
                         <?php } ?>   
				<div id="navigation">
					<ul>
						<li>
							<a href="index.php">首頁</a>
						</li>
						<li>
							<a href="about.php">商品</a>
						</li>
						<li>
							<a href="rooms.php">預約</a>
						</li>
						<li>
							<a href="dives.php">最新消息</a>
						</li>
						<li>
							<a href="foods.php">線上Q&amp;A</a>
						</li>
						<li>
							<a href="news.php">關於我們</a>
						</li>
						<li class="selected">
							<a href="contact.php">小遊戲</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
					<p class="titleCss">請輸入一個數值:
<input id="numb" type="text">
<br />
<br />
</p>

<form id="form1" name="form1" method="post" action="" >
<p> <nobr class="titleCss">賭注:</nobr>
  <input name="radio" type="radio" id="r100" value="100" checked="checked" />
  <label for="100">100</label>
  <input type="radio" name="radio" id="r500" value="500" />
  <label for="500">500</label>
  <input type="radio" name="radio" id="r1000" value="1000" />
  <label for="1000">1000</label>
</p>
</form>

<br />
<button type="button" onclick="btneven()">送出</button>

<p id="t1" class="textCss1"></p>
<p id="t2" class="textCss1"></p>
<p id="t3" class="textCss1"></p>
<p ></p>
<p ></p>
<p id="ans" class="textCss4" >&nbsp;</p>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li>
						<a href="index.php">首頁</a>
					</li>
					<li>
						<a href="about.php">商品</a>
					</li>
					<li>
						<a href="rooms.php">預約</a>
					</li>
					<li>
						<a href="dives.php">最新消息</a>
					</li>
					<li>
						<a href="foods.php">線上Q&A </a>
					</li>
					<li>
                    <li>
						<a href="news.php">關於我們</a>
					</li>
					<li>
                    <li class="active">
						<a href="contact.php">小遊戲</a>
					</li>
				</ul>
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© 2015 by 第七組電子商務 寵物生活館所有 . All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>