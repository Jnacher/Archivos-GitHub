<?php 
require("adodb/adodb.inc.php");
$db=&ADONewConnection('mysql');
$db->Connect('localhost','root','','WM2');
$sql=$db->execute("update usuarios set nombre='paco' where id=2");
if(!$sql){
  echo "error".$db->ErrorMsg();
  }else{
  echo "Actualiz correcta".$db->AffectedRows()."filas AFECTADAS";//ESO EL NUMERO AFECTADAS EN LA CONSULTA
  }
?>