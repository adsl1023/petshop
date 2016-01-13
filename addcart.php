<?php
session_start();
include("mysqlconnect.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>寵物預約(給顧客)</title>
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
							$sql="select * from shopcategory where 商品代號='".$_GET['shopname']."'";
							echo $sql;
							$row=mysql_query($sql);
							$total=mysql_num_rows($row);
							$aaa=mysql_fetch_array($row);
							?>
<p align="center"><font size="5" color="#009999">商品訂購(給使用者)</font></p><br> 
<div class="container">
 <div class="top">
    </div>
    <form id="form1" name="form1" method="post" action="addcartpost.php" class="form-horizontal">
     <div class="form-group">
            <label for="guestNumber" class="col-sm-4 control-label">訂閱人帳號：</label>
            <div class="col-sm-6">
               <?php echo $_SESSION['帳號']; ?> <input type="hidden" class="form-control" placeholder="自動填入" name="帳號" id="guestNumber" value="<?php echo $$_SESSION['帳號']; ?>" />
            </div>
     <div class="form-group">
            <label for="guestDesigner" class="col-sm-4 control-label">商品名稱：</label>
            <div class="col-sm-6">
               "<?php echo $aaa['商品名稱']?>"<input type="hidden" class="form-control" placeholder="自動填入" name="商品名稱" id="guestDesigner" value="<?php echo $aaa['商品名稱']?>" />
            </div>
        <div class="form-group">
          <label for="guestTime" class="col-sm-4 control-label">商品數量：</label>
            <div class="col-sm-6">
          <select name="訂購數量" class="txt_input_180" id="預約時間">
  					 <option value="N"></option>
                	  <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                      <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                     </select>
            </div>
        </div>
        <div class="form-group">
            <label for="guestDesigner" class="col-sm-4 control-label">商品價格：</label>
            <div class="col-sm-6">
               <?php echo $aaa['單價']?><input type="hidden" class="form-control" placeholder="自動填入" name="商品單價" id="guestDesigner" value="<?php  echo $aaa['單價'] ;?>" />
            </div>
        <div class="form-group">
          <label for="guestSubject" class="col-sm-4 control-label">商品取貨日期：</label>
          <select name="年份" class="txt_input_180" id="year">
               <option value="N"></option>
               <?php $setyear=date("Y");
			   
                      for ($i=$setyear; $i < $setyear+100; $i++) {?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php } ;?>
                     </select>
                     <b>年(西元)</b>
          <select name="月份" class="txt_input_180" id="mon">
               <option value="N"></option>
               <?php 
			   for ($i=1; $i <= 12; $i++) {?>
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
                      <b>日</b>
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