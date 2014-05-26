<?php
require_once('phpIncludes/config.php');
$provAct=(isset($_POST['provincia']))?$_POST['provincia']:'90000';
//COMBOBOX PROVINCIAS
$htmlProv=$sel='';
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
$porProv='';

$infoProtectoras='';
/////////////////////////////////////////////////////////////
if(isset($_POST['actualizar']) && isset($_POST['provincia'])){
    if($_POST['provincia']!='0')$porProv=' AND provincia='.sanitize($_POST['provincia'], INT);
}
	$sqlPro="select telefono, nombreEmpresa, webEmpresa from usuarios where nombreEmpresa!='' AND webEmpresa!=''".$porProv;
	if($reAd=$db->GetRow($sqlPro)){
	  $infoProtectoras.='<div class="cabeceraProtectorasSub">
									<div class="uno">'.$reAd['nombreEmpresa'].'</div>
									<div class="dos">'.$reAd['telefono'].'</div>
									<div class="tres">'.$reAd['webEmpresa'].'</div>
									<div class="cuatro"><a href="#">Ver anuncios</a></div>  
									</div>';
	}else{
	  $infoProtectoras.='<div style="text-align:center;" class="cabeceraProtectorasSub">Sin Datos</div>';
	}
 	
//////////////////////////////////////////////////////////	
$sy->assign('infoProtectoras', $infoProtectoras);	
/////////////////////////////////////////////////////			
$sy->display('tiendasEmpresas.tpl');

?>
