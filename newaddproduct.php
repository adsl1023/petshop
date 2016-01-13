<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>後台-新增商品</title>
</head>
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
   font-size: 15px;
   font-family: Georgia, Serif;
   text-decoration: none;
   vertical-align: middle;
   float:left;
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
<body>
<p align="center"><font size="5" color="#009999"> 新增商品 表</font></p><br> 
<table width="90%" border="0" align="center" cellspacing="1" cellpadding="5" bgcolor="#F2F2F2"> 
<tr> 
<td> 
<form name="insertshop" method="post" action="../../../Users/AU/Desktop/confirm.php">
<table width="100%" border="0"> 
<tr> 
<td width="32%"> <font size="3">商品代號：</font> <font size="3"> 
<font color="#CC0000"> </font></font></td> 
<td width="68%"> <font size="3"> 
<input type="text" name="formno1" size="8"> 
<font color="#CC0000"> *</font></font></td> 
</tr> 
<tr> 
<td width="32%"> <font size="3">商品名稱：</font></td> 
<td width="68%"><font size="3"> 
<input type="text" name="formno1" size="8"> 
<font color="#CC0000"> *</font></font></td> 
</tr> 
<tr> 
<td width="32%"><font size="3">單價：</font> </td> 
<td width="68%">
<input type="text" name="formno1" size="8"> 
<font color="#CC0000"> *</font></font>
</td> 
</tr>
<tr> 
<td width="32%"><font size="3">優惠價：</font></td> 
<td width="68%"> 
<input type="text" name="formno7" maxlength="10">
<font color="#CC0000"> *</font></font> 
</td> 
</tr> 
<tr> 
<td width="32%"><font size="3">折扣：</font></td> 
<td width="68%"> 
<select name="formno3"> 
<option value="八折">八折</option> 
<option value="七折">七折</option> 
<option value="六折">六折</option> 
<option value="五折">五折</option> 
<option value="四折">四折</option> 
</select>  
</td> 
</tr> 

<tr> 

</tr>  
<tr> 
<td width="32%"> <font size="3">圖檔上傳：</font></td> 
<td width="68%"><p>
 檔案名稱:<input type="file" name="file" id="file" /><br />
<input type="submit" name="submit" value="上傳檔案" /> 
</p>

  <font size="3"><font color="#CC0000"> *</font></font></td> 
</tr> 
<td width="32%"> </td> 
<td width="68%"> 
<input type="button" value="送出" onClick="javascript:save();" class="button" name="button"> 
<input type="reset" name="clear" class="button" value="清除"> 
<input type="button" name="clear" class="button" value="返回"> 
</td> 

<tr> 
<td colspan="2"> 
<p><br> 
註：標 <font color="#CC0000">* </font>項目為必填項。</p> 
</td> 
</tr> 
</table> 
</form> 
</td> 
</tr> 
</table> 
</body>
</html>