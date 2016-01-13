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
	<title>優惠活動</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
    <script src="login.js"></script><!-- ... 登入判斷... -->
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
						<li class="selected">
							<a href="foods.php">線上Q&A </a>
						</li>
						<li>
							<a href="news.php">關於我們</a>
						</li>
						<li>
							<a href="contact.php">意見箱</a>
						</li>
					</ul>
				</div>
			</div>
            <?php 
							$sql="select * from 線上發問";
							$row=mysql_query($sql);
							$total=mysql_num_rows($row);
							$count=ceil($total/3);
							//第一頁使用
							if(isset($_GET['page']))
							{
									$min=($_GET['page']-1)*3;
									$max=$_GET['page']*3;
									$counts = intval($_GET["page"]);
									if($_GET['page']==$count)
								{
								    $min=($_GET['page']-1)*3;
									$max=$total;
									$counts = intval($_GET["page"]);
								}
							}
							else
							{
								$counts=1;
								$min=0;
									$max=3;
							}
							for ($i=$min; $i<$max ; $i++) {
								 ?>
			<div id="contents">
				<div class="box">
					<div>
						<div class="body">
							<h1>線上Q&A</h1>
							<ul id="foods">
								<li>
									<h2><a href="food.php?topic=<?php echo mysql_result($row,$i,"標題");?>"><?php echo mysql_result($row,$i,"標題");?></a></h2>
									<div class="infos">
										<a href="foods.php"><img src="images/product<?php echo mysql_result($row,$i,"圖片");?>.jpg" alt="Img" height="169" width="780"><span class="cover"></span></a>
										<p>
											<span><?php echo mysql_result($row,$i,"標題");?></span> <?php echo mysql_result($row,$i,"內文");?>
										</p>
									</div>
								</li>
                            <?php }   ?>
                             <?php
echo "總共:".$total."筆"; 
for($i=1;$i<=$count;$i++) {
if($i == $counts) {
echo'<a class="linkcss" href="foods.php?page='.$i.'" >[' . $i . ']</a>';    //顯示本頁的分頁數字會以[ ]包起來
}            
else if($i == $count) {
echo '<a class="linkcss" href="foods.php?page='.$i.'" >' . $i . '</a>';      //顯示末頁的分頁數字
}
else {
echo '<a  class="linkcss" href="foods.php?page='.$i.'">' . $i . ',</a>';    //顯示其他的分頁數字會以" , "作區隔
}        
}  
?>
							</ul>
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
					<li class="active">
						<a href="foods.php">線上Q&A </a>
					</li>
					<li>
                    <li>
						<a href="news.php">關於我們</a>
					</li>
					<li>
                    <li>
						<a href="contact.php">意見箱</a>
					</li>
				</ul>
				<div id="connect">
					<a<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a>
				</div>
			</div>
			<p>
            © 2015 by 第七組電子商務 寵物生活館所有 . All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>