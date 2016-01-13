<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<?php             
if(!isset($_GET["page"])){
$page=1; //設定起始頁
//isset 在此是判斷後方參數是否存在            
} else {
$page = intval($_GET["page"]); //確認頁數只能夠是數值資料                 

}

$query = "SELECT * FROM news";

if ( !( $database = mysql_connect( "localhost",
"root", "Poch7enma" ) ) )                      
die( "Could not connect to database </body></html>" );   

if ( !mysql_select_db( "petshop", $database ) )
die( "Could not open URL database </body></html>" );

if ( !( $result = mysql_query( $query, $database ) ) ) 
{
print( "Could not execute query! <br />" );
die( mysql_error() . "</body></html>" );
}

$items = mysql_affected_rows(); //取得總項數,以便算出分頁須幾頁    

$per = 1; //設定每頁顯示項目數量
$pages = ceil($items/$per); //計算總頁數
$start = ($page-1)*$per; //每頁起始資料序號,以便分次藉由sql語法去取得資料       

$query1 = "SELECT * FROM news LIMIT   $start  ,  $per ";
//每點任一分頁便執行取得該頁數的資料筆數
echo $query1;

$result = mysql_query( $query1, $database );  
mysql_close( $database )
?>

<?php
for($i=1;$i<=$pages;$i++) {
if($i == $page) {
echo '<a class="linkcss" href="test1.php?page='.$i.'" >[' . $i . '] </a>';    //顯示本頁的分頁數字會以[ ]包起來
}            
else if($i == $pages) {
echo '<a class="linkcss" href="test1.php?page='.$i.'" >' . $i . '</a>';      //顯示末頁的分頁數字
}
else {
echo '<a  class="linkcss" href="test1.php?page='.$i.'">' . $i . ',</a>';    //顯示其他的分頁數字會以" , "作區隔
}        
}  
?>
</html>