<?php
session_start();
include("mysqlconnect.php");
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>關於我們</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
     <script src="login.js"></script>
</head>
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
    <td height="30"  align="right" > 
      <input type="reset" value="清除" onclick="clean()">
      <input type="button" value="註冊" onclick="register()">
      </td>
    <td height="30"  align="center"><input type="button" value="登入" onclick="send()">
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
							<a href="foods.php">線上Q&A </a>
						</li>
                        <li class="selected">
							<a href="news.php">關於我們</a>
						</li>
						<li>
							<a href="contact.php">小遊戲</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="news" class="body">
							<div class="sidebar">
								<h3>最新貼文</h3>
								<ul>
									<li>
										<a href="news.html">2023 Bikini Contest Winners</a>
									</li>
									<li>
										<a href="news.html">Top 10 Diving Spots</a>
									</li>
									<li>
										<a href="news.html">Fishing ban to be implemented this year</a>
									</li>
									<li>
										<a href="news.html">Lifeguard saves child from drowning</a>
									</li>
								</ul>
								<h3>推薦商品</h3>
								<ul>
									<li>
										<a href="news.html">What to bring on the beach?</a>
									</li>
									<li>
										<a href="news.html">Planning Fun Activities</a>
									</li>
									<li>
										<a href="news.html">Diving Checklist</a>
									</li>
									<li>
										<a href="news.html">First Aid</a>
									</li>
									<li>
										<a href="news.html">How to Build a Sand Castle?</a>
									</li>
									<li>
										<a href="news.html">Tanning Tips</a>
									</li>
								</ul>
							</div>
							<div>
								<h1 align="center"><img src="images/關於我們.jpg" alt="LOGO" height="120" width="420">                </h1>     
							  <img src="images/petabout.jpg" alt="Img" width="540">
								<h2>可愛的狗狗</h2>
								<span class="time">`01 03, 2016<br> 
								by: andy hsu</span>
								<p>歡迎光臨寵物生活館！在這裡，我們為您家的寶貝寵物們精選了涉及到生活、飲食、健康、玩耍等方方面面的全系列寵物用品，由國內外知名寵物用品、寵物食品品牌根據不同品類寵物的成長特點和生活飲食習慣專門研發設計。鎖定寵物生活館，一站式完成寵物用品採購，讓您家的貓類、犬類的寶貝們過上更加舒適、快樂的高品質寵物生活！如果您家有愛犬，您可以在寵物生活館買到狗糧、狗狗零食、梳理美容用具、狗狗清潔用品、狗窩、狗籠、狗狗外出用具、狗狗玩具、狗狗服飾及挂件、健康用品和項圈、牽引帶等；家有萌貓的您可以來亞馬遜寵物商店挑選健康貓糧、貓貓零食、貓籠、貓砂用品、貓貓玩具等產品。寵物生活館祝您購物愉快！</p>
							</div>
						</div>
					</div>
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
                    <li class="active">
						<a href="news.php">關於我們</a>
					</li>
					<li>
						<a href="contact.php">小遊戲</a>
					</li>
				</ul>
				<div id="connect">
			<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a>
				</div>
			</div>
			<p>
				© 2015 by 第七組電子商務 寵物生活館所有 . All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>