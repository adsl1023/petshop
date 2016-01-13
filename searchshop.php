<?php
session_start();
include("mysqlconnect.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>寵商品查詢(給使用者)</title>
</head>
<style>
 .container{
margin:20%;
  background-color:#f5f5f5;
  margin-top:5%;
 }
 .button{
  text-align:center;
  padding:10px 0;
 }
 .top h3{
  font-family:微軟正黑體;
   font-size:25px;
    text-align:center;
 }
 .form-group{
  font-family:微軟正黑體;
  font-size:20px;
    text-align:center;
 }
</style>
<body>

<p align="center"><font size="5" color="#009999">寵物商品查詢(給使用者)</font></p><br> 
<div class="container">
 <div class="top">
    </div>
  <form id="form1" name="form1" method="post"  class="form-horizontal"enctype="multipart/form-data" >
<p>商品名稱：
    <input name="city" type="text" id="city" value="<?php
 if(isset($_SESSION['city']))
 {
	 echo $_SESSION['city'];
 }
	 ?>" />
  </p>
    <p>
      <input type="submit" name="button" id="button" value="搜尋" align="center"/>
      </p>
      <div class="form-group">
    </p>
    <p>
    </p>
    <?php
 if(isset($_POST['city'])){
 
	 ?>
      <label for="排名" class="col-sm-4 control-label">商品搜尋：</label>
      
    </p>
    <table width="396" height="261" border="1" align="center">
      <tr>
    <th width="77" scope="col">商品代號</th>
    <th width="81" scope="col">商品名稱</th>
    <th width="111" scope="col">單價</th>
    <th width="99" scope="col">訂購</th>
  </tr>
<?php 
								$city=$_POST['city'];
								$_SESSION['city']=$city;
							$sql="select * from shopcategory where 商品名稱 like '%".$_SESSION['city']."%'";
							echo $sql;
							$row=mysql_query($sql);
							$total=mysql_num_rows($row);
							$count=ceil($total/4);
							//第一頁使用
							if(isset($_GET['page']))
							{
									$min=($_GET['page']-1)*4;
									$max=$_GET['page']*4;
									$counts = intval($_GET["page"]);
									if($_GET['page']==$count)
								{
								    $min=($_GET['page']-1)*4;
									$max=$total;
									$counts = intval($_GET["page"]);
								}
							}
							else
							{
								$counts=1;
								$min=0;
									$max=2;
							}
							for ($i=$min; $i<$max ; $i++) {
								?>
  <tr>
    <th scope="row" align="center"><?php echo mysql_result($row,$i,"商品代號");?></th>
    <td align="center"><?php echo mysql_result($row,$i,"商品名稱");?></td>
    <td align="center"><?php echo mysql_result($row,$i,"單價");?></td>
    <td align="center" class="button"><a href="aboutshow.php?shopname=<?php echo mysql_result($row,$i,"商品代號");?>">訂購中</td>
  </tr>
 <?php }
?>
</table>
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
if($i == $counts) {?>
<?php

echo'<a href="searchshop.php?page='.$i.'" >[' . $i . ']</a>';    //顯示本頁的分頁數字會以[ ]包起來
?>     
<?php 
}
else if($i == $count) {
echo '<a href="searchshop.php?page='.$i.'" >' . $i . '</a>';      //顯示末頁的分頁數字
?>
<?php
}
else {
echo '<a href="searchshop.php?page='.$i.'">' . $i . ',</a>';    //顯示其他的分頁數字會以" , "作區隔
} 
}
 }
?> 
      </div>
                             <p>
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
   float:center;
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
                                 </p>
                            <SCRIPT language=javascript>
                            

	function back(){
	location.href="index.php";
	}
	</script>
                             <p><input type="button" value="返回" onclick="back()" class="button"></p>
    </form>
    
</div>
</body>
</html>