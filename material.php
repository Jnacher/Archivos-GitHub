<?php 
require_once('phpIncludes/config.php');
if(!$user)header('location: index.php');
//INICIALIZO VARIABLES
$sel='';
$edita=false;


if(isset($_GET['idAn']) && $user){
  $idAn=sanitize($_GET['idAn'], INT);
  $sqlAn="select * from anuncios where anuncioId=".$idAn;
  if($resAn=$db->GetRow($sqlAn)){
      $sy->assign('precio', $resAn['precio']);
	  $sy->assign('titulo', $resAn['titulo']);
	  $sy->assign('descripcion', $resAn['descripcion']);
      $provAct=$resAn['idProvincia'];
	  $municAct=$resAn['idMunicipio'];
	  $sy->assign('edita', '<input type="hidden" name="edita" value="'.$idAn.'"/>');
	  $edita=true;
  }
}else{
  $provAct=(isset($_POST['provincia']))?$_POST['provincia']:'90000';
  $municAct=(isset($_POST['poblacion']))?$_POST['poblacion']:'';
}

if(isset($_POST['enviar']) && $user){
	if(isset($_POST['edita'])){
	   $edita=true;
	   $idAn=sanitize($_POST['edita'], INT);
	   
	   $sy->assign('edita', '<input type="hidden" name="edita" value="'.$idAn.'"/>');
	   
	}
	require_once('phpIncludes/claseValida.php');
	//INSTANCIO CLASE VALIDA
	$val=new ClaseValida();
	$error=array();
	$errorr=array();
	$coma='';
	//INICIAMOS VALIDACIONES
	if(!$val->valTitulo($_POST['titulo'])){
	  $error['titulo']='<li><span class="error">Compruebe el título, no es correcto</span></li>';
	}
	if(!eregi('^[0-9]{1,10}$', $_POST['precio'])){
	  $error['precio']='<li><span class="error">Compruebe el precio, solo puede contener números</span></li>';
	}
	if($_POST['provincia']=='0'){
	  $error['provincia']='<li><span class="error">Selecciona una provincia </span></li>';
	}
	if($_POST['poblacion']=='0'){
	  $error['poblacion']='<li><span class="error">Selecciona una población </span></li>';
	}

	if(!$val->valAreaTexto($_POST['descripcion'])){
	  $error['descripcion']='<li><span class="error">Tiene que contener un minimo de 10 caracteres </span></li>';
	}
	if(!$_POST['acepto']){
	  $error['acepto']='<li><span class="error">Debes aceptar las condiciones </span></li>';
	}
	if(count($error)==0 && count($errorr)==0){
	  $titulo=sanitize($_POST['titulo'], SQL+HTML);
	  $descripcion=sanitize($_POST['descripcion'], SQL+HTML);
	  $provincia=sanitize($_POST['provincia'], INT);
	  $municipio=sanitize($_POST['poblacion'], INT);
	  $precio=sanitize($_POST['precio'], INT);
	  $fecha=time();
	  $expira=$fecha+(60*60*24*30*3);//3 meses
	  $idUser=$_SESSION['idUser'];
	  if(!$edita){
		  $sqlInAnuncio="
		  INSERT INTO `anuncios` 
		  (`idProvincia`, `idMunicipio`, `titulo`, `descripcion`, `fecha`, tipo, idUsuario, precio, expira) 
		  VALUES 
		  ($provincia, $municipio, '$titulo', '$descripcion', $fecha, 'ma', $idUser, $precio, $expira);";//$db->debug=true;
	  }else if($edita){
	    $sqlInAnuncio="
		  update `anuncios` set 
		  `idProvincia`=$provincia, `idMunicipio`=$municipio, `titulo`='$titulo', `descripcion`='$descripcion', `fecha`=$fecha, precio=$precio where anuncioId=".sanitize($_POST['edita'], INT);
	  }
	  if($db->execute($sqlInAnuncio)){
		if(!$edita){
		  $idAnuncio=$db->Insert_ID();
		}else if($edita){
		  $idAnuncio=sanitize($_POST['edita'], INT);
		}
		  //SUBE IMAGENES
		  $principal='s';
		if($_FILES['files']['name'][0]!=''){
		  require_once('phpIncludes/thumbnail.inc.php');
		  require_once('phpIncludes/trataFotosMultiFile.php');
		  foreach($_FILES['files']['name'] as $key=>$val){
			if($val!=''){
			  $prefijo=rand(0,9999);
			  move_uploaded_file($_FILES['files']['tmp_name'][$key], 'images/originales/'.$prefijo.'_'.$val);
			  $escalar=new Proporcional();
			  $fot=$escalar->escalar('images/originales/'.$prefijo.'_'.$val, 0, 'images/originales/'.$prefijo.'_'.$val, 1, true, false);
			  
			  $thumbN=new Thumbnail('images/originales/'.$prefijo.'_'.$val);
			  $thumbN->resize(100,100);
			  $thumbN->save('images/thumbs/'.$prefijo.'_'.$val,80);
			  
			  $thumbN=new Thumbnail('images/originales/'.$prefijo.'_'.$val);
			  $thumbN->resize(200,200);
			  $thumbN->save('images/grandes/'.$prefijo.'_'.$val,80);
			  $rutaImg=$prefijo.'_'.$val;
				$sqlInFotos="insert into imagenes (rutaImg, idAnuncio, principal) values ('$rutaImg', $idAnuncio, '$principal')";
				if($db->execute($sqlInFotos)){$principal='n';
				}
			}
		  }
		}
	    //header('location: finRegistro.php?res=bien');
		 $resMsj='ok';
		if(!$edita){
		
		 $sy->assign('codigo',$idAnuncio);
		 $htmlBody=$sy->fetch('emailCodAnuncio.tpl');
		 $cabeceras = "Content-type: text/html\r\n"; 
		 $cabeceras .= 'To: <info@anunciamascotas.com>' . "\r\n";
		 $cabeceras .= 'From: www.anunciomascotas.com' . "\r\n";          
		 $enviarMail = @mail ('info@anunciamascotas.com', 'Activacion Anuncio', $htmlBody, $cabeceras);
			if($enviarMail){
			 $resultado= 'El email se envio con exito';
			}else{
			  $resultado= 'El email no existe';
			} 
		  $ref='inAnuncio';
		}else{
		  $ref='upAnuncio';
		}
	  }else{
		 $resMsj='ko';

	  }

	  header('location: finRegistro.php?ref='.$ref.'&res='.$resMsj);///////////////////////////////////////////////////////////////
	}else{
	  //VOLVEMOS A RELLENAR LOS CAMPOS EN CASO DE ERROR
	   $erroresId='';
	  foreach($errorr as $er){
	    $erroresId.=$er;
	  }
	  $sy->assign('errorr', '<script type="text/javascript">
	  $(document).ready(function(){
		$("'.$erroresId.'").fadeIn("slow"); 
	  });
	  
	  </script>');
	  
	 
	  $sy->assign('precio', $_POST['precio']);
	  $sy->assign('error', $error);
	  $sy->assign('titulo', $_POST['titulo']);
	  $sy->assign('descripcion', $_POST['descripcion']);


	  
	}
}

$numImg=$idAn=0;
$imagesDel='';
if($edita){
  if(isset($_POST['edita'])){
    $idAn=sanitize($_POST['edita'], INT);
  }else{
    $idAn=sanitize($_GET['idAn'], INT);
  }
  $sqlImg="select * from imagenes where idAnuncio=".$idAn;
  $imgs='';
  
  if($resImg=$db->GetAll($sqlImg)){
    foreach($resImg as $reImg){
	  $imgs.='<img rel="'.$reImg['imagenId'].'" src="images/thumbs/'.$reImg['rutaImg'].'" /> ';
	  $numImg++;
	}
	$imagesDel='<div id="ImgsDel">
	'.$imgs.'
	  </div>';
  }
}
$sy->assign('left', 4-$numImg);
$sy->assign('imagesDel', $imagesDel);
$sy->assign('numImg', '<script type="text/javascript">
var numImg= '.$numImg.'; var idAn='.$idAn.';</script>');




//COMBOBOX PROVINCIAS
$htmlProv='';
$sqlProv="select * from provincias";
if($resProv=$db->GetAll($sqlProv)){
  foreach($resProv as $reProv){ //echo $reProv['provinciaId'].'=='.$provAct.'<br>';
    if(trim($provAct)==trim($reProv['provinciaId'])){//echo 'dddddd';
	  $sel="selected='selected'";
	}
	$htmlProv.='<option value="'.$reProv['provinciaId'].'" '.$sel.'>'.utf8_encode($reProv['provincia']).'</option>';
	$sel='';
  }
}
$sy->assign('htmlProv', $htmlProv);//echo $htmlCats;


//COMOBOX POBLACION



$sqlMunic="select * from municipios where idProvincia=".$provAct;
$htmlMunicipios='';
if($reMunic=$db->GetAll($sqlMunic)){
  foreach($reMunic as $reMuni){
	if($reMuni['municipioId']==$municAct){
	  $sel="selected='selected'";
	}
    $htmlMunicipios.='<option value="'.$reMuni['municipioId'].'" '.$sel.'>'.utf8_encode($reMuni['municipio']).'</option>';
	$sel='';
  }
}
$sy->assign('htmlMunicipios', $htmlMunicipios);

$sy->display('material.tpl');

