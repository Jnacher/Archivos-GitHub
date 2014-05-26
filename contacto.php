<?php 
require_once('phpIncludes/config.php');
  $res='';
  if(isset($_POST['submit'])){

	$idAnuncio=sanitize($_POST['idAnuncio'], INT);
	$sql="select email, idUsuario, titulo from anuncios where anuncioId=".$idAnuncio;
	$resEm=$db->GetRow($sql);
	$titulo=$resEm['titulo'];
	if($resEm['email']==''){
	  $sql="select email from usuarios where usuarioId=".$resEm['idUsuario'];
	  $resEm=$db->GetRow($sql);
	}
	$cuerpo.="Ref: ".$titulo.'<br/>';
	$cuerpo.="Nombre: ".$_POST['Nombre'].'<br/>';
	$cuerpo.="Telefono: ".$_POST['Telefono'].'<br/>';
	$cuerpo.="Correo: ".$_POST['Correo'].'<br/>';
	
	$cuerpo.="Mensaje: ".$_POST['Mensaje'].'<br/>';
	
	$header .="MIME-Version: 1.0\n"; 
	$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
	$header .="From: anunciamascotas.com \n";
	
	if(@mail($resEm['email'], 'Peticion Oferta', $cuerpo, $header)){
	  $res='ok';
	}else{
	  $res='ko';
	}
  header('location: finRegistro.php?ref=cont&res='.$res);
  }

?>