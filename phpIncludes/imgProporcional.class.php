<?php 
class Proporcional{
  //PROPIEDADES
  var $TipMime = array("image/jpeg","image/pjpeg","image/gif","image/png");
  var $maxSizeG=400;
  var $maxSizeT=120;
  var $origen;
  var $dest1;
  var $dest2;
  var $resultado=array();
  var $mime;
  var $fecha;
  var $gIS=array();
  var $iVirtual;
  var $thumbH;
  var $thumbW;
  var $thumbGW;
  var $thumbGH;
  var $fotoGW;
  var $fotoGH;
  var $marcoT;
  var $marcoG;
  var $nombre;
  //METODOS//hacer uno q escale 1solo otro metodoq escale y recorte y otra que llame a otras funciones para hacer mas cosas
  public function escalar($original,$destino1,$destino2,$destBD1,$destBD2,$dos=true){
    $this->origen=$_FILES[$original]['tmp_name'];
	$this->mime=$_FILES[$original]['type'];
	// ACEPTAMOS IMAGEN
	if(in_array($this->mime, $this->TipMime)){
	  $this->gIS=getimagesize($this->origen);
	  //IMAGEN VIRTUAL
	  switch($this->mime){
		case $this->TipMime[0]:
			$this->iVirtual = imagecreatefromjpeg($this->origen);
			break;
		case $this->TipMime[1]:
			$this->iVirtual = imagecreatefromjpeg($this->origen);
			break;
		case $this->TipMime[2]:
			$this->iVirtual = imagecreatefromgif($this->origen);
			break;
		case $this->TipMime[3]:
			$this->iVirtual = imagecreatefrompng($this->origen);
			break;
	}//SWICH
	  //HORIZONTAL O VERTICAL
	  if($this->gIS[0]>$this->gIS[1]){
	    //HORIZONTAL
		$this->thumbH = round(($this->gIS[1]/$this->gIS[0])*$this->maxSizeT);
		$this->thumbW = $this->maxSizeT;
		if($dos){
		  $this->fotoGW = $this->maxSizeG;
		  $this->fotoGH = round(($this->gIS[1]/$this->gIS[0])*$this->maxSizeG);
		}
			 
	  }elseif($this->gIS[0]<$this->gIS[1]){
	    //VERICAL
		$this->thumbW =round(($this->gIS[0]/$this->gIS[1])*$this->maxSizeT);	 	
		$this->thumbH=$this->maxSizeT;
		if($dos){
		  $this->fotoGW =round(($this->gIS[0]/$this->gIS[1])*$this->maxSizeG);	 	
		  $this->fotoGH=$this->maxSizeG;
		}
	  }else{
	    //CUADRADA
		$this->thumbW =$this->maxSizeT;
		$this->thumbH=$this->maxSizeT;
		if($dos){
		  $this->fotoGW =$this->maxSizeG;
		  $this->fotoGH=$this->maxSizeG;
		}
	  }
	  
	  $this->marcoT=imagecreatetruecolor($this->thumbW,$this->thumbH);
	  imagecopyresampled($this->marcoT,$this->iVirtual,0,0,0,0,$this->thumbW,$this->thumbH, $this->gIS[0], $this->gIS[1]);
	  if($dos){
	    $this->marcoG=imagecreatetruecolor($this->fotoGW,$this->fotoGH);
	    imagecopyresampled($this->marcoG,$this->iVirtual,0,0,0,0,$this->fotoGW,$this->fotoGH, $this->gIS[0], $this->gIS[1]);
	  }
	  imagedestroy($this->iVirtual);
	  $this->nombre=md5(time().rand(99999,99999));
	  $this->resultado[0]=true;
	  switch($this->mime){
		case $this->TipMime[0]:
			imagejpeg($this->marcoT, $destino1.'T-'.$this->nombre.'.jpg');
			$this->resultado[1]=$destBD1.'T-'.$this->nombre.'.jpg';
			if($dos){
			  imagejpeg($this->marcoG, $destino2.$this->nombre.'.jpg');
			  $this->resultado[2]=$destBD2.$this->nombre.'.jpg';
			}
			break;
		case $this->TipMime[1]:
			imagejpeg($this->marcoT, $destino1.'T-'.$this->nombre.'.jpg');
			$this->resultado[1]=$destBD1.'T-'.$this->nombre.'.jpg';
			if($dos){
			  imagejpeg($this->marcoG, $destino2.$this->nombre.'.jpg');
			  $this->resultado[2]=$destBD2.$this->nombre.'.jpg';
			}
			break;
		case $this->TipMime[2]:
			imagegif($this->marcoT, $destino1.'T-'.$this->nombre.'.gif');
			$this->resultado[1]=$destBD1.'T-'.$this->nombre.'.gif';
			if($dos){
			  imagegif($this->marcoG, $destino2.$this->nombre.'.gif');
			  $this->resultado[2]=$destBD2.$this->nombre.'.gif';
			}
			break;
		case $this->TipMime[3]:
			imagegif($this->marcoT, $destino1.'T-'.$this->nombre.'.png');
			$this->resultado[1]=$destBD1.'T-'.$this->nombre.'.png';
			if($dos){
			  imagegif($this->marcoG, $destino2.$this->nombre.'.png');
			  $this->resultado[2]=$destBD2.$this->nombre.'.png';
			}
			break;
	}
	imagedestroy($this->marcoT);
	if($dos){
	  imagedestroy($this->marcoG);
	}
	@unlink($this->origen);
	return $this->resultado;
	}else{
	  @unlink($this->origen);
	  $this->resultado[0]=false;
	  return $this->resultado;
	}
  }
  public function escalaUna($original,$destino1,$destino2,$destBD1,$destBD2){
    $this->origen=$_FILES[$original]['tmp_name'];
	$this->mime=$_FILES[$original]['type'];
	// ACEPTAMOS IMAGEN
	if(in_array($this->mime, $this->TipMime)){
	  $this->gIS=getimagesize($this->origen);
	  //IMAGEN VIRTUAL
	  switch($this->mime){
		case $this->TipMime[0]:
			$this->iVirtual = imagecreatefromjpeg($this->origen);
			break;
		case $this->TipMime[1]:
			$this->iVirtual = imagecreatefromjpeg($this->origen);
			break;
		case $this->TipMime[2]:
			$this->iVirtual = imagecreatefromgif($this->origen);
			break;
		case $this->TipMime[3]:
			$this->iVirtual = imagecreatefrompng($this->origen);
			break;
	}//SWICH
	  //HORIZONTAL O VERTICAL
	  if($this->gIS[0]>$this->gIS[1]){
	    //HORIZONTAL
		$this->thumbH = round(($this->gIS[1]/$this->gIS[0])*$this->maxSizeT);
		$this->thumbW = $this->maxSizeT;
			 
	  }elseif($this->gIS[0]<$this->gIS[1]){
	    //VERICAL
		$this->thumbW =round(($this->gIS[0]/$this->gIS[1])*$this->maxSizeT);	 	
		$this->thumbH=$this->maxSizeT;
	  }else{
	    //CUADRADA
		$this->thumbW =$this->maxSizeT;
		$this->thumbH=$this->maxSizeT;
	  }
	  
	  $this->marcoT=imagecreatetruecolor($this->thumbW,$this->thumbH);
	  imagecopyresampled($this->marcoT,$this->iVirtual,0,0,0,0,$this->thumbW,$this->thumbH, $this->gIS[0], $this->gIS[1]);
	  imagedestroy($this->iVirtual);
	  $this->nombre=md5(time().rand(99999,99999));
	  $this->resultado[0]=true;
	  switch($this->mime){
		case $this->TipMime[0]:
			imagejpeg($this->marcoT, $destino1.'T-'.$this->nombre.'.jpg');
			$this->resultado[1]=$destBD1.'T-'.$this->nombre.'.jpg';
			break;
		case $this->TipMime[1]:
			imagejpeg($this->marcoT, $destino1.'T-'.$this->nombre.'.jpg');
			$this->resultado[1]=$destBD1.'T-'.$this->nombre.'.jpg';
			break;
		case $this->TipMime[2]:
			imagegif($this->marcoT, $destino1.'T-'.$this->nombre.'.gif');
			$this->resultado[1]=$destBD1.'T-'.$this->nombre.'.gif';
			break;
		case $this->TipMime[3]:
			imagegif($this->marcoT, $destino1.'T-'.$this->nombre.'.png');
			$this->resultado[1]=$destBD1.'T-'.$this->nombre.'.png';
			break;
	}
	imagedestroy($this->marcoT);
	@unlink($this->origen);
	return $this->resultado;
	}else{
	  @unlink($this->origen);
	  $this->resultado[0]=false;
	  return $this->resultado;
	}
  }
  public function recortar ($original, $destino, $x1, $y1, $x2, $y2, $w, $h){//echo $original.' - '.$destino.' - '.$x1.' - '.$y1.' - '.$x2.' - '.$y2.' - '.$w.' - '.$h;
    $this->origen=$original;//$_FILES[$original]['tmp_name'];
	$this->gIS=getimagesize($this->origen);
	$this->mime=$this->gIS[2];
	  switch($this->mime){
		case 2:
			$this->iVirtual = imagecreatefromjpeg($this->origen);
			break;
		case 1:
			$this->iVirtual = imagecreatefromgif($this->origen);
			break;
		case 3:
			$this->iVirtual = imagecreatefrompng($this->origen);
			break;
	}//SWICH 
	$this->marcoT=imagecreatetruecolor($w,$h);
	imagecopyresampled($this->marcoT,$this->iVirtual,0,0,$x1,$y1,$x2,$y2,imagesx($this->iVirtual),imagesy($this->iVirtual));
	imagedestroy($this->iVirtual);
	$this->resultado[0]=true;
	imagejpeg($this->marcoT, $destino);
	$this->resultado[1]=$destino;
	imagedestroy($this->marcoT);
	//@unlink($this->origen);
	return $this->resultado;
  }
}
?>