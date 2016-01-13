<?php
session_start();
include("mysqlconnect.php");

?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>商品選購顯示</title>
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
						<li class="selected">
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
   font-size: 20px;
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
							<h1>商品個別選購顯示
                            <?php 
							$sql="select * from shopcategory where 商品代號='".$_GET['shopname']."'";
							$row=mysql_query($sql);
							$total=mysql_num_rows($row);
							$aaa=mysql_fetch_array($row);
							?>
                             <a href="leftmessageshow.php?shopname=<?php echo $aaa['商品代號'];?>" class="button1">留言版</a>
                               <a href="addcart.php?shopname=<?php echo $aaa['商品代號'];?>" class="button1" >訂購</a>
                            </h1>
                            
					<div class="big2">
         
							 <div class="small2">
									<div class="right2">
										<a href="aboutshow.php?shopname=<?php echo $aaa['商品代號'];?>"><img src="images/product/<?php echo $aaa['圖檔'];?>" alt="png"></a>;
                                   <div  class="left2">
										<h2><?php echo $aaa['詳細資料'];?></a></h2>
						                  
                                          </div>
                                    </div> 
                             </div>
                             </div>
                             <style>
 .container{
  margin-top::2%;
margin:30%;
 }
 .button{
  text-align:center;
  padding:20px 0;
 }
 .top h3{
  font-family:微軟正黑體;
  text-align:center;
  padding:10px 0;
 }
 .form-group{
  font-family:微軟正黑體;
  font-size:16px;
    text-align:center;
 }
 
</style>
<?php
if(!isset($_SESSION['帳號']))
{
?>
<SCRIPT language=javascript>
<!--
alert ("請先登入在使用留言版！");
window.location.assign("about.php");
//-->                 
</SCRIPT>

<?php
}
else
{
?>
<div class="container">
 <div class="top">
    <h3>留言版</h3>
    </div>
    <form id="form1" name="form1" method="post" action="messageconfirm.php" class="form-horizontal">
     <div class="form-group">
            <label for="guestNumber" class="col-sm-4 control-label">商品代碼：</label>
            <div class="col-sm-6">
                <?php echo $aaa['商品代號']?><input type="hidden" class="form-control" placeholder="自動填入" name="guestNumber" id="guestNumber" value="<?php echo $aaa['商品代號']?>" />
            </div>
        <div class="form-group">
          <label for="guestName" class="col-sm-4 control-label">商品名稱：</label>
            <div class="col-sm-6">
                <?php echo $aaa['商品名稱']?><input type="hidden" class="form-control" placeholder="您的名稱" name="guestName" id="guestName"value="<?php echo $aaa['商品名稱']?>" />
            </div>
            <div class="form-group">
          <label for="guestName" class="col-sm-4 control-label">帳號：</label>
            <div class="col-sm-6">
                <?php echo $_SESSION['帳號']?><input type="hidden" class="form-control" placeholder="您的帳號" name="guestName" id="guestName"value="<?php echo $_SESSION['帳號']?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="guestEmail" class="col-sm-4 control-label">信箱：</label>
            <div class="col-sm-6">
              <?php echo $_SESSION['信箱'] ?> <input type="hidden" class="form-control" placeholder="您的信箱" name="guestEmail" id="guestEmail" value=" <?php  echo $_SESSION['信箱'] ?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="guestGender" class="col-sm-4 control-label">性別：</label>
            <label class="radio-inline">
                <input type="radio" name="guestGender" id="radio" value="男" /> 男
            </label>
            <label class="radio-inline">
                <input type="radio" name="guestGender" id="radio2" value="女" />女
            </label>
        </div>
        <div class="form-group">
            <label for="guestSubject" class="col-sm-4 control-label">留言主旨：</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="guestSubject" id="guestSubject" />
            </div>
        </div>
        <div class="form-group">
          <label for="guestContent" class="col-sm-4 control-label">留言內容：</label>
          <div class="col-sm-6">
              <textarea name="guestContent" class="form-control" id="guestContent" rows="5"></textarea>
          </div>
        </div>
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
   font-size: 20px;
   font-family: Georgia, Serif;
   text-decoration: none;
   vertical-align: middle;
   float:center;
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
        <div class="button1">
            <input type="submit" name="button1" id="button1" value="送出" class="button1"/>
            <a href="leftmessageshow.php?shopname=<?php echo $aaa['商品代號'];?>" class="button1">留言顯示</a>
        </div>
    </form>
</div>  
<?php }?>
					</div>     
                 </div>
			</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li>
						<a href="index.php">首頁</a>
					</li>
					<li class="active">
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