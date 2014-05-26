<?php 
class ClaseValida{
/*
.....INDICE.................................................INDICE..............................
MIXER noVacio BOOLEANO
NUMEROS valTelf BOLEANO
NUMBER valTelFijo BOOLEANO
NUMEROS valTelMovil BOLEANO
MIXER valDni BOOLEANO
MIXER valNie BOLEANO
MIXER valDNINIE BOLEANO
MIXER valCif BOLEANO
MIXER valMatriVieja BOLEANO
MIXER valMatriNueva BOLEANO
NUMEROS valMatricula BOLEANO
MIXER valMimeImg BOOLEANO
MIXER valMimeTxt BOLEANO
MIXER valMimeAudio BOLEANO
MIXER valMimeVideo BOLEANO
MIXER valMimeAplicaciones BOLEANO
MIXER valNombreEmpresa BOLEANO
TEXTO valNombrePersona BOLEANO
TEXTO valNik BOLEANO
NUMBER valCodigoPostal BOLEANO
MIXER valEmail BOLEANO
MIXER valDomicilio  BOOL// TB valida titulo
MIXER valRegistroAsociacion BOOL
MIXER valAreaTexto BOOL
MIXER valLatLong BOOL
MIXER valPass BOOL
NUMBER valEdadAnimal BOOL
STRING valUrl BOOL
STRING valTags BOOL
STRING valTitulo BOOL

*/
//PROPIEDADES................................................PROPIEDADES.....................
var $dato;
var $cp;
var $tipMimeImg=array('image/png','image/x-png','image/jpeg','image/gif','image/wmp','image/pjpeg','image/tiff','image/x-windows-bmp','image/bmp','image/cmu-raster','image/florian','image/g3fax','image/ief','image/jutvision','image/naplps','image/pict','image/vnd.dwg','image/vnd.wap.wbmp','image/x-tiff');

var $tipMimeTxt=array('text/txt','text/rtf','text/doc','text/plain');
var $tipMimeAudio=array('audio/x-ms-wma,audio/aiff ,audio/basic ,audio/it ,audio/make ,audio/make ,audio/mid ,audio/mod ,audio/mpeg ,audio/mpeg3 ,audio/nspaudio,audio/x-pn-realaudio,audio/x-wav,audio/wav');
var $tipMimeAplicaciones=array('application/zip,application/x-zip-compressed,application/x-javascript,application/x-excel,application/octet-stream');
var $tipMimeVideo=array('video/mpeg,video/avi,video/avs-video,video/quicktime,video/x-mpeg,video/x-msvideo');
/*
METODOS.......................................METODOS.......................................
*/
function noVacio($campo){
  $this->dato=trim($campo);
  if(mb_strlen($this->dato)!=0){
    return true;
  }else{
    return false;
  }
}
function valTelFijo($campo){
  return mb_eregi('^(96)[0-9]{7}$',$campo);
}
function valTelMovil($campo){
  return mb_eregi('^(6)[0-9]{8}$',$campo);
}
function valTelefono($campo){
  if($this->valTelFijo($campo)){
    return true;
  }else if($this->valTelMovil($campo)){
    return true;
  }else{
    return false;
  }
}
function valDni($campo){
 return mb_eregi('^[0-9]{8}[a-z]$',$campo);
}
function valNie($campo){
  return mb_eregi('^(x|y|z)[0-9]{7}(a-z)$',$campo);
}
function valCif($campo){
  return mb_eregi('^[a-hj-np-sv-w]{1}[0-9]{8}$',$campo);
}
function valDniNieCif($campo){
  if($this->valDni($campo)){
    return true;
  }else if ($this->valNie($campo)){
    return true;
  } else if($this->valCif($campo)){
    return true;
  } else{
    return false;
  }
}
function valMatriculaVieja($campo){
  return mb_eregi('^[a-z]{2}\-[0-9]{4}\-[a-z]{2}$',$campo);
}

function valMatriculaNueva($campo){
  return mb_eregi('^[0-9]{4}\-[b-df-hj-lpr-tv-z]{3}$',$campo);
}

function valMatricula($campo){
  if($this->valMatriculaVieja($campo)){
    return true;
  }else if ($this->valMatriculaNueva($campo)){
  return true;
  } else{
  return false;
  }
}
function valMimeImg($datos){
	return in_array($datos,$this->tipMimeImg);//($datos='image/pjpeg')
}
function valMimeTxt($datos){
	return in_array($datos,$this->tipMimeTxt);
}
function valMimeAudio($datos){
	return in_array($datos,$this->tipMimeAudio);
}
function valMimeVideo($datos){
	return in_array($datos,$this->tipMimeVideo);
}
function valMimeAplicaciones($datos){
	return in_array($datos,$this->tipMimeAplicaciones);
}
function valNombreEmpresa($campo){
	return mb_eregi('^[a-z0-9ñÑ ,\.]{3,25}$',$campo);
}
function valNombrePersona($campo){
  return eregi("[[:space:]á-úÁ-Úa-zA-ZñÑ]",$campo);
}
function valNik($campo){
  return mb_eregi('^[0-9ñÑa-z-_]{4,}$',$campo);
}
function valCodigoPostal($campo){
  if(strlen($campo>3)){
    return true;
  }else{
    return false;
  }
 /* if(mb_eregi('^[0-9]{5}$',$campo)){
    $this->cp=mb_substr($campo,0,2);
	if($this->cp>=1 && $this->cp<=99){
      return true;
	}else{
	  return false;
	}
  }*/
}
function valEmail($campo){
  return mb_ereg('^[0-9ñÑa-z-A-Z-_\.]{2,}@[ñÑa-zA-Z]{2,}\.[a-zA-Z]{2,4}(\.[a-zA-Z]{2,4})?$',$campo);
}
function valDomicilio($campo){
  return mb_eregi('^.{3,50}$',$campo);
}
function valPoblacion($campo){
    return mb_eregi('^[a-z\,\\`Ññ ]{4,50}$',$campo);
}
function valRegistroAsociacion($campo){
  return mb_eregi('^[0-9]{3}\.?[0-9]{3}$',$campo);
}
function valAreaTexto($campo){
  if(mb_strlen($campo)>10){
   return true;
  }else{
   return false;
  }
}
private function valLatitud($lat){
  if(mb_eregi('^[0-9]{2}\.[0-9]{4,15}$',$lat)){
    if ($lat>=27.5 && $lat<=43.5){
	  if ($lat<=35.3 && $lat>=29.4){
	    return false;
	  }
      return true;
    }else{
      return false;
    }
  }else{
    return false;
  }
}
private function valLongitud($long){
  if(mb_eregi('^\-?[0-9]{1,2}\.[0-9]{4,19}$',$long)){
    if ($long>=-18.2 && $long<=4.5){
	  if ($long<=-10 && $long>=-13.5){
	    return false;
	  }
      return true;
    }else{
      return false;
    }
  }else{
    return false;
  }
}
function valLatLong($lat,$long){
  if($this->valLatitud($lat) && $this->valLongitud($long)){
    if(($long<-7.5 && $long>-9.3) && ($lat<41 && $lat>36.5)){
	  return false;
	}else{
	  return true;
	}
  }else{
    return false;
  }
}
function valPass($campo){
  if (mb_eregi('^[^ ]{6,20}$',$campo)){
    return true;
  }else{
    return false;
  }
}
  function valEdadAnimal($campo){
    if(mb_eregi('^[0-9]{1,2}$',$campo)){
	  if($campo<=19){
	    return true;
	  }else{
	    return false;
	  }
	}
  }
  function valUrl($campo){
    return mb_eregi('^(http://)?(w){3}\.{1}\S+\.[a-z]{2,4}$',$campo);
  }
  
  function valTags($campo){
    return mb_eregi('^[a-z, ]{4,}$',$campo);
  }
  
   function valTitulo($campo){
    if (!eregi('^[a-z0-9áéíóúñ ]{3,100}$',$campo)){
	    return false;
	  }else{
	    return true;
	  }
  }
  
}
?>
