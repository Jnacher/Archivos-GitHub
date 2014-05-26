<?php 
require_once('phpIncludes/config.php');

//echo $razaId;
	
	
	$idVerRaza=sanitize($_GET['razaId'], INT);
  	$sy->assign('idVerRaza', $idVerRaza);
	$sqlVerRaza="select * from razasinfo where razaId=".$idVerRaza;//$db->debug=true;
	$resVerRaza=$db->GetRow($sqlVerRaza);
	
	$sy->assign('nombre', utf8_encode($resVerRaza['nombre']));
	
	
	////////////////////////
	
  	$sy->assign('pais', utf8_encode($resVerRaza['pais']));
	
	  
	if($resVerRaza['pais']=='Inglaterra'){
	    $imges='Inglaterra';
	  }elseif($resVerRaza['pais']=='Spain'){
		$imges='Espanya';
	  }elseif($resVerRaza['pais']=='EEUU-Inglaterra'){
		$imges='inglant-EEUU';
	  }elseif($resVerRaza['pais']=='Republica del Congo'){
		$imges='RepublicaCongo';
	  }elseif($resVerRaza['pais']=='Reino Unido'){
		$imges='UnitedEnglant';
	  }elseif($resVerRaza['pais']=='Estados Unidos'){
		$imges='EEUU';
	  }elseif($resVerRaza['pais']=='Francia'){
		$imges='francia';
	  }elseif($resVerRaza['pais']=='Peru'){
		$imges='Peru';
	  }elseif($resVerRaza['pais']=='Italia'){
		$imges='italia';
	  }elseif($resVerRaza['pais']=='Argentina'){
		$imges='argentina';
	  }elseif($resVerRaza['pais']=='Alemania'){
		$imges='alemania';
		 }elseif($resVerRaza['pais']=='Japon'){
		$imges='japon';
	  }elseif($resVerRaza['pais']=='Alemania'){
		$imges='Alemania';
	  }
	  
	  
	  if($imges!=''){
	    $imgesS=' <div class="imagenInfo"><img  src="images/banderas/'.$imges.'.png" width="160" height="100" /></div>';
	  }
	  $sy->assign('imgesS', $imgesS);
	  
	////////////////////
	
	$sy->assign('rutaImagenRaza', utf8_encode($resVerRaza['rutaImagenRaza']));
	
	///////////////////
	
	if($resVerRaza['historia']!=''){
		$historiaI='<div class="razaDestacado">Breve resumen historico:</div><br /><br />'.$resVerRaza['historia'].'<p></p><br /><br />';	
	}
	$sy->assign('historiaI', utf8_encode($historiaI));
	
	///////////////////
	
	if($resVerRaza['dimensiones']!=''){
		utf8_encode($dimensionesI='<div class=""><b>Tamaño: </b>'.$resVerRaza['dimensiones'].'</div><br /><br />');	
	}
	$sy->assign('dimensionesI', $dimensionesI);
	
	///////////////
	
	if($resVerRaza['caracteristicas']!=''){
		$caracteristicasI='<div class="razaDestacado">Caracteristicas:</div><br /><br /><p>'.$resVerRaza['caracteristicas'].'</p><br /><br />';	
	}
	$sy->assign('caracteristicasI', utf8_encode($caracteristicasI));
	
	/////////////////
	
	if($resVerRaza['peso']!=''){
		$pesoI='<div class=""><b>Peso: </b>'.$resVerRaza['peso'].'</div><br /><br />';	
	}
	$sy->assign('pesoI', utf8_encode($pesoI));
	
	////////////////
	
	if($resVerRaza['color']!=''){
		$colorI='<div class="razaDestacado">Color:</div> <div class="">'.$resVerRaza['color'].'</div><br /><p></p><br /><br />';	
	}
	$sy->assign('colorI', utf8_encode($colorI));
	
	//////////////////
	
	if($resVerRaza['pelo']!=''){
		$peloI='<div class="razaDestacado">Pelo:</div> <div class="">'.$resVerRaza['pelo'].'</div><br /><p></p><br /><br />';	
	}
	$sy->assign('peloI', utf8_encode($peloI));
	
	/////////////////////
	
	if($resVerRaza['temperamento']!=''){
		$temperamentoI='<div class="razaDestacado">Temperamento / Comportamiento:</div><br /><p>'.$resVerRaza['temperamento'].'</p><br /><br />';	
	}
	$sy->assign('temperamentoI', utf8_encode($temperamentoI));
	
	///////////////////
	
	if($resVerRaza['cuidados']!=''){
		$cuidadosI='<div class="razaDestacado">Cuidados Y Ejercicio: </div><br /><p>'.$resVerRaza['cuidados'].'</p><br /><br />';	
	}
	$sy->assign('cuidadosI', utf8_encode($cuidadosI));
	
	///////////////////
	
	if($resVerRaza['utilidad']!=''){
		$utilidadI='<div class="razaDestacado">Utilidad: </div><br /><p>'.$resVerRaza['utilidad'].'</p><br /><br />';	
	}
	$sy->assign('utilidadI', utf8_encode($utilidadI));
	
	
	/////////Tamaño de la raza/////////////
	  if($resVerRaza['tamanyo']=='g'){
	    $tam='grande';
	  }elseif($resVerRaza['tamanyo']=='m'){
		$tam='mediano';
	  }elseif($resVerRaza['tamanyo']=='p'){
		$tam='pequeño';
	  }
	  if($tam!=''){
	    $tamS='<div class="textoRazaTitulo">El tamaño de raza es '.$tam.'</div>';
	  }
	  $sy->assign('tamS', $tamS);
	  
	  
	if($resVerRaza['tamanyo']=='g'){
	    $img='TG';
	  }elseif($resVerRaza['tamanyo']=='m'){
		$img='TM';
	  }elseif($resVerRaza['tamanyo']=='p'){
		$img='TP';
	  }
	  if($img!=''){
	    $imgS='<div class="imagenInfo"><img src="recursos/formularios/'.$img.'.png" width="250" height="100" /></div>';
	  }
	  $sy->assign('imgS', $imgS);
	  
	
	
	
	
$sy->display('verRaza.tpl');
