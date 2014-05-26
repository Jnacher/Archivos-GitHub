<?php 
require_once('adodb/adodb.inc.php');$db->debug=true;
$db=&ADONewConnection('mysql');
$db->Connect('localhost','root','','WM2');
$result=$db->GetAll("Select * From usuarios");//para cuando el resultado contiene mas de una fila, por lo que el array devuelto es el mismo que GetRow pero bidimensional.y contendra el asociativo y el basado en indice.
##GetRow y ##GetAll se usan solo para consultas SELECT las de cache tambien
//foreach($result as $valor){
// echo "nombre:".$valor['email']."<br/>";
 //}
 print_r($result);
 echo "<br>";
echo count($result[1]);//devuelve el numero de columnas * 2.
echo "<br>";
echo count($result);//devuelve el numero de filas-array.//puede ser equivalente a mysql_affected_rows

?>
