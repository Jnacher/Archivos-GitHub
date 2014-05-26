<?php 
require_once('phpIncludes/config.php');

if(isset($_GET['seg'])&& isset($_GET['id'])){
  $seg=sanitize($_GET['seg'], SQL);
  $id=sanitize($_GET['id'], INT);
  $sql="select usuarioId from usuarios where usuarioId=$id and pass='$seg' and activo='n'";
  $res=$db->GetRow($sql);
  if(sizeof($res)>0){
	$sqlActivacion="update usuarios set activo='s' where usuarioId=$id";
	if($db->execute($sqlActivacion)){
	  header('location: finRegistro.php?ref=activar&res=ok');
	}else{
	   header('location: finRegistro.php?ref=activar&res=ko');
	}
  }else{
    header('location: finRegistro.php?ref=activar&res=ko');
  }
}

?>