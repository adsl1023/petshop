<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
if(isset($_SESSION['帳號']))
{
?>
<SCRIPT language=javascript>
<!--
//-->                 
</SCRIPT>
<?php
}
else
{
?>
<SCRIPT language=javascript>
<!--
alert ("登入失敗、還未登入、或權限不足！");
history.go(-1);
//-->                 
</SCRIPT>
<?php
}
?>
</body>
</html> 