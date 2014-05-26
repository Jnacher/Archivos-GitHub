<?php 
require('adodb/adodb.inc.php');
$ADODB_CACHE_DIR='adodbcache';//para cuando trabajemos con cache hay aqui que asiganrle a esta variable la carpeta donde se almacenaran los datos cache.
//tiempo por defecto una hora y se consigue ahorrar
$db=&ADONewConnection('mysql');
$db->Connect('localhost','root','','WM2');
$result=$db->CacheGetRow(1600,"Select * From usuarios where id=3");
print_r($result);
?>