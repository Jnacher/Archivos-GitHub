<?php 
require_once('phpIncludes/config.php');
//INICIALIZO VARIABLES
$sel='';
$sy->assign('profesional', '');
$sy->assign('particular', 'checked="checked"');

$sy->assign('vacunaSi', '');
$sy->assign('vacunaNo', 'checked="checked"');

$sy->assign('desparasitadosSi', '');
$sy->assign('desparasitadosNo', 'checked="checked"');

$sy->assign('male', '');
$sy->assign('fimale', 'checked="checked"');


if(isset($_POST['enviar'])){
/*	echo '<pre>';
	print_r($_FILES['files']);
	echo '<pre/>';*/
	
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
	if(!$val->valNombrePersona($_POST['nombre'])){
	  $errorr[]='#errorNombre';
	  $coma=', ';
	}
	if(!$val->valEmail($_POST['email'])){

	   $errorr[]=$coma.'#errorEmail';
	   $coma=', ';
	}
	if(!$val->valTelefono($_POST['telefono'])){
	   $errorr[]=$coma.'#errorTelefono';
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
	  $nombre=sanitize($_POST['nombre'], SQL+HTML);
	  $telefono=sanitize($_POST['telefono'], INT);
	  $email=sanitize($_POST['email'], SQL);
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
	  $fecha=time();//$db->debug=true;
	  $sqlInAnuncio="
	  INSERT INTO `perro`.`anuncios` 
	  (`idCategoria`, `idRaza`, `precio`, `idProvincia`, `idMunicipio`, `tipoCliente`, `sexo`, `titulo`, `descripcion` $vacunadosField, `edad` $desparasitadosField, `fecha`, `nombre`, `email`, `telefono`) 
	  VALUES 
	  ($categoria, $raza, $precio, $provincia, $municipio, '$tipoCliente', '$sexo', '$titulo', '$descripcion' $vacunadosFieldd, $edad $desparasitadosFieldd, $fecha, '$nombre', '$email', '$telefono');";
	  if($db->execute($sqlInAnuncio)){
		  $idAnuncio=$db->Insert_ID();
		  //SUBE IMAGENES
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
				$sqlInFotos="insert into imagenes (rutaImg, idAnuncio) values ('$rutaImg', $idAnuncio)";
				$db->execute($sqlInFotos);
			}
		  }
		}
	    //header('location: finRegistro.php?res=bien');
		 $resMsj='ok';
		 
		 $sy->assign('codigo',$idAnuncio);
		 $htmlBody=$sy->fetch('emailCodAnuncio.tpl');
		 $cabeceras = "Content-type: text/html\r\n"; 
		 $cabeceras .= 'To: <'.$Email.'>' . "\r\n";
		 $cabeceras .= 'From: www.anunciomascotas.com' . "\r\n";          
		 $enviarMail = @mail ($email, 'Codigo Anuncio', $htmlBody, $cabeceras);
			if($enviarMail){
			 $resultado= 'El email se envio con exito';
			}else{
			  $resultado= 'El email no existe';
			}  
	  }else{
		 $resMsj='ko';
	    //header('location: finRegistro.php?res=mal');
	  }
	  //echo 'location: finRegistro.php?res='.$resMsj;
	  header('location: finRegistro.php?res='.$resMsj);
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
	  $sy->assign('nombre', $_POST['nombre']);
	  $sy->assign('telefono', $_POST['telefono']);
	  $sy->assign('email', $_POST['email']);
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
    $htmlRazas.='<option value="'.$reRaza['razaId'].' '.$sel.'">'.$reRaza['nombre'].'</option>';
	$sel='';
  }
}
$sy->assign('htmlRazas', $htmlRazas);


$provAct=(isset($_POST['provincia']))?$_POST['provincia']:'90000';
//COMBOBOX PROVINCIAS
$htmlProv='';
$sqlProv="select * from provincias";
if($resProv=$db->GetAll($sqlProv)){
  foreach($resProv as $reProv){ //echo $reProv['provinciaId'].'=='.$provAct.'<br>';
    if(trim($provAct)==trim($reProv['provinciaId'])){//echo 'dddddd';
	  $sel="selected='selected'";
	}
	$htmlProv.='<option value="'.$reProv['provinciaId'].'" '.$sel.'>'.$reProv['provincia'].'</option>';
	$sel='';
  }
}
$sy->assign('htmlProv', $htmlProv);//echo $htmlCats;


//COMOBOX POBLACION

$municAct=(isset($_POST['poblacion']))?$_POST['poblacion']:'';
$sqlMunic="select * from municipios where idProvincia=".$provAct;
$htmlMunicipios='';
if($reMunic=$db->GetAll($sqlMunic)){
  foreach($reMunic as $reMuni){
	if($reMuni['municipioId']==$municAct){
	  $sel="selected='selected'";
	}
    $htmlMunicipios.='<option value="'.$reMuni['municipioId'].'" '.$sel.'>'.$reMuni['municipio'].'</option>';
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
$sy->display('registroAnuncioCompraVenta.tpl');
?>
