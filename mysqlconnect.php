<?php

//程式功能
//	設定mysql路徑
$DBHOST="localhost";
$DBUSER="root";
$DBNAME="ec011";
$DBPSWD="54321bi";
$link = mysql_connect ($DBHOST, $DBUSER, $DBPSWD) or die("無法連接資料庫: " . mysql_error( ));

 if(!$link){
      die("無法連接資料庫<br>" . mysql_error( )); }
 /*else{
      echo "資料庫連接成功<br>";
}*/
$DB=mysql_select_db($DBNAME,$link)or die("無法選擇資料庫");
 if(!$DB){
      die("無法選擇資料庫:<br> " . mysql_error( )); }
 /*else{
      echo "已連接資料庫<br>";
}*/
$SQL_select="SET CHARACTER SET utf8";
mysql_query($SQL_select,$link) or die ("<br>無法執行查詢");

$SQL_select="SET NAMES 'utf8'";
mysql_query($SQL_select,$link) or die ("<br>無法執行查詢");

$SQL_select="SET CHARACTER_SET_RESULTS=UTF8";
mysql_query($SQL_select,$link) or die ("<br>無法執行查詢");

?>

<?php
/*
//程式功能
//	設定mysql路徑
$DBUSER="webuser";
$DBNAME="TSC";
$DBPSWD="4pGyMTRfva73ezrU";
$link = mysql_connect ("localhost", $DBUSER, $DBPSWD) or die("無法連接資料庫: " . mysql_error( ));
mysql_select_db($DBNAME,$link)or die("無法選擇資料庫");

$SQL_select="SET CHARACTER SET utf8";
mysql_query($SQL_select,$link) or die ("無法執行查詢");

$SQL_select="SET NAMES 'utf8'";
mysql_query($SQL_select,$link) or die ("無法執行查詢");

$SQL_select="SET CHARACTER_SET_RESULTS=UTF8";
mysql_query($SQL_select,$link) or die ("無法執行查詢");
*/
?>