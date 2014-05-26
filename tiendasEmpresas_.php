<?php 
require_once('phpIncludes/config.php');

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

/////////////////////////////////////////////////////////////
if(isset($_POST['actualizar'])){
	
$infoCriadores.='';
$infoProfesionales.='';
$infoProtectoras.='';

  foreach($resAd as $reAd){
	$sqlPro="select telefono, nombreEmpresa, nombreProtectora, nombreCriador, webEmpresa, webProtectora, webCriador,  from usuarios where provincia=".$reAd['provinciaId'];
	$resPro=$db->GetRow($sqlPro);
    $infoCriadores.=		'<div class="columnaIz">
							  <li>'.$reAd['nombreProtectora'].'</li>
							  </div>
							  
							  <div class="columnaIz">
							  <li>'.$reAd['telefono'].'</li>
							  </div>
							  
							  <div class="columnaDe">
							  <li>'.$reAd['webProtectora'].'</li>
							  </div>';
							  
	$infoProfesionales.=	'<div class="columnaIz">
							  <li>'.$reAd['nombreCriador'].'</li>
							  </div>
							  
							  <div class="columnaIz">
							  <li>'.$reAd['telefono'].'</li>
							  </div>
							  
							  <div class="columnaDe">
							  <li>'.$reAd['webCriador'].'</li>
							  </div>';
							  
	$infoProtectoras.=		'<div class="columnaIz">
							  <li>'.$reAd['nombreEmpresa'].'</li>
							  </div>
							  
							  <div class="columnaIz">
							  <li>'.$reAd['telefono'].'</li>
							  </div>
							  
							  <div class="columnaDe">
							  <li>'.$reAd['webEmpresa'].'</li>
							  </div>';
 	 }
	}

//////////////////////////////////////////////////////////	
$sy->assign('infoCriadores', $infoCriadores);	
$sy->assign('infoProfesionales', $infoProfesionales);
$sy->assign('infoProtectoras', $infoProtectoras);	
/////////////////////////////////////////////////////			
			
$sy->display('tiendasEmpresas.tpl');
