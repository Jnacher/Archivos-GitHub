<?php 
require_once("adodb/adodb.inc.php");
$db=&ADONewConnection('mysql');
$db->Connect('localhost','root','','WM2');
$result=$db->execute("insert into usuarios (nombre,email,contrasea,usuario,apellido,seguro) values ('kjfd','email','contra','user','apellido','seg')");
if(!$result){
  echo "mal".$db->ErrorMsg();
}else{
  echo "bien, la id de la fila actualizada es:".$db->Insert_id();//equivalente a mysql_insert_id
}
?>