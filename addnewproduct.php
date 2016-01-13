<?php
session_start();
include("mysqlconnect.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>寵物預約(給管理者)</title>
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
<p align="center"><font size="5" color="#009999">寵物店新增商品(給管理者)</font></p><br> 
<div class="container">
 <div class="top">
    </div>
    <form id="form1" name="form1" method="post" action="addnewsproductpost.php" class="form-horizontal"enctype="multipart/form-data" >
     <div class="form-group">
            <label for="guestNumber" class="col-sm-4 control-label">商品代號(CA-CL-F-GO-LI-S)：</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="自動填入" name="商品代號" id="商品代號" value="" />
            </div>
     <div class="form-group">
            <label for="標題" class="col-sm-4 control-label">商品名稱：</label>
            <div class="col-sm-6">
               <input type="text" class="form-control" placeholder="自動填入" name="商品名稱" id="商品名稱" value="" />
            </div>
        <div class="form-group">
          <label for="guestTime" class="col-sm-4 control-label">單價：</label>
            <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="自動填入" name="商品單價" id="商品單價" value="" />
            </div>
             <div class="form-group">
          <label for="guestTime" class="col-sm-4 control-label">優惠價：</label>
            <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="自動填入" name="商品優惠價" id="商品優惠價" value="" />
            </div>
             <div class="form-group">
          <label for="guestTime" class="col-sm-4 control-label">詳細資料：</label>
            <div class="col-sm-6">
              <textarea name="商品詳細資料" class="form-control" id="商品詳細資料" rows="5"></textarea>
          </div>
        </div>
        
         <div class="form-group">
            <label for="guestPic" class="col-sm-4 control-label">圖檔：</label>
            <div class="col-sm-6">
             <input name="file" type="file" width="500px" height="500px">
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