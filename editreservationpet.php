<?php
session_start();
include("mysqlconnect.php");
include_once("rootcontrol.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>寵物設計師資料修改(給管理者)</title>
</head>
<style>
 .container{
margin:30%;
  background-color:#f5f5f5;
  margin-top:2%;
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
<?php 
							$sql="select * from designer where 識別碼='".$_GET['edit']."'";
							echo $sql;
							$row=mysql_query($sql);
							$total=mysql_num_rows($row);
							$aaa=mysql_fetch_array($row);
							?>
<p align="center"><font size="5" color="#009999">寵物設計師修改表單(給管理者)</font></p><br> 
<div class="container">
 <div class="top">
    </div>
    <form id="form1" name="form1" method="post" action="editreservationpetpost.php" class="form-horizontal"enctype="multipart/form-data" >
     <div class="form-group">
            <label for="guestNumber" class="col-sm-4 control-label">設計師名稱：</label>
            <div class="col-sm-6">
              <?php echo $aaa['設計師名稱']; ?> <input type="hidden" class="form-control" placeholder="自動填入" name="設計師名稱" id="設計師名稱" value="<?php echo $aaa['設計師名稱']; ?>" />
            </div>
        <div class="form-group">
          <label for="guestName" class="col-sm-4 control-label">預約時間：</label>
            <select name="預約時間" class="txt_input_180" id="預約時間">
  					 <option value="N"></option>
                	  <option value="早上" <?php if($aaa['預約時間']=="早上") echo "selected";?>>早上</option>
                    <option value="中午" <?php if($aaa['預約時間']=="中午") echo "selected";?>>中午</option>
                      <option value="晚上" <?php if($aaa['預約時間']=="晚上") echo "selected";?>>晚上</option> 
                     </select>
        </div>
        <div class="form-group">
            <label for="guestEmail" class="col-sm-4 control-label">設計師自我介紹：</label>
           <div class="col-sm-6">
               <input type="text" class="form-control" placeholder="您的暱稱" name="設計師自我介紹" id="設計師自我介紹" value="<?php echo $aaa['設計師自我介紹']; ?>" size="50" />
            </div>
        </div>
         <div class="form-group">
            <label for="guestNumber" class="col-sm-4 control-label">設計師圖檔：</label>
            <div class="col-sm-6">
             <input name="file" type="file" width="500px" height="500px">
            </div>
        <div class="form-group">
            <label for="設計師名額" class="col-sm-4 control-label">設計師名額：</label>
            <select name="設計師名額" class="txt_input_180" id="設計師名額">
               <option value="N"></option>
            <div class="col-sm-6">
            <?php for($i=1;$i<=10;$i++) {  ?>
             <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php } ;?>
                     </select>
            </div>
        </div>
        </div>
        <div class="button">
        <style>
      .button {
   border-top: 1px solid #96d1f8;
   background: #e9eef2;
   background: -webkit-gradient(linear, left top, left bottom, from(#0dd93c), to(#e9eef2));
   background: -webkit-linear-gradient(top, #0dd93c, #e9eef2);
   background: -moz-linear-gradient(top, #0dd93c, #e9eef2);
   background: -ms-linear-gradient(top, #0dd93c, #e9eef2);
   background: -o-linear-gradient(top, #0dd93c, #e9eef2);
   padding: 10px 20px;
   -webkit-border-radius: 14px;
   -moz-border-radius: 14px;
   border-radius: 14px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #000000; /*字體顏色*/
   font-size: 20px; /*整體大小*/
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   float:center;
   }
.button:hover {
   border-top-color: #225e85;
   background: #225e85;
   color: #ccc;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }

   </style>

            <input type="submit" name="button" id="button" value="送出" class="button"/>
            <input type="reset" name="button" id="button" value="清除" class="button"/>
        </div>
    </form>
    
</div>
</body>
</html>