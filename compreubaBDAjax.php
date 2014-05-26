<?php 
require_once('phpIncludes/config.php');

if(isset($_GET['cat'])){
  $cat=sanitize($_GET['cat'] ,INT);
  //$db->debug=true;
  $razas='';
  $sqlComProv="select nombre, razaId from razas where idCategoria='".$cat."'";
	  $res=$db->GetAll($sqlComProv);
	  if(sizeof($res)>0){
	   foreach($res as $re){
		$razas.='<option value="'.$re['razaId'].'">'.utf8_encode($re['nombre']).'</option>';
	   }
	  }else{
		$razas.='<option value="0">selecciona</option>';
	  }
  
  echo $razas;
}elseif(isset($_GET['prov'])){
  $prov=sanitize($_GET['prov'] ,INT);
  //$db->debug=true;
  $poblacion='';
  $sqlComProv="select municipio, municipioId from municipios where idProvincia='".$prov."'";
	  $res=$db->GetAll($sqlComProv);
	  if(sizeof($res)>0){
	   foreach($res as $re){
		$poblacion.='<option value="'.$re['municipioId'].'">'.utf8_encode($re['municipio']).'</option>';
	   }
	  }else{
		$poblacion.='<option value="0">selecciona</option>';
	  }
  
  echo $poblacion;
}

  

?>