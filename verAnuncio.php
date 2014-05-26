<?php 
require_once('phpIncludes/config.php');
if(isset($_GET['idAnuncio'])){
  $idAnuncio=sanitize($_GET['idAnuncio'], INT);
  $sy->assign('idAnuncio', $idAnuncio);
  $sqlAn="select * from anuncios where anuncioId=".$idAnuncio;
  if($resAn=$db->GetRow($sqlAn)){
	//COMUNES
	$sqlPr="select provincia de provincias where provinciaId=".$resAn['idProvincia'];
	$resPr=$db->GetRow($sqlPr);
	$sqlCi="select municipio de municipios where municipioId=".$resAn['idMunicipio'];
	$resCi=$db->GetRow($sqlCi);
	$sy->assign('titulo', $resAn['titulo']);
	$sy->assign('fechaa', date('d/m/Y', $resAn['fecha']));//$db->debug=true;
	if($resAn['tipo']!='ma'){
		$sqlR="select nombre from razas where razaId=".$resAn['idRaza'];
		$resR=$db->GetRow($sqlR);

		$sy->assign('raza', '<div class="anunciosRaza">Raza / especie: <span style="color:#666666">'.$resR['nombre'].'</span></div>');
		$imgSexo=($resAn['sexo']=='h')?'signs_woman_32x32':'signs_man_32x32';
		$sexoFin='<span style="margin-bottom:15px;">Sexo:
				  <img src="recursos/formularios/'.$imgSexo.'.png" width="20" height="20" alt="sexo" />
				  </span>';
		$sy->assign('sexoFin', $sexoFin);
		if($resAn['edad']>12){
		  $edadFin=($resAn['edad']/12).' Años';
		}else{
		  $edadFin=$resAn['edad'].' Meses';
		}
		$sy->assign('edadFin','<span>Edad: <b>'.$edadFin.'</b></span>');
	}
	
	$sqlM="select municipio from municipios where municipioId=".$resAn['idMunicipio'];
	$resM=$db->GetRow($sqlM);
	$sqlP="select provincia from provincias where provinciaId=".$resAn['idProvincia'];
	$resP=$db->GetRow($sqlP);
	$sy->assign('ciudad', utf8_encode($resP['provincia'].' - '.$resM['municipio']));
	
	

	$descripcion=$resAn['descripcion'];
	$sqlNomCat="select nomCategoria from categorias where categoriaId=".$resAn['idCategoria'];
	$resCat=$db->GetRow($sqlNomCat);
	$sy->assign('categoria', $resCat['nomCategoria']);
	
	$categoria='Categoria= '.$resAn['idCategoria'];
	$categoria='Categoria= '.$resAn['idCategoria'];
	//POR CATEGORIA
	$vacunados=$desparasitados='';
	if(($resAn['idCategoria']==2 || $resAn['idCategoria']==1) && $resAn['tipo']!='m'){//IGUAL A PERROS Y GATOS
	  $imgDesp=($resAn['desparasitados']=='s')?'pill_32x32':'cancel_32x32';
	  $imgVac=($resAn['vacunados']=='s')?'heart_32x32':'cancel_32x32';
	  $vacDesp='<span >Vacunado:
              <img src="recursos/formularios/'.$imgVac.'.png" width="20" height="20" alt="vacunado" />
              </span>
              <span >Desparasitado:
              <img src="recursos/formularios/'.$imgDesp.'.png" width="20" height="20" alt="desparasitado" />
              </span>  ';
	}
	$sy->assign('vacDesp', $vacDesp);
	//POR TIPO
	$datosAdop=$img=$imgS=$precio=$interes='';
	if($resAn['tipo']=='cv' || $resAn['tipo']=='ma'){
	  $precio='<div class="anunciosPrecio">Precio: '.$resAn['precio'].'€ </div>';
	}elseif($resAn['tipo']=='a' || $resAn['tipo']=='m'){
	  if($resAn['tam']=='g'){
	    $img='TG';
	  }elseif($resAn['tam']=='m'){
		$img='TM';
	  }elseif($resAn['tam']=='p'){
		$img='TP';
	  }
	  if($img!=''){
	    $imgS='<div class="anunciosMenuBDerecha">
              <span>Tamaño:<img src="recursos/formularios/'.$img.'.png" width="250" height="100" alt="tamanyo" />
              </span>
          </div>';
	  }
	  $sy->assign('imgS', $imgS);
	  
	  if($resAn['tipo']=='m'){
	    $interes='<span style="color:#666666"> Interes: <b>'.$resAn['interes'].'<b/></span> ';
	  }
	  
	}
	if($resAn['tipo']=='a'){
	  $sqlUser="select nomProtectora, webProtectora from usuarios where usuarioId=".$resAn['idUsuario'];
	  if($resUser=$db->GetRow($sqlUser)){
		$datosAdop='<div class="datosProtec">		
						<p>Nombre protectora:<br /><span style="color:#666666"> '.$resUser['nomProtectora'].'</span></p>
 						<p>Web protectora: <br /><span style="color:#666666">'.$resUser['webProtectora'].'</span></p>
					</div>
		';
	  }  
	}
	$sy->assign('datosAdop', $datosAdop);
	$sy->assign('interes_', $interes);
	$sy->assign('precioo', $precio);
    $sy->assign($resAn);
	if($resAn['idUsuario']!=''){
	  $sqlNomTel="select nombre, telefono from usuarios where usuarioId=".$resAn['idUsuario'];
	}else{
      $sqlNomTel="select nombre, telefono from anuncios where anuncioId=".$idAnuncio;
	}
	if($resNomTel=$db->GetRow($sqlNomTel)){
	  $sy->assign('nombre', $resNomTel['nombre']);
	  $sy->assign('telefono', $resNomTel['telefono']);
	}
	//IMAGENES
	$htmlImgsG=$htmlImgsP='';
	$sqlImg="select * from imagenes where idAnuncio=".$idAnuncio;
	if($resImgs=$db->GetAll($sqlImg)){
	  foreach($resImgs as $resImg){
	    $htmlImgsG.='<div class="slide"><img src="images/grandes/'.$resImg['rutaImg'].'" width="200" height="200" title="presentacion" alt="principal" /></div>';
		$htmlImgsP.='<li class="menuItem"><a href=""><img src="images/grandes/'.$resImg['rutaImg'].'" width="50" height="50" title="presentacion" alt="thumb" /></a></li>';
	  }
	  
	}else{
		$htmlImgsG.='<div class="slide"><img src="images/3.jpg" width="200" height="200" /></div>';
		$htmlImgsP.='<li class="menuItem"><a href=""><img src="images/3.jpg" width="50" height="50" /></a></li>';
	  
	}
	$sy->assign('htmlImgsG', $htmlImgsG);
	$sy->assign('htmlImgsP', $htmlImgsP);
	
  }
}
$sy->display('verAnuncio.tpl');
?>