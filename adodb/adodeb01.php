<?php 
require_once('adodb/adodb.inc.php');$db->debug=true;
$db=&ADONewConnection('mysql');
$db->Connect('localhost','root','','WM2');
$result=$db->GetRow("Select * From usuarios");//Se usa para cuendo sabemos que la consulta solo nos devolvera una fila, en el caso de que hubieran mas las ignoraria. devuelve un array de la fila, basandose en su indice y en su clave. como fetch_array y fetch_assoc juntos. por lo que tiene el doble de longitud ya que contiene dos dos array en uno.
##GetRow y ##GetAll se usan solo para consultas SELECT las de cache tambien
print_r ($result);
echo "<br>";
echo $result['nombre'];
echo "<br>";
echo $result[1];//equivalen a lo mismo
echo "<br>";
echo count($result);
?>
