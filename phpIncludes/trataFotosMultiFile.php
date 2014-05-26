<?php 
class Proporcional{
  //PROPIEDADES
  var $TipMime = array("image/jpeg","image/pjpeg","image/gif","image/x-png");
  var $maxSizeG=419;
  var $maxSizeT=100;
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
  var $cuadW;
  var $cuadH;
  var $marcoC; 
  var $ext;
  var $restx; 
  var $resty;
  var $logo;
  //POR DEFECTO THUMB, SE LE PEUDE PEDIR EL THUMBNAIL Y GRANDE, EL THUMB GRANDE Y CUADRDADA, Y LA ORIGINAL **SI LA FOTO QUE LE PASAMOS ES MEDIANTE UN CAMPO DE ARXIVO, EL PARAMETRO ARXIVO A TRU Y SI ESTA EN UN DIRECTORIO A FALSE************************************
  public function escalar($original,$u,$destino,$cantidad=1, $orig=false, $arxivo=true){
	if($cantidad==1){
	  $dos=false;
	  $tres=false;
	}elseif($cantidad==2){
	  $dos=true;
	}elseif($cantidad==3){
	  $dos=true;
	  $tres=true;
	}else{
	  $this->resultado['bien']=false;
	  return $this->resultado;
	}
	if($arxivo){
      $this->origen=$_FILES[$original]['tmp_name'][$u];
	  $this->gIS=getimagesize($this->origen);
	  $this->mime=$_FILES[$original]['type'][$u];
	}else{
	  $this->origen=$original;
	  $this->gIS=getimagesize($this->origen);
	  $this->mime=$this->gIS['mime'];
	}
	// ACEPTAMOS IMAGEN
	if(in_array($this->mime, $this->TipMime)){
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
	
	
	    $this->marco=imagecreatetruecolor($this->gIS[0],$this->gIS[1]);
	    imagecopyresampled($this->marco,$this->iVirtual,0,0,0,0,$this->gIS[0],$this->gIS[1], $this->gIS[0], $this->gIS[1]);
		$this->logo = imagecreatefrompng('recursos/logo.png'); 
		imagecopy($this->marco,$this->logo,($this->gIS[0]/2)-(349/2),($this->gIS[1]/2)-(25/2),0,0,349,25); 
		imagedestroy($this->iVirtual);
		
		
	  switch($this->mime){
		case $this->TipMime[0]:
			imagejpeg($this->marco, $destino);
			break;
		case $this->TipMime[1]:
			imagejpeg($this->marco, $destino);
			break;
		case $this->TipMime[2]:
			imagegif($this->marco, $destino);
			break;
		case $this->TipMime[3]:
			imagegif($this->marco, $destino);
			break;
	}
	imagedestroy($this->marco);
	return $this->resultado;
	}else{
	  @unlink($this->origen);
	  $this->resultado['bien']=false;
	  return $this->resultado;
	}
  }
  //ESCALA SOLO UNA********************************************* THUMB*******************
  public function escalaUna($original,$destino){
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
		$this->thumbH = round(($this->gIS[1]/$this->gIS[0])*$this->maxSizeG);
		$this->thumbW = $this->maxSizeG;
			 
	  }elseif($this->gIS[0]<$this->gIS[1]){
	    //VERICAL
		$this->thumbW =round(($this->gIS[0]/$this->gIS[1])*$this->maxSizeG);	 	
		$this->thumbH=$this->maxSizeG;
	  }else{
	    //CUADRADA
		$this->thumbW =$this->maxSizeG;
		$this->thumbH=$this->maxSizeG;
	  }
	  
	  $this->marcoT=imagecreatetruecolor($this->thumbW,$this->thumbH);
	  imagecopyresampled($this->marcoT,$this->iVirtual,0,0,0,0,$this->thumbW,$this->thumbH, $this->gIS[0], $this->gIS[1]);
	  imagedestroy($this->iVirtual);
	  $this->nombre=substr(md5(time().rand(99999,99999)),0,20);
	  $this->resultado['bien']=true;
	  switch($this->mime){
		case $this->TipMime[0]:
			imagejpeg($this->marcoT, $destino.'T_'.$this->nombre.'.jpg');
			$this->resultado['thumb']=$destino.'T_'.$this->nombre.'.jpg';
			break;
		case $this->TipMime[1]:
			imagejpeg($this->marcoT, $destino.'T_'.$this->nombre.'.jpg');
			$this->resultado['thumb']=$destino.'T_'.$this->nombre.'.jpg';
			break;
		case $this->TipMime[2]:
			imagegif($this->marcoT, $destino.'T_'.$this->nombre.'.gif');
			$this->resultado['thumb']=$destino.'T_'.$this->nombre.'.gif';
			break;
		case $this->TipMime[3]:
			imagegif($this->marcoT, $destino.'T_'.$this->nombre.'.png');
			$this->resultado['thumb']=$destino.'T_'.$this->nombre.'.png';
			break;
	}
	imagedestroy($this->marcoT);
	@unlink($this->origen);
	return $this->resultado;
	}else{
	  @unlink($this->origen);
	  $this->resultado['bien']=false;
	  return $this->resultado;
	}
  }
//RECORTA IMAGEN Y LLAMA A LA FUNCION ESCALAR PARA SACAR LAS FOTOS Q LE PIDAMOS///////////////////////////////////////////
//POR DEFECTO SOLO RECOR, para indicar q escale poner escala a true
  public function recortar2 ($original, $x1, $y1, $x2, $y2, $w, $h){
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
	imagejpeg($this->marcoT, $original);
	$this->resultado[1]=$original;
	imagedestroy($this->marcoT);
	return $this->resultado;
  }
   public function recortar ($original, $x1, $y1, $x2, $y2, $w, $h){
    $this->origen=$original;
	$this->gIS=getimagesize($this->origen);
	$this->mime=$this->gIS[2];
	  switch($this->mime){
		case 2:
			$this->iVirtual = imagecreatefromjpeg($this->origen);
			$this->ext='jpg';
			break;
		case 1:
			$this->iVirtual = imagecreatefromgif($this->origen);
			$this->ext='gif';
			break;
		case 3:
			$this->iVirtual = imagecreatefrompng($this->origen);
			$this->ext='png';
			break;
	}//SWICH 
	$this->marcoT=imagecreatetruecolor($w,$h);
	imagecopy($this->marcoT,$this->iVirtual,0,0,$x1,$y1,$w,$h);
	
	$this->nombre=md5(time().rand(99999,99999));
	$this->resultado[0]=true;
	imagedestroy($this->iVirtual);
	imagejpeg($this->marcoT, 'images/fotos/visitantes/TMP.'.$this->ext);
	//imagejpeg($this->marcoT, $original);
	$this->resultado[1]=$original;
	imagedestroy($this->marcoT);
	return $this->resultado;
  
  }
}
?>