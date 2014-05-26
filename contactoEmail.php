<?php 
require_once('phpIncludes/config.php');

 $res='';
  if($_POST['submit']){
	$cuerpo="Nombre: ".$_POST['Nombre'].'<br/>';
	$cuerpo.="Telefono: ".$_POST['Telefono'].'<br/>';
	$cuerpo.="Correo: ".$_POST['Correo'].'<br/>';
	$cuerpo.="Mensaje: ".$_POST['Mensaje'].'<br/>';
	
	$header .="MIME-Version: 1.0\n"; 
	$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
	$header .="From: anunciamascotas.com \n";
	
	if(@mail('info@anunciamascotas.com', 'Contacto', $cuerpo, $header)){
	  $res='Tu mensaje ha sido enviado correctamente';
	}else{
	  $res='Hubo un error al enviar el mensaje';
	}
  
  }
$sy->assign('msj', $res);

$sy->display('contactoEmail.tpl');
?>