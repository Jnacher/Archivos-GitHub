<?php 
require_once("adodb/adodb.inc.php");
$db=&ADONewConnection('mysql');
$db->Connect('localhost','root','','WM2');
$result=$db->execute("insert into uarios (nombre,email,contrasea,usuario,apellido,seguro) values ('francisco','email','contra','user','apellido','seggggdfvvfe')");//el execute se utiliza para el resto de consultas$db->debug=true;
if(!$result){
  echo "mal".$db->ErrorMsg();//para mostrar errores de consulta
}else{
  echo "bien";
}
?>
