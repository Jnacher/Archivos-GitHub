<?php 
require_once('phpIncludes/config.php');
$sql='';
$coma='';
$sel='';
//INICIALIZAMOS RADIOBOTONES
$sy->assign('bothTC', 'checked="checked"');
$sy->assign('bothSx', 'checked="checked"');
$sy->assign('par', "");
$sy->assign('pro', "");
$sy->assign('desc', 'checked="checked"');
$sy->assign('asc', "");

if($_POST['tipoCliente']=='pro'){
  $sy->assign('pro', 'checked="checked"');
  $sy->assign('bothTC', "");
  
}else if($_POST['tipoCliente']=='par'){
  $sy->assign('par', 'checked="checked"');
  $sy->assign('bothTC', "");
}

if($_POST['precio']=='asc'){
  $sy->assign('asc', 'checked="checked"');
  $sy->assign('desc', "");
}
$pubVar=$_POST['publicado'];
$sy->assign($pubVar, 'selected="selected"');




$provAct=(isset($_POST['ciudad']))?$_POST['ciudad']:'90000';
//COMBOBOX PROVINCIAS
$htmlProv='';
$sqlProv="select * from provincias";
if($resProv=$db->GetAll($sqlProv)){
  foreach($resProv as $reProv){ //echo $reProv['provinciaId'].'=='.$provAct.'<br>';
    if($provAct==$reProv['provinciaId']){//echo 'dddddd';
	  $sel="selected='selected'";
	}
	$htmlProv.='<option value="'.$reProv['provinciaId'].'" '.$sel.'>'.utf8_encode($reProv['provincia']).'</option>';
	$sel='';
  }
}
$sy->assign('htmlProv', $htmlProv);//echo $htmlCats;

if(isset($_POST['actualizar'])){
  
  
  if($_POST['ciudad']!='cero'){
    $sql.=' AND idProvincia='.$_POST['ciudad'];
  }
  if($_POST['tipoCliente']!='both'){
    $sql.=' AND tipoCliente="'.$_POST['tipoCliente'].'"';
  }
  $sql.=' AND fecha < '.(time()-($_POST['publicado']*24*60*60));
  $sql.=' order by precio '.$_POST['precio'];
  $sqlAdopciones="select * from anuncios where tipo='ma' ".$sql;
}else{
  $sqlAdopciones="select * from anuncios where tipo='ma' ORDER BY precio DESC";
}//$db->debug=true;
$anunciosHtml='';
if($resAd=$db->GetAll($sqlAdopciones)){
  foreach($resAd as $reAd){
	$sqlCat="select nomCategoria from categorias where categoriaId=".$reAd['idCategoria'];
	$resCat=$db->GetRow($sqlCat);
	$sqlPro="select provincia from provincias where provinciaId=".$reAd['idProvincia'];
	$resPro=$db->GetRow($sqlPro);
	$htmlImgsP='';
    $anunciosHtml.='<div class="anunciosIndi">
            <div class="gradient6 anunciosCiudad"><h1><span></span>'.$resCat['nomCategoria'].' ('.utf8_encode($resPro['provincia']).')</h1></div>
            <div class="gradient6 anunciosFecha"><h1><span></span> Publicado el '.date('d / m / Y' ,$reAd['fecha']).'</h1></div>
            <div class="anunciosTitulo">Titulo <a href="verAnuncio.php?idAnuncio='.$reAd['anuncioId'].'"><span style="text-align:right">Ver anuncio completo....</span></a></div>
            <div class="anunciosDescrip"><div style="min-height:40px;">'.$reAd['descripcion'].'</div>
            <span class="anunciosPrecio">Precio: '.$reAd['precio'].'€ </span> <div class="menuAnuncio">
            <span class="anunciosContacto">
			
			<a href="#" class="contactarPoP" rel="'.$reAd['anuncioId'].'" >
			<img src="recursos/formularios/emails.png" width="15" height="15" alt="contacto" />Contactar</a></span>
            <span class="anunciosContacto">
			<a href="http://www.facebook.com/sharer.php?u=http://www.anunciamascotas.com/verAnuncio?idAnuncio='.$reAd['anuncioId'].'" target="parent"><img src="recursos/formularios/facebook.png" width="15" height="15" alt="compartir" />Compartir</a></span>
            <span class="anunciosContacto"><a href="#" class="enviarPoP" rel="'.$reAd['anuncioId'].'"><img src="recursos/formularios/check_mark_32x32.png" width="15" height="15" alt="enviar a amigos" />Enviar a amigos</a></span>
            <span class="anunciosContacto"><a href="#" class="denunciarPoP" rel="'.$reAd['anuncioId'].'"><img src="recursos/formularios/error.png" width="15" height="15" alt="denunciar" />Denunciar</a></span>
            </div>  
            </div>';
			$sqlImg= "select * from imagenes where principal='s' and idAnuncio=".$reAd['anuncioId'];//$db->debug=true;
				if($resImgs=$db->GetAll($sqlImg)){
		 		foreach($resImgs as $resImg){
				$anunciosHtml.='<div class="anunciosImagen"><a href="verAnuncio.php?idAnuncio='.$reAd['anuncioId'].'">
							<img src="images/grandes/'.$resImg['rutaImg'].'" width="100" height="100" /></a></div>
							<div style="clear:both">
							</div>
							</div>';
	  		}
				}else{
				$anunciosHtml.='<div class="anunciosImagen"><a href="verAnuncio.php?idAnuncio='.$reAd['anuncioId'].'">
							<img src="images/3.jpg" width="100" height="100" /></a></div>
							<div style="clear:both">
							</div>
							</div>';
	  }
  }
}


//IMAGENES
	
	

////////////////////////////////////////////////enviar correo de contacto
$res='';
if(isset($_POST['enviarAmigo'])){
	$cuerpo="Nombre: ".$_POST['Nombre'].'\n';
	$cuerpo.="Correo: ".$_POST['Correo'].'\n';
	$cuerpo.='http://www.anunciamascotas.com/verAnuncio.php?idAnuncio='.$_POST['id'];
	$header ="MIME-Version: 1.0\n"; 
	$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
	$header .="From: anunciaMascotas.com \n";
	if(@mail('jenacher@jovetravel.com, info@anunciamascotas.com', $_POST['Nombre'].' Te recomineda este anuncio', $cuerpo, $header)){
	  $res='Mensaje enviado correctamente';
	}else{
	  $res='Error, intentelo más tarde.';
	}
}elseif(isset($_POST['denunciar'])){
	$cuerpo.='http://www.anunciamascotas.com/verAnuncio.php?idAnuncio='.$_POST['id'];
	$cuerpo.='id Anuncio: '.$_POST['id'];
	$header ="MIME-Version: 1.0\n"; 
	$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
	$header .="From: anunciaMascotas.com \n";
	if(@mail('jenacher@jovetravel.com, info@anunciamascotas.com', $_POST['Nombre'].'Anuncio denunciado', $cuerpo, $header)){
	  $res='Mensaje enviado correctamente';
	}else{
	  $res='Error, intentelo más tarde.';
	}
}elseif(isset($_POST['contactar'])){
	$id=sanitize($_POST['id'], INT);
	$sql="select idUsuario, email from anuncios where anuncioId=".$id;
	if($resA=$db->GetRow($sql)){
	  if($resA['idUsuario']!=''){
	    $sqlUser="select email from usuarios where usuarioId=".$resA['idUsuario'];
		if($resE=$db->GetRow($sqlUser))$email=$resE['email'];
	  }else{
	    $email=$resA['email'];
	  }
	}
	$cuerpo="Nombre: ".$_POST['Nombre'].'\n';
	$cuerpo.="Correo: ".$_POST['Correo'].'\n';
	$header ="MIME-Version: 1.0\n"; 
	$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
	$header .="From: anunciaMascotas.com \n";
	if(@mail('jenacher@jovetravel.com, '.$email, $_POST['Nombre'].' Te recomineda este anuncio', $cuerpo, $header)){
	  $res='Mensaje enviado correctamente';
	}else{
	  $res='Error, intentelo más tarde.';
	}

}

///////////////////////////////////////////////////////////////
$sy->assign('res', $res);
$sy->assign('anunciosHtml', $anunciosHtml);
$sy->display('materialVi.tpl');
?>