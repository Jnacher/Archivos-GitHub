<?php 
require_once('phpIncludes/config.php');
//INICIALIZO VARIABLES
$sel='';
$sy->assign('profesional', '');
$sy->assign('particular', 'checked="checked"');
$sy->assign('http', 'www.');
$eresCheck=array('empresa'=>'', 'protectora'=>'', 'ciador'=>'', 'veterinario'=>'');
$sy->assign('camposShow', '');
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
	
	

	if(!$val->valNombrePersona($_POST['nombre'])){
	  $errorr['nombre']='#errorNombre';
	  $coma=', ';
	}
	$emp=$cri=$prot=$prof=$vet=false;
	if($_POST['tipoCliente']=='Pro'){
	  $prof=true;
	  if($_POST['tipoCliente2']=='Emp'){
		if(!$val->valNombreEmpresa($_POST['nombreEmpresa']) && $_POST['nombreEmpresa']!=''){//PUEDE ESTAR VACIO, O SI ESTA LLENO CUMPLIR EL PATRON
		  $error['nombreEmpresa']='<span class="error">Nombre Empresa Incorrecto </span>';
		}
		if(!$val->valUrl($_POST['webEmpresa']) && $_POST['webEmpresa']!='www.'){
		  $error['webEmpresa']='<span class="error">Compruebe la web, no es correcta</span>';
		}
		$emp=true;
	  }elseif($_POST['tipoCliente2']=='Prot'){
		if(!$val->valNombrePersona($_POST['nomProtectora']) && $_POST['nomProtectora']!=''){
		  $error['nomProtectora']='<span class="error">Compruebe el nombre de la Protectora, no es correcto</span>';
		}
		if(!$val->valUrl($_POST['webProtectora']) && $_POST['webProtectora']!='www.'){
		  $error['webProtectora']='<span class="error">Compruebe la web, no es correcta</span>';
		}
		$prot=true;
	  }elseif($_POST['tipoCliente2']=='Cri'){
		if(!$val->valNombrePersona($_POST['nomCriador']) && $_POST['nomCriador']!=''){
		  $error['nomCriador']='<span class="error">Compruebe el nombre del criador, no es correcto</span>';
		}
		if(!$val->valUrl($_POST['webCriador']) && $_POST['webCriador']!='www.'){
		  $error['webCriador']='<span class="error">Compruebe la web, no es correcta</span>';
		}
		$cri=true;
	  }
	  elseif($_POST['tipoCliente2']=='Vet'){
		if(!$val->valNombrePersona($_POST['nomVeterinario']) && $_POST['nomVeterinario']!=''){
		  $error['nomVeterinario']='<span class="error">Compruebe el nombre del veterinario, no es correcto</span>';
		}
		if(!$val->valUrl($_POST['webVeterinario']) && $_POST['webVeterinario']!='www.'){
		  $error['webVeterinario']='<span class="error">Compruebe la web, no es correcta</span>';
		}
		$vet=true;
	  }
	}
	
	
	
	$emailBien=true;
	if(!$val->valEmail($_POST['email'])){
	  $emailBien=false;
	}else{
		
	 $sqlEmail="select email from usuarios where email='".$_POST['email']."'";
	  if($db->GetRow($sqlEmail)){
	    $emailBien=false;
	  }
	}
	if(!$emailBien){
	  $errorr['email']=$coma.'#errorEmail';
	  $coma=', ';
	}
	
	if(!$val->valTelefono($_POST['telefono'])){
	  $errorr['telefono']=$coma.'#errorTelefono';
	  $coma=', ';
	}
	if($_POST['provincia']=='0'){
	  $error['provincia']='<span class="error">Selecciona una provincia </span>';
	}
	if($_POST['poblacion']=='0'){
	  $error['poblacion']='<span class="error">Selecciona una población </span>';
	}
	if(!$_POST['acepto']){
	  $error['acepto']='<span class="error">Debes aceptar las condiciones </span>';
	}
	  if($val->valPass($_POST['pass'])){
         
	  }else{
		 $errorr['pass']=$coma.'#errorPass';
		 $coma=', ';
	  }
	  
	  if($_POST['pass']==$_POST['pass2']){
		 
	  }else{
		 $errorr['pass2']=$coma.'#errorPass2';
	  }
	
	if(count($error)==0 && count($errorr)==0){
	  $nombre=sanitize($_POST['nombre'], SQL+HTML);
	  $telefono=sanitize($_POST['telefono'], INT);
	  $email=sanitize($_POST['email'], SQL);
	  $provincia=sanitize($_POST['provincia'], INT);
	  $municipio=sanitize($_POST['poblacion'], INT);
	  $tipoCliente=sanitize($_POST['tipoCliente'], SQL);
	  $pass=md5($_POST['pass']);
	  if($emp){
	    $webEmpresa=(trim($_POST['webEmpresa'])=='www.')?'':$_POST['webEmpresa'];
	    $webEmpresa=sanitize($webEmpresa, SQL);
	    $nombreEmpresa=sanitize($_POST['nombreEmpresa'], SQL+HTML);
		$sqlTipoA=", `nombreEmpresa`, `webEmpresa`";
		$sqlTipoB=", '$nombreEmpresa', '$webEmpresa'";
	  }elseif($cri){
	    $webCriador=(trim($_POST['webCriador'])=='www.')?'':$_POST['webCriador'];
	    $webCriador=sanitize(webCriador, SQL);
	    $nomCriador=sanitize($_POST['nomCriador'], SQL);
		$sqlTipoA=", `nombreCriador`, `webCriador`";
		$sqlTipoB=", '$nomCriador', '$webCriador'";
	  }elseif($prot){
	    $webProtectora=(trim($_POST['webProtectora'])=='www.')?'':$_POST['webProtectora'];
	    $webProtectora=sanitize($webProtectora, SQL);
	    $nomProtectora=sanitize($_POST['nomProtectora'], SQL);
		$sqlTipoA=", `nombreProtectora`, `webProtectora`";
		$sqlTipoB=", '$nomProtectora', '$webProtectora'";
	  }elseif($vet){
	    $webVeterinario=(trim($_POST['webVeterinario'])=='www.')?'':$_POST['webVeterinario'];
	    $webVeterinario=sanitize($webVeterinario, SQL);
	    $nomVeterinario=sanitize($_POST['nomVeterinario'], SQL);
		$sqlTipoA=", `nombreVeterinario`, `webVeterinario`";
		$sqlTipoB=", '$nomVeterinario', '$webVeterinario'";
	  }
	  $fecha=time();//$db->debug=true;
	  $sqlInUser="
	 INSERT INTO `usuarios` 
	 (`nombre`, `telefono`, `email`, `provincia`, `poblacion`, `tipoCliente`, `activo`, `pass` $sqlTipoA) 
	 VALUES 
	 ('$nombre', '$telefono', '$email', '$provincia', '$municipio', '$tipoCliente', 'n', '$pass' $sqlTipoB);";
	  if($db->execute($sqlInUser)){
		$idUser=$db->Insert_ID();
	    //header('location: finRegistro.php?res=bien');
		 $resMsj='ok';
		 //http://www.anunciamascotas.com/activacion.php?seg=e10adc3949ba59abbe56e057f20f883e&id=3
		 $sy->assign('enlace', "http://www.anunciamascotas.com/activacion.php?seg=$pass&id=".$idUser);
		 $htmlBody=$sy->fetch('emailRecuperacion.tpl');
		 $cabeceras = "Content-type: text/html\r\n"; 
		 $cabeceras .= 'To: <'.$Email.'>' . "\r\n";
		 $cabeceras .= 'From: www.anunciomascotas.com' . "\r\n";          
		 $enviarMail = @mail ($email, 'Activa cuenta usuario', $htmlBody, $cabeceras);
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
	  header('location: finRegistro.php?ref=reg&res='.$resMsj);
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
	  $camposShow=$camposShowLine='';
	  if($prof){
		  $camposShow.='';
		  $camposShowLine.='#tipo {display:inherit;}, .eres1 {display:inline;}';
		  if($emp){
			$sy->assign('nombreEmpresa', $_POST['nombreEmpresa']);
			$sy->assign('webEmpresa', $_POST['webEmpresa']);
			$camposShow.='.Emp';
			$eresCheck['empresa']='checked="checked"';
			$http=($_POST['webEmpresa']!='')?'':'www.';
		  }elseif($cri){
			$sy->assign('nomCriador', $_POST['nombreCriador']);
			$sy->assign('webCriador', $_POST['webCriador']);
			$camposShow.='.Cri';
			$eresCheck['criador']='checked="checked"';
		    $http=($_POST['webCriador']!='')?'':'www.';
		  }elseif($prot){
			$http=($_POST['webProtectora']!='')?'':'www.';
			$sy->assign('nomProtectora', $_POST['nomProtectora']);
			$sy->assign('webProtectora', $_POST['webProtectora']);
			$camposShow.='.Prot';
			$eresCheck['protectora']='checked="checked"';
		  }elseif($vet){
			$http=($_POST['webVeterianrio']!='')?'':'www.';
			$sy->assign('nomVeterianrio', $_POST['nomVeterianrio']);
			$sy->assign('webVeterianrio', $_POST['webVeterianrio']);
			$camposShow.='.Vet';
			$eresCheck['veterinario']='checked="checked"';
		  }
	  }
	  $sy->assign('http', $http);
	  $sy->assign('camposShow', '<style type="text/css">
	    '.$camposShow.'{ display:block;}
		'.$camposShowLine.'
	  </style>');
	  
	   $sy->assign('eresCheck', $eresCheck);
	 
	  
	  
	  $sy->assign('nombre', $_POST['nombre']);
	  $sy->assign('telefono', $_POST['telefono']);
	  $sy->assign('email', $_POST['email']);
	  if($_POST['tipoCliente']=='Par'){
          $particular='checked="checked"';
		  $pro='';
	  }else{
	      $particular='';
		  $pro='checked="checked"';
	  }
	  $sy->assign('profesional', $pro);
	  $sy->assign('particular', $particular);

	  
	  
	}
}







$provAct=(isset($_POST['provincia']))?$_POST['provincia']:'90000';
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

$municAct=(isset($_POST['poblacion']))?$_POST['poblacion']:'';
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


//$sy->assign('htmlEdades', $htmlEdades);
$sy->display('registro.tpl');
?>
