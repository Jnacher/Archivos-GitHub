<?php 
require_once('phpIncludes/config.php');
if(!$user)header('location: index.php');
//INICIALIZO VARIABLES
$sel='';
$edita=false;
$sy->assign('profesional', '');
	  $sy->assign('particular', 'checked="checked"');
		
	  $sy->assign('vacunaSi', '');
	  $sy->assign('vacunaNo', 'checked="checked"');
		
	  $sy->assign('desparasitadosSi', '');
	  $sy->assign('desparasitadosNo', 'checked="checked"');
		
	  $sy->assign('male', '');
	  $sy->assign('fimale', 'checked="checked"');
	  
if(isset($_GET['idAn']) && $user){
  $idAn=sanitize($_GET['idAn'], INT);
  $sqlAn="select * from anuncios where anuncioId=".$idAn;
  if($resAn=$db->GetRow($sqlAn)){
      $sy->assign('precio', $resAn['precio']);
	  $sy->assign('titulo', $resAn['titulo']);
	  $sy->assign('descripcion', $resAn['descripcion']);
	  $sy->assign('profesional', '');
	  $sy->assign('particular', 'checked="checked"');
		
	  $sy->assign('vacunaSi', '');
	  $sy->assign('vacunaNo', 'checked="checked"');
		
	  $sy->assign('desparasitadosSi', '');
	  $sy->assign('desparasitadosNo', 'checked="checked"');
		
	  $sy->assign('male', '');
	  $sy->assign('fimale', 'checked="checked"');
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

	if($_POST['provincia']=='0'){
	  $error['provincia']='<li><span class="error">Selecciona una provincia </span></li>';
	}
	if($_POST['poblacion']=='0'){
	  $error['poblacion']='<li><span class="error">Selecciona una población </span></li>';
	}
	if($_POST['edad']=='0'){
	  $error['edad']='<li><span class="error">Selecciona una edad </span></li>';
	}
	if(!eregi('^[0-9]{1,10}$', $_POST['precio'])){
	  $error['precio']='<li><span class="error">Compruebe el precio, solo puede contener números</span></li>';
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
	  $precio=sanitize($_POST['precio'], INT);
	  $provincia=sanitize($_POST['provincia'], INT);
	  $municipio=sanitize($_POST['poblacion'], INT);
	  $raza=sanitize($_POST['raza'], INT);
	  $categoria=sanitize($_POST['categoria'], INT);
	  $edad=sanitize($_POST['edad'], INT);
	   if($categoria!=3){
	    $vacunados=sanitize($_POST['vacunas'], SQL);
		$vacunadosFieldd=", '".$vacunados."'";
		$vacunadosField=', vacunados';
		
	    $desparasitados=sanitize($_POST['desparasitados'], SQL);
		$desparasitadosFieldd=", '".$desparasitados."' ";
		$desparasitadosField=', desparasitados';
	  }else{
	    $vacunadosFieldd=$vacunadosField=$desparasitadosFieldd=$desparasitadosField='';
	  }
	  
	  $tipoCliente=sanitize($_POST['tipoCliente'], SQL);
	  $sexo=sanitize($_POST['sexo'], SQL);
	  $fecha=time();
	  $expira=$fecha+(60*60*24*30*3);//3 meses
	  $idUser=sanitize($_SESSION['idUser'], INT);
	  if(!$edita){
	  $sqlInAnuncio="
	  INSERT INTO `anuncios` 
	  (`idCategoria`, `idRaza`, `precio`, `idProvincia`, `idMunicipio`, `tipo`, `sexo`, `titulo`, `descripcion` $vacunadosField, `edad` $desparasitadosField, `fecha`, idUsuario, expira) 
	  VALUES 
	  ($categoria, $raza, $precio, $provincia, $municipio, 'cv', '$sexo', '$titulo', '$descripcion' $vacunadosFieldd, $edad $desparasitadosFieldd, $fecha, $idUser, $expira);";
	  
	  }else if($edita){$db->debug=true;
	    echo $sqlInAnuncio="
		  update `anuncios` set 
		  ``idCategoria`=$categoria, `idRaza`=$raza, `precio`=$precio, `idProvincia`=$provincia, `idMunicipio`=$municipio, `tipo`='cv', `sexo`='$sexo', `titulo`='$titulo', `descripcion'='$descripcion' $vacunadosField=$vacunadosFieldd, `edad`=$edad $desparasitadosField=$desparasitadosFieldd, `fecha`=$fecha where anuncioId=".sanitize($_POST['edita'], INT);
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
	  
	  $sy->assign('error', $error);
	  $sy->assign('titulo', $_POST['titulo']);
	  $sy->assign('descripcion', $_POST['descripcion']);
	  
	  $sy->assign('precio', $_POST['precio']);
	  
	  if($_POST['tipoCliente']=='Par'){
          $particular='checked="checked"';
		  $pro='';
	  }else{
	      $particular='';
		  $pro='checked="checked"';
	  }
	  $sy->assign('profesional', $pro);
	  $sy->assign('particular', $particular);
	  
	  if($_POST['vacunas']=='s'){
          $vacunasSi='checked="checked"';
		  $vacunasNo='';
	  }else{
	      $vacunasNo='checked="checked"';
		  $vacunasSi='';
	  }
	  $sy->assign('vacunaNo', $vacunasNo);
	  $sy->assign('vacunaSi', $vacunasSi);
	  
	  if($_POST['desparasitados']=='s'){
          $desparasitadosSi='checked="checked"';
		  $desparasitadosNo='';
	  }else{
	      $desparasitadosNo='checked="checked"';
		  $desparasitadosSi='';
	  }
	  $sy->assign('desparasitadosNo', $desparasitadosNo);
	  $sy->assign('desparasitadosSi', $desparasitadosSi);
	  
	  if($_POST['sexo']=='m'){
          $male='checked="checked"';
		  $fimale='';
	  }else{
	      $fimale='checked="checked"';
		  $male='';
	  }
	  $sy->assign('male', $male);
	  $sy->assign('fimale', $fimale);
	  
	  
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


$catAct=(isset($_POST['categoria']))?$_POST['categoria']:'1';
//COMBOBOX CATEGORIAS
$htmlCats='';
$sqlCats="select * from categorias";
if($resCats=$db->GetAll($sqlCats)){
  foreach($resCats as $reCat){
    if($catAct==$reCat['categoriaId']){
	  $sel="selected='selected'";
	}
	$htmlCats.='<option value="'.$reCat['categoriaId'].''.$sel.'">'.$reCat['nomCategoria'].'</option>';
	$sel='';
  }
}
$sy->assign('htmlCats', $htmlCats);//echo $htmlCats;


//COMOBOX RAZAS
$razaAct=(isset($_POST['raza']))?$_POST['raza']:'';
$sqlRazas="select * from razas where idCategoria=".$catAct;
$htmlRazas='';
if($reRazas=$db->GetAll($sqlRazas)){
  foreach($reRazas as $reRaza){
	if($reRaza['razaId']==$razaAct){
	  $sel="selected='selected'";
	}
    $htmlRazas.='<option value="'.$reRaza['razaId'].' '.$sel.'">'.utf8_encode($reRaza['nombre']).'</option>';
	$sel='';
  }
}
$sy->assign('htmlRazas', $htmlRazas);



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

//COMOBOX EDADES
$edadAct=(isset($_POST['edad']))?$_POST['edad']:'';
$edades=array('1'=>'1','2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10,'11'=>11,'12'=>12,'13'=>13,'14'=>14,'15'=>15,'24'=>24,'36'=>36,'48'=>48,'60'=>60,'72'=>72,'84'=>84,'96'=>96,'108'=>108, '120'=>120, '132'=>132, '144'=>144, 156=>156, 168=>168, 180=>180, 192=>192, 204=>204, 216=>216, 228=>228, 240=>240, 264=>264, 288=>288, 312=>312, 336=>336, 360=>360, 384=>384, 408=>408, 432=>432, 456=>456, 480=>480, 504=>504, 528=>528, 552=>552, 576=>576, 600=>600, 624=>624, 648=>648, 672=>672, 696=>696, 720=>720, 744=>744, 768=>768, 792=>792);
foreach($edades as $key=>$value){
    if($key==$edadAct){
	  $sel="selected='selected'";
	}
	if($value <= 15){
	  $s=($value==1)?'':'es';
	  $value=$value.' mes'.$s;
	}else{
	  $num=$value/12;
	  $value=$num.' años';
	}
    $htmlEdades.='<option value="'.$key.' " '.$sel.'>'.$value.'</option>';
	$sel='';
}

$sy->assign('htmlEdades', $htmlEdades);
$sy->display('compraVenta.tpl');
?>
