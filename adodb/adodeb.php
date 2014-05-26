<?php 
require_once('adodb/adodb.inc.php');
$db=&ADONewConnection('mysql');
$db->Connect('localhost','root','','WM2');

$result=$db->GetRow("Select * from registrados where id=1");//para cuando sabemos que la consulta nos va a devolver una unica fila y nos devulve un array como mysql_fetch_array(). devuelve tanto el arrray asociativo como el numerico.
$db->debug=true;
print_r($result);
?>