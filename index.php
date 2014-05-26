<?php 
require_once('phpIncludes/config.php');
//CERRAR SESION
if(isset($_GET['cerrar'])){
  	  unset($_SESSION['idUser']);
	  unset($_SESSION['expiraUser']);
	  unset($_SESSION['nombre']);
	  $sy->assign('user',false);
	  $user=false;
}
//////	
			
$sy->display('index.tpl');
