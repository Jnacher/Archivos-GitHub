<?php
require_once('phpIncludes/config.php');
$catAct=(isset($_GET['cat']))?$_GET['cat']:'1';
if($catAct==7){$catAct=1; $_GET['cat']=1;}
//COMBOBOX CATEGORIAS
$htmlCats=$sel='';
$sqlCats="select * from categorias";
if($resCats=$db->GetAll($sqlCats)){
  foreach($resCats as $reCat){
    if($catAct==$reCat['categoriaId']){
	  $sel="selected='selected'";
	}
	$htmlCats.='<option value="'.$reCat['categoriaId'].'" '.$sel.'>'.$reCat['nomCategoria'].'</option>';
	$sel='';
  }
}
$sy->assign('htmlCats', $htmlCats);//echo $htmlCats;

$cat_=sanitize($catAct ,INT);
  //$db->debug=true;
  $selectRazas='<option value="0">Selecciona Raza</option>';
  $sqlComProv="select nombre, razaId from razas where idCategoria='".$cat_."'";
	  $res=$db->GetAll($sqlComProv);
	  if(sizeof($res)>0){
	   foreach($res as $re){
		$selectRazas.='<option value="'.$re['razaId'].'">'.utf8_encode($re['nombre']).'</option>';
	   }
	  }
	  $sy->assign('selectRazas', $selectRazas);//echo $htmlCats;
	  
  


//COMOBOX RAZAS
$razaAct=(isset($_POST['raza']))?$_POST['raza']:'';
$sqlRazas="select * from razasinfo where idCategoria=".$catAct;
$htmlRazas='';
if($reRazas=$db->GetAll($sqlRazas)){
  foreach($reRazas as $reRaza){
	if($reRaza['razaId']==$razaAct){
	  $sel="selected='selected'";
	}
    $htmlRazas.='<option value="'.$reRaza['razaId'].'" '.$sel.'>'.utf8_encode($reRaza['nombre']).'</option>';
	$sel='';
  }
}
$sy->assign('htmlRazas', $htmlRazas);

/////////////////SACAR RAZAS ///////////////////////////////

$abc=array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$cat=1;
if(isset($_GET['cat']))$cat=sanitize($_GET['cat'], INT);
$nomCats=array(1=>'Perros', 2=>'Gatos', 3=>'Caballos', 4=>'Peces', 5=>'Pajaros', 6=>'Conejos');
////////////////////////////////////////////////////////////
$htmlRazasABC='';
$tamano=array('p'=>'Pequeño', 'm'=>'Mediano', 'g'=>'Grande');
foreach($abc as $_abc){
	$sqlRazas="select * from razasinfo where nombre LIKE '".$_abc."%' and idCategoria=".$cat;
	if($resRazas=$db->GetAll($sqlRazas)){
		$htmlRazasABC.='<div class="separador" id="'.$_abc.'"> Razas de '.$nomCats[$cat].' con la '.strtoupper($_abc).'</div>
	   ';
		foreach($resRazas as $reOf){
			    $tamanoTxt=($reOf['tamanyo']!='')?$tamano[$reOf['tamanyo']]:'';
				$htmlRazasABC.='<div class="cuadro"><div class="imagen">
				<a href="verRaza.php?razaId='.$reOf['razaId'].'">
				<img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
				<div class="linkRaza">'.utf8_encode($reOf['nombre']).'</a></div>
				<div class="textoRaza"><b>Tamaño:</b> '.($tamanoTxt).'</div>
				<div class="textoRaza"><b>Peso:</b> '.utf8_encode($reOf['peso']).'</div>
				<div class="textoRaza"><b>Origen:</b>'.utf8_encode($reOf['pais']).'</div>
				</div>';
		
		}
		$htmlRazasABC.='<a name="b"></a>
	<div class="separador"><a href="#Arriba"><img src="recursos/formularios/round_up_arrow_32x32.png" width="20" height="20" alt="arriba" /></a></div>';
	}
}
$sy->assign('htmlRazasABC', $htmlRazasABC);
////////////////////////////////////////////////////////////
/*$letra=B;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaB='';
  foreach($resRazas as $reOf){
	  $htmlRazaB.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.utf8_encode($reOf['tamanyo']).'</div>
        <div class="textoRaza"><b>Peso:</b> '.utf8_encode($reOf['peso']).'</div>
        <div class="textoRaza"><b>Origen:</b>'.utf8_encode($reOf['pais']).'</div>
		</div>';
        
  }

$sy->assign('htmlRazaB', $htmlRazaB);
////////////////////////////////////////////////////////////
$letra=C;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaC='';
  foreach($resRazas as $reOf){
	  $htmlRazaC.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.utf8_encode($reOf['tamanyo']).'</div>
        <div class="textoRaza"><b>Peso:</b> '.utf8_encode($reOf['peso']).'</div>
        <div class="textoRaza"><b>Origen:</b>'.utf8_encode($reOf['pais']).'</div>
		</div>';
        
  }

$sy->assign('htmlRazaC', $htmlRazaC);
////////////////////////////////////////////////////////////
$letra=D;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaD='';
  foreach($resRazas as $reOf){
	  $htmlRazaD.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.utf8_encode($reOf['tamanyo']).'</div>
        <div class="textoRaza"><b>Peso:</b> '.utf8_encode($reOf['peso']).'</div>
        <div class="textoRaza"><b>Origen:</b>'.utf8_encode($reOf['pais']).'</div>
		</div>';
        
  }

$sy->assign('htmlRazaD', $htmlRazaD);
////////////////////////////////////////////////////////////
$letra=E;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaE='';
  foreach($resRazas as $reOf){
	  $htmlRazaE.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.utf8_encode($reOf['tamanyo']).'</div>
        <div class="textoRaza"><b>Peso:</b> '.utf8_encode($reOf['peso']).'</div>
        <div class="textoRaza"><b>Origen:</b>'.utf8_encode($reOf['pais']).'</div>
		</div>';
        
  }

$sy->assign('htmlRazaE', $htmlRazaE);

////////////////////////////////////////////////////////////
$letra=F;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaF='';
  foreach($resRazas as $reOf){
	  $htmlRazaF.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.utf8_encode($reOf['tamanyo']).'</div>
        <div class="textoRaza"><b>Peso:</b> '.utf8_encode($reOf['peso']).'</div>
        <div class="textoRaza"><b>Origen:</b>'.utf8_encode($reOf['pais']).'</div>
		</div>';
        
  }

$sy->assign('htmlRazaF', $htmlRazaF);
////////////////////////////////////////////////////////////
$letra=G;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaG='';
  foreach($resRazas as $reOf){
	  $htmlRazaG.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.utf8_encode($reOf['tamanyo']).'</div>
        <div class="textoRaza"><b>Peso:</b> '.utf8_encode($reOf['peso']).'</div>
        <div class="textoRaza"><b>Origen:</b>'.utf8_encode($reOf['pais']).'</div>
		</div>';
        
  }

$sy->assign('htmlRazaG', $htmlRazaG);
////////////////////////////////////////////////////////////
$letra=H;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaH='';
  foreach($resRazas as $reOf){
	  $htmlRazaH.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.utf8_encode($reOf['tamanyo']).'</div>
        <div class="textoRaza"><b>Peso:</b> '.utf8_encode($reOf['peso']).'</div>
        <div class="textoRaza"><b>Origen:</b>'.utf8_encode($reOf['pais']).'</div>
		</div>';
        
  }

$sy->assign('htmlRazaH', $htmlRazaH);
////////////////////////////////////////////////////////////
$letra=I;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaI='';
  foreach($resRazas as $reOf){
	  $htmlRazaI.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaI', $htmlRazaI);
////////////////////////////////////////////////////////////
$letra=J;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaJ='';
  foreach($resRazas as $reOf){
	  $htmlRazaJ.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaJ', $htmlRazaJ);
////////////////////////////////////////////////////////////
$letra=K;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaK='';
  foreach($resRazas as $reOf){
	  $htmlRazaK.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaK', $htmlRazaK);
////////////////////////////////////////////////////////////
$letra=L;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaL='';
  foreach($resRazas as $reOf){
	  $htmlRazaL.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaL', $htmlRazaL);
////////////////////////////////////////////////////////////
$letra=M;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaM='';
  foreach($resRazas as $reOf){
	  $htmlRazaM.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaM', $htmlRazaM);
////////////////////////////////////////////////////////////
$letra=N;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaN='';
  foreach($resRazas as $reOf){
	  $htmlRazaN.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaN', $htmlRazaN);
////////////////////////////////////////////////////////////
$letra=O;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaO='';
  foreach($resRazas as $reOf){
	  $htmlRazaO.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaO', $htmlRazaO);
////////////////////////////////////////////////////////////
$letra=P;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaP='';
  foreach($resRazas as $reOf){
	  $htmlRazaP.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaP', $htmlRazaP);
////////////////////////////////////////////////////////////
$letra=R;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaR='';
  foreach($resRazas as $reOf){
	  $htmlRazaR.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaR', $htmlRazaR);
////////////////////////////////////////////////////////////
$letra=S;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaS='';
  foreach($resRazas as $reOf){
	  $htmlRazaS.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaS', $htmlRazaS);
////////////////////////////////////////////////////////////
$letra=T;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaT='';
  foreach($resRazas as $reOf){
	  $htmlRazaT.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaT', $htmlRazaT);
////////////////////////////////////////////////////////////
$letra=V;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaV='';
  foreach($resRazas as $reOf){
	  $htmlRazaV.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaV', $htmlRazaV);
////////////////////////////////////////////////////////////
$letra=W;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaW='';
  foreach($resRazas as $reOf){
	  $htmlRazaW.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.utf8_decode($reOf['tamanyo']).'</div>
        <div class="textoRaza"><b>Peso:</b> '.utf8_decode($reOf['peso']).'</div>
        <div class="textoRaza"><b>Origen:</b>'.utf8_encode($reOf['pais']).'</div>
		</div>';
        
  }

$sy->assign('htmlRazaW', $htmlRazaW);
////////////////////////////////////////////////////////////
$letra=X;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaY='';
  foreach($resRazas as $reOf){
	  $htmlRazaX.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaX', $htmlRazaX);

////////////////////////////////////////////////////////////
$letra=Y;
$sqlRazas="select * from razasinfo where nombre LIKE '".$letra."%' and idCategoria=1";
$resRazas=$db->GetAll($sqlRazas);
$htmlRazaY='';
  foreach($resRazas as $reOf){
	  $htmlRazaY.='
	  	<div class="cuadro">
        <div class="imagen"><img src="images/imagenesRaza/'.$reOf['rutaImagenRaza'].'" width="120" height="120" /></div>
        <div class="linkRaza"><a href="verRaza.php">'.utf8_encode($reOf['nombre']).'</a></div>
        <div class="textoRaza"><b>Tamaño:</b> '.$reOf['tamanyo'].'</div>
        <div class="textoRaza"><b>Peso:</b> '.$reOf['peso'].'</div>
        <div class="textoRaza"><b>Origen:</b>'.$reOf['pais'].'</div>
		</div>';
        
  }

$sy->assign('htmlRazaY', $htmlRazaY);
*/

$sy->display('razas.tpl');
?>