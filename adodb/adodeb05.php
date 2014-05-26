<?php 
require("adodb/adodb.inc.php");$db->debug=true;
$ADODB_CACHE_DIR='adodbcache';
$db=&ADONewConnection('mysql');
$db->Connect('localhost','root','','WM2');
$result=$db->CacheGetAll(1600,"select * from usuarios ");//si no se le indica 1600 segundos trndra 1h por defecto
foreach($result as $valor){
  echo"nombre:".$valor['email']."<br>";
 }
?>