<?php 
require_once('phpIncludes/config.php');
if(!$user)header('location: index.php');
if(isset($_GET['idDel'])){
  $db->execute('delete from anuncios where anuncioId='.sanitize($_GET['idDel'], INT));
}
$listaAn='';
$sqlAnuncios="select titulo, anuncioId, tipo from anuncios where idUsuario=".sanitize($_SESSION['idUser'], INT);
if($resAn=$db->GetAll($sqlAnuncios)){
  foreach($resAn as $reAn){
	switch($reAn['tipo']){
	  case 'a':
	  $destEdita='adopciones';
	  break;
	  case 'm':
	  $destEdita='montas';
	  break;
	  case 'ma':
	  $destEdita='material';
	  break;
	  case 'cv':
	  $destEdita='compraVenta';
	  break;
	}
    $listaAn.='<tr class="contenido">
    <td>'.$reAn['titulo'].'</td>
    <td><a href="'.$destEdita.'.php?idAn='.$reAn['anuncioId'].'">Editar</a></td>
    <td><a href="listarAnuncios.php?idDel='.$reAn['anuncioId'].'">Borrar</a></td>
  </tr>';
  }
}
$sy->assign('listaAn', $listaAn);
$sy->display('listarAnuncios.tpl');

