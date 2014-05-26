<?php
require('adodb/adodb.inc.php');
$ADODB_CACHE_DIR='adodbcache';
$db=&ADONewConnection('mysql');
$db->Connect('localhost','root','','WM2');
$result=$db->CacheGetAll("select * from usuarios");
$total=count($result);//equivale a mysql_affected_rows
echo "$total resultados de la consulta";
?>
