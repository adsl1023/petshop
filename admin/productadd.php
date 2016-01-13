<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>後台新增商品表</title>
</head>

<body>
<p align="center"><font size="5" color="#009999"> 新增商品表</font></p><br> 
<table width="90%" border="0" align="center" cellspacing="1" cellpadding="5" bgcolor="#F2F2F2"> 
<tr> 
<td> 
<form action=<? echo($GLOBALS["PHP_SELF"]); ?> method=post name=f1> 
<table width="100%" border="0"> 
<tr> 
<td width="32%"> <font size="3">商品代號：</font></td> 
<td width="68%"><font size="3"> 
<select name="formno2"> 
<option value="食">CA</option> 
<option value="衣">CL</option> 
<option value="住">F</option> 
<option value="行">GO</option> 
<option value="行">S</option> 
<option value="行">LI</option> 

</select> 
<font color="#CC0000"> *</font></font></td> 
</tr> 
<tr> 
<td width="32%"> <font size="3">商品名稱：</font> <font size="3"> 
<font color="#CC0000"> </font></font></td> 
<td width="68%"> <font size="3"> 
<input type="text" name="shopname" size="50" id="shopname"> 
<font color="#CC0000"> *</font></font></td> 
</tr> 
<tr> 
<td width="32%"> <font size="3">類別：</font></td> 
<td width="68%"><font size="3"> 
<select name="formno2"> 
<option value="食">食</option> 
<option value="衣">衣</option> 
<option value="住">住</option> 
<option value="行">行</option> 

</select> 
<font color="#CC0000"> *</font></font></td> 
</tr> 
<tr> 
<td width="32%"><font size="3">單價：</font> </td> 
<td width="68%"><font size="3"> 
<input type="text" name="formno3" size="3" maxlength="3"> 
<font color="#CC0000"> *</font></font></td> 
</tr> 
<tr> 
<td width="32%"><font size="3">優惠價：</font> </td> 
<td width="68%"><font size="3"> 
<input type="text" name="formno3" size="3" maxlength="3"> 
<font color="#CC0000"> *</font></font></td> 
</tr> 
<tr> 
<td width="32%"><font size="3">優惠日期：</font> </td> 
<td width="68%"><font size="3"> 
<input type="text" name="formno3" size="3" maxlength="3"> 
<font color="#CC0000"> *</font></font></td> 
</tr> 
<tr> 
<td width="32%"><font size="3">打折數：</font> </td> 
<td width="68%"><font size="3"> 
<input type="text" name="formno3" size="3" maxlength="3"> 
<font color="#CC0000"> *</font></font></td> 
</tr> 
<tr> 
<td width="32%"><font size="3">詳細資料：</font> </td> 
<td width="68%"><font size="3"> 
<input type="text" name="formno3" size="60" maxlength="3"> 
<font color="#CC0000"> *</font></font></td> 
</tr> 
<tr> 
<td width="32%"> <font size="3">圖檔：</font></td> 
<td width="68%"><p>
 檔案名稱:<input type="file" name="file" id="file" /><br />
<input type="submit" name="submit" value="上傳檔案" /> 
</p></td> 
</tr> 
<tr> 
<td width="32%"><input type=button value="確定" onclick="javascript:save();" name="button" /></td> 
<td width="68%"><input type="reset" name="clear" value="清除"> 
</td> 
</tr> 
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