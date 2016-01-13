<?php
session_start();
include("mysqlconnect.php");
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>最新消息</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<script src="login.js"></script>
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
   </style>       <?php
				 if(isset($_SESSION['帳號'])&&$_SESSION['權限']==1)////使用者
				 {
					 echo $_SESSION['時間'] .'<br>';
					 echo $_SESSION['帳號'].'<br>';
					 echo '<a href="logout.php" class="button">登出</a>';
					  echo '<a href="registeredit.php" class="button">會員修改</a>';
					  echo '<a href="registeredit.php" class="button">優惠專區</a>';
					  echo '<a href="searchreservation.php" class="button">預約記錄</a>';
								echo '<a href="searchshopreservation.php" class="button">訂單記錄</a>';

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
						<li class="selected">
							<a href="dives.php">最新消息</a>
						</li>
						<li>
							<a href="foods.php">線上Q&A </a>
						</li>
						<li>
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
						<div class="body">
                        <style>
                           .button1 {
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
   font-size: 15px;
   font-family: Georgia, Serif;
   text-decoration: none;
   vertical-align: middle;
   float:right;
   }
.button1:hover {
   border-top-color: #586785;
   background: #586785;
   color: #ccc;
   }
.button1:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
   </style>
							<h1 align="center"><img src="images/Logo/最新消息.jpg" alt="LOGO" height="150px" width="300px">                            
							<?php if(isset($_SESSION['權限'])&&$_SESSION['權限']==0){?>
                            <a href="addnews.php" class="button1">新增最新消息</a>
                            </h1>
						<?php }	
						else{?>
                        <?php
						}
						?>
							<div class="big" id="sites">
							<?php 
							$sql="select * from news";
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
								<div class="small">
									<div class="right">
										<img src="images/<?php echo mysql_result($row,$i,"圖片");?>" alt="Img">
                                        </div>
									<div  class="left">
										<h2><a href="dives.php">n0.<?php echo mysql_result($row,$i,"識別碼");?> <?php echo mysql_result($row,$i,"標題");?></a></h2>
										<p>
											<?php echo mysql_result($row,$i,"內文");?>
										</p>
                                        <p>
                                        最後上傳日期:<?php echo mysql_result($row,$i,"日期");?>
                                        </p>
								                            	</div>
								
                                                          </div>
                                                          
							<?php }?>
                             </div>
                          </div> 
                                                    <style>
/*CSS 分頁php*/ 
DIV.green-black { 
PADDING-RIGHT: 3px; PADDING-LEFT: 3px; PADDING-BOTTOM: 3px; 
MARGIN: 3px; PADDING-TOP: 3px; TEXT-ALIGN: center 
} 
DIV.green-black A { 
BORDER-RIGHT: #2c2c2c 1px solid; PADDING-RIGHT: 5px; BORDER-TOP: #2c2c2c 1px solid;
 PADDING-LEFT: 5px; BACKGROUND: url(images/pageimage1.gif) #2c2c2c; 
PADDING-BOTTOM: 2px; BORDER-LEFT: #2c2c2c 1px solid; COLOR: #fff; 
MARGIN-RIGHT: 2px; PADDING-TOP: 2px; BORDER-BOTTOM: #2c2c2c 1px solid; TEXT-DECORATION: none 
} 
DIV.green-black A:hover { 
BORDER-RIGHT: #aad83e 1px solid; BORDER-TOP: #aad83e 1px solid;
 BACKGROUND: url(images/pageimage2.gif) #aad83e; BORDER-LEFT: #aad83e 1px solid;
 COLOR: #fff; BORDER-BOTTOM: #aad83e 1px solid 
} 
DIV.green-black A:active { 
BORDER-RIGHT: #aad83e 1px solid; BORDER-TOP: #aad83e 1px solid; 
BACKGROUND: url(images/pageimage2.gif) #aad83e; BORDER-LEFT: #aad83e 1px solid;
 COLOR: #fff; BORDER-BOTTOM: #aad83e 1px solid 
} 
DIV.green-black SPAN.current { 
BORDER-RIGHT: #aad83e 1px solid; PADDING-RIGHT: 5px; 
BORDER-TOP: #aad83e 1px solid; PADDING-LEFT: 5px; FONT-WEIGHT: bold; 
BACKGROUND: url(images/pageimage2.gif) #aad83e; PADDING-BOTTOM: 2px; 
BORDER-LEFT: #aad83e 1px solid; COLOR: #fff; MARGIN-RIGHT: 2px; 
PADDING-TOP: 2px; BORDER-BOTTOM: #aad83e 1px solid 
} 
DIV.green-black SPAN.disabled { 
BORDER-RIGHT: #f3f3f3 1px solid; PADDING-RIGHT: 5px; 
BORDER-TOP: #f3f3f3 1px solid; PADDING-LEFT: 5px; PADDING-BOTTOM: 2px;
 BORDER-LEFT: #f3f3f3 1px solid; COLOR: #ccc; MARGIN-RIGHT: 2px;
 PADDING-TOP: 2px; BORDER-BOTTOM: #f3f3f3 1px solid 
} </style>
<div class="green-black"> 
<span class="disabled"></span>
                          <?php
echo "總共:".$total."筆"; 
for($i=1;$i<=$count;$i++) {
if($i == $counts) {
echo'<a href="dives.php?page='.$i.'" >[' . $i . ']</a>';    //顯示本頁的分頁數字會以[ ]包起來
}            
else if($i == $count) {
echo '<a href="dives.php?page='.$i.'" >' . $i . '</a>';      //顯示末頁的分頁數字
}
else {
echo '<a href="dives.php?page='.$i.'">' . $i . ',</a>';    //顯示其他的分頁數字會以" , "作區隔
}        
}  
?> 
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
					<li class="active">
						<a href="dives.php">最新消息</a>
					</li>
					<li>
						<a href="foods.php">線上Q&A </a>
					</li>
					<li>
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