<?php
session_start();
include("mysqlconnect.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>寵物設計師資料查詢(給管理者)</title>
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
<p align="center"><font size="5" color="#009999">寵物設計師資料查詢(給管理者)</font></p><br> 
<div class="container">
 <div class="top">
    </div>
  <form id="form1" name="form1" method="post" action="" class="form-horizontal"enctype="multipart/form-data" >

     <div class="form-group">
            <label for="排名" class="col-sm-4 control-label">設計師記錄：</label>
           
      <table width="481" height="241" border="1" align="center">
  <tr>
    <th width="42" height="122" scope="col">識別碼</th>
    <th width="44" scope="col">設計師名稱</th>
    <th width="23" scope="col">預約時間</th>
    <th width="118" scope="col">設計師自我介紹</th>
    <th width="17" scope="col">預約名額</th>   
    <th width="51" scope="col">圖檔</th> 
     <th width="65" scope="col">編輯</th>
  </tr>
<?php 
							$sql="select * from designer";
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
									$max=4;
							}
							for ($i=$min; $i<$max ; $i++) {
								?>
                                                            <style>
                                    .button {
   border-top: 1px solid #2378ad;
   background: #ffffff;
   background: -webkit-gradient(linear, left top, left bottom, from(#0089f2), to(#ffffff));
   background: -webkit-linear-gradient(top, #0089f2, #ffffff);
   background: -moz-linear-gradient(top, #0089f2, #ffffff);
   background: -ms-linear-gradient(top, #0089f2, #ffffff);
   background: -o-linear-gradient(top, #0089f2, #ffffff);
   padding: 10px 20px;
   -webkit-border-radius: 14px;
   -moz-border-radius: 14px;
   border-radius: 14px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #000000;
   font-size:15px;
   font-family: Georgia, Serif;
   text-decoration: none;
   vertical-align: middle;
   float:center;
   }
.button:hover {
   border-top-color: #4c5e82;
   background: #4c5e82;
   color: #ccc;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
   </style>
  <tr>
    <th scope="row"><?php echo mysql_result($row,$i,"識別碼");?></th>
    <td><?php echo mysql_result($row,$i,"設計師名稱");?></td>
    <td><?php echo mysql_result($row,$i,"預約時間");?></td>
    <td><?php echo mysql_result($row,$i,"設計師自我介紹");?></td>
     <td><?php echo mysql_result($row,$i,"設計師名額");?></td>
     <td><?php echo mysql_result($row,$i,"設計師圖檔");?></td>
     <td><a href="editreservationpet.php?edit=<?php echo mysql_result($row,$i,"識別碼");?>" class="button">編輯</td>
  </tr>
 <?php }?>
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

echo'<a href="editreservationforadmin.php?page='.$i.'" >[' . $i . ']</a>';    //顯示本頁的分頁數字會以[ ]包起來
?>     
<?php 
}
else if($i == $count) {
echo '<a href="editreservationforadmin.php?page='.$i.'" >' . $i . '</a>';      //顯示末頁的分頁數字
?>
<?php
}
else {
echo '<a href="editreservationforadmin.php?page='.$i.'">' . $i . ',</a>';    //顯示其他的分頁數字會以" , "作區隔
} 
}
?> 
      <SCRIPT language=javascript>
                            

	function back(){
	document.location.href="index.php";
	}
	</script>
                             <p><input type="button1" value="返回" onclick="back()" class="button" ></p>

    </div>
                     
  </form>
    
</div>
</body>
</html>