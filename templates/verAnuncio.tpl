<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anuncio</title>
<meta name="descripción" 	content="Anuncios de mascotas, animales, perros, gatos, caballos, peces, conejos...">
<meta name="palabras clave" content="anuncios, mascotas gratis, dar perro, comportamiento animal, animales">
<meta name="keywords" 		content="anuncia mascotas, anunciamascotas, anuncia perros"/>

<link href="css.css" rel="stylesheet" type="text/css" />
<link href="../css.css" rel="stylesheet" type="text/css" />


<link type='text/css' href='css/modal/basic.css' rel='stylesheet' media='screen' />
 <link type='text/css' href='../css/modal/basic.css' rel='stylesheet' media='screen' /> 
 
{literal}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type='text/javascript' src='jQuery/jquery.simplemodal.js'></script>

<script type="text/javascript">
$(document).ready(function(){
						   
	//prepend span tag
	$(".jquery h1").prepend("<span></span>");
	
	$('.contactarPoP').click(function (e) {
		$('#contactar-popUp').modal();
		return false;
	});
	$('.compartirPoP').click(function (e) {
		$('#compartir-popUp').modal();
		return false;
	});
	$('.enviarPoP').click(function (e) {
		$('#enviar-popUp').modal();
		$('#enviarAmigo').val($(this).attr('rel'));
		return false;
	});
	$('.denunciarPoP').click(function (e) {
		$('#denunciar-popUp').modal();
		$('#denunciar').val($(this).attr('rel'));
		return false;
	});
								  
});
</script>

<!--[if lt IE 7]>
<style>
.gradient-ie h1 span {
    background: none;
    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/gradient-white.png', sizingMethod='scale');
}
</style>
<![endif]-->

<style type="text/css">
.datosProtec{
	font-size: 12px;
	color: #333;
	margin: 10px;
	width: 280px;
}
.errores {
	font-family: Petita, Arial, Helvetica, sans-serif;
	position: relative;
	background: #88b7d5;
	border: 2px solid #c2e1f5;
	width: 200px;
	text-align: center;
	
	font-size: 12px;
	font-weight: 700;
	color: #FFF;
	padding: 5px;
	display:none;	
} 
.errores:after, .error:before {
	bottom: 100%; 
	border: solid transparent; 
	content: " "; 
	height: 0px; 
	width: 0; 
	position: absolute; 
	pointer-events: none; 
} 
.errores:after {
		border-bottom-color: #88b7d5; 
		border-width: 5px; 
		left: 10%; 
		margin-left: -5px; 
} 
.errores:before {
	border-bottom-color: #c2e1f5; 
	border-width: 8px; 
	left: 10%; 
	margin-left: -8px; 
}
.verAnuncioDerecha {
	width:280px;
	float:left;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
}
.verAnuncioIzquierda .visualizacion .busquedasRela {

	width: 600px;
	float:left;
	min-height:110px;
}
.verAnuncioIzquierda .visualizacion .busquedasRela span {
	font-size: 12px;
	color: #CCC;
	margin: 20px;
	float:left;
	width: 600px;
}
.verAnuncioIzquierda .visualizacion .busquedasRela a {
	font-size: 12px;
	color: #999;
	text-decoration: none;
	margin: 20px;
	display: inline;
}
.verAnuncioIzquierda .visualizacion .busquedasRela a:hover {
	font-size: 12px;
	color: #69C;
	margin: 20px;
}
.verAnuncioIzquierda .visualizacion .busquedasRela a:visit {
	font-size: 14px;
	color: #06C;
	margin: 20px;
}
.verAnuncioIzquierda {
	float: left;
	width: 600px;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
}
.verAnuncioIzquierda .visualizacion .anunciosDescrip p {
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: lighter;
	color: #999;
	text-align: left;
}

.verAnuncioIzquierda .visualizacion .anunciosMenuB {
	width: 580px;
	float: left;
}
.verAnuncioIzquierda .visualizacion .anunciosMenuB .anunciosMenuBIzquierda {
	width: 300px;
	float: left;
	font-size: 14px;
	font-weight: lighter;
	color: #333;
	
}
.verAnuncioIzquierda .visualizacion .anunciosMenuB .anunciosMenuBIzquierda span {
margin-bottom:10px; width:300px; height:30px; float:left;
	
}

.verAnuncioIzquierda .visualizacion .anunciosMenuB .anunciosMenuBDerecha {
	width: 280px;
	float: left;
	font-size: 14px;
	font-weight: lighter;
	color: #333;
}
.verAnuncioIzquierda .visualizacion .anunciosTitulo {
	font-size: 20px;
	width: 580px;
	padding: 10px;
	float: left;
	text-align: center;
}
.verAnuncioIzquierda .visualizacion .anunciosCiudad {
	float: left;
	width: 370px;
	color:#CCC;
	text-align: left;
}
.verAnuncioIzquierda .visualizacion .anunciosPrecio {
	font-size: 18px;
	padding:10px;
	float: left;
	color: #FF4000;
}
.verAnuncioIzquierda .visualizacion .anunciosRaza {
	float: left;
	width: 600px;
	color:#CCC;
	text-align: left;
}
.verAnuncioIzquierda .visualizacion .anunciosFecha {
	float: left;
	width: 200px;
	color:#CCC;
	text-align: right;
}
.verAnuncioIzquierda .visualizacion {
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
	background-color:#FFFFFF;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	font-family: Petita, Arial, Helvetica, sans-serif;
	padding: 10px;
	width:580px;
	font-size: 12px;
	color: #069;
	font-weight: bold;
	min-height:450px;
}
.verAnuncioDerecha .contactoPrincipal {
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
	background-color:#FFFFFF;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	font-family: Petita, Arial, Helvetica, sans-serif;
	padding: 10px;
	width:280px;
	font-size: 12px;
	color: #069;
	font-weight: bold;
	min-height:450px;
}
.verAnuncioDerecha .contactoPrincipal .llamar {
	font-size: 14px;
	font-weight: bold;
	color: #999;
	padding-top: 15px;
	padding-right: 10px;
	padding-bottom: 30px;
	padding-left: 10px;
	text-align:center;
	width: 280px;
	height: 50px;
}
.verAnuncioDerecha .contactoPrincipal .llamar img {
	padding-top:10px;
	float: left;
	padding-left: 30px;
}
.verAnuncioDerecha .contactoPrincipal .llamar span {
	font-size: 18px;
	float: left;
	padding-top: 17px;
	padding-left: 20px;
	color:#666666;
}
.verAnuncioDerecha .contactoPrincipal input[type='text'], .contacto textarea{
    padding: 7px 6px;
    width: 260px; /* una longitud definida */
    border: 1px solid #CED5D7;
    resize: none; /* esta propiedad es para que el textarea no sea redimensionable */
    box-shadow:0 0 0 3px #EEF5F7;
    margin: 5px 0;
	color:#666;
}
.verAnuncioDerecha .contactoPrincipal input[type='text']:focus, .contacto textarea:focus{
    outline: none; /* reset especifico para Chrome/Safari */
    box-shadow:0 0 0 3px #dde9ec;
}
.verAnuncioDerecha .contactoPrincipal input[type='submit']{
	font-family: sans-serif;
	font-size: 12px;
	color: #798e94;
	border: 1px solid #CED5D7;
	box-shadow:0 0 0 3px #EEF5F7;
	border-radius: 20px;
	font-weight: bold;
	text-shadow: 1px 1px 0px white;
	background: #e4f1f6; /* fallback para navegadores que no soporten degradados */
	background: -moz-linear-gradient(top, #e4f1f6 0%, #cfe6ef 100%);
	background: -webkit-linear-gradient(top, #e4f1f6 0%,#cfe6ef 100%);
	cursor:pointer;
	margin-left: 160px;
	padding-top: 8px;
	padding-right: 16px;
	padding-bottom: 8px;
	padding-left: 16px;
}
.verAnuncioDerecha .contactoPrincipal input[type='submit']:hover{
    background: #edfcff;
    background: -moz-linear-gradient(top, #edfcff 0%, #cfe6ef 100%);
    background: -webkit-linear-gradient(top, #edfcff 0%,#cfe6ef 100%);
}
.verAnuncioDerecha .contactoPrincipal input[type='submit']:active{
    background: #cfe6ef;
    background: -moz-linear-gradient(top, #cfe6ef 0%, #edfcff 100%);
    background: -webkit-linear-gradient(top, #cfe6ef 0%,#edfcff 100%);
}


.anunciosContacto a {
	display: inline;
	padding: 5px;
	margin-right: 10px;
	font-family: Petita, Arial, Helvetica, sans-serif;
	color:#58ACFA;
	font-size: 11px;
	font-weight: bold;
	text-decoration: none;
}
.anunciosContacto a img {
	margin-right: 5px;
	margin-left: 5px;
}
.anunciosContacto A:hover {
	display: inline;
	margin-right: 10px;
	font-family: Petita,Arial,Helvetica,sans-serif;
	color:#FF4000;
	font-weight: bold;
	text-decoration: none;
}
.anunciosContacto A:visit {
	display: inline;
	margin-right: 10px;
	font-family: Petita,Arial,Helvetica,sans-serif;
	color:#FFBF00;
	font-weight: bold;
}
.verAnuncioIzquierda .visualizacion .anunciosMenuContacto {
	margin: 10px;
	width: 600px;
}
</style>
<link rel="stylesheet" type="text/css" href="css/demo.css" />


<script type="text/javascript" src="scripts/scriptGaleria.js"></script>
<!--[if lte IE 7]>
<style type="text/css">
ul li{
	display:inline;
	/*float:left;*/
}
</style>
<![endif]-->
<script type="application/x-javascript">
/*VALIDACION FORMULARIO*/
var errorNombre, errorEmail, errorText, errorTelefono;

 
		function valida(valor){
			  if(valor.match(/^[a-zA-ZÑñáéíóúÁÉÍÓÚ]{3,}$/i)){
				$('#errorNombre').fadeOut('slow');
				errorNombre=false;
			  }else{
				$('#errorNombre').fadeIn('slow');
				errorNombre=true;
			  }
		}
		
		function compTel(tel){
				 if(tel.match(/^[0-9]{9,14}$/)){
					$('#errorTelefono').fadeOut('slow');
					errorTelefono=false;
				  }else{
					$('#errorTelefono').fadeIn('slow');
					errorTelefono=true;
				  }
		} 
		
		function compEmail(email){
		   // ale=Math.random()*99999999;
			
				  if(email.match(/^[0-9a-z-_\.]{2,}@[a-z]{2,}\.[a-z]{2,4}(\.[a-z]{2,4})?$/i)){
					$('#errorEmail').fadeOut('slow');
					errorEmail=false;
				  }else{
					$('#errorEmail').fadeIn('slow');
					errorEmail=true;
				  }
				
			
		  }
		  
		  function compText(text){
		    if(text.length<5){
			  $('#errorText')
			  .fadeIn('slow');
			   errorText=true;
			}else{
			  $('#errorText')
			  .fadeOut('slow');
			   errorText=false;
			}
		  }
		
 function compForm(e){
    valida($('#name').val());
	compEmail($('#email').val());
	compTel($('#telefono').val());
	compText($('#message').val());
   /* alert(!errorNombre +'&&'+ !errorEmail +'&&'+ !errorPass +'&&'+ !errorPass2 +'&&'+ !errorAnyo +'&&'+ !errorCP +'&&'+ !errorPais +'&&'+ !errorCiudad +'&&'+ !errorRegProv +'&&'+ !errorTelefono +'&&'+ !errorApellido +'&&'+ !errorDirerccion);*/
	if(!errorNombre && !errorText && !errorEmail && !errorTelefono){
	  return true;
	}else{
	  return false;
	}
	
}
</script>
   
{/literal} 

</head>

<body>
{include file="cabecera.tpl"}

<!--////////////////////////////////////////CONTENEDOR/////////////////////////////////////////////////////////-->
<div class="contenedorForm">
       
       
       	<div class="verAnuncioIzquierda">
		<div class="visualizacion">
 			<div class="anunciosTitulo">{$titulo}</div>
 			<div class="anunciosCiudad">Categoria:<span style="color:#666666"> {$categoria} </span>Ciudad: <span style="color:#666666">({$ciudad})</span></div>
            <div class="anunciosFecha">Fecha publicacion: <span style="color:#666666">{$fechaa}</span></div>
           {$raza}
            {$precioo}
            <div style="clear:both"></div>
       	<div id="main">
            <div id="gallery">
                <div id="slides">
                    {$htmlImgsG}
                </div>
            
                <div id="menu">
                    <ul>
                        <li class="fbar">&nbsp;</li>
                        {$htmlImgsP}
                    </ul>
                </div>
            </div>
        </div>
            

    	<div class="anunciosDescrip">
    	<p><b>Descripcion</b><br />
    	{$descripcion}
        </p>     
      	</div>
      
	  <div class="anunciosMenuB">
          <div class="anunciosMenuBIzquierda">
              {$vacDesp}
              {$sexoFin}
              {$edadFin}
              {$interes_}
          </div>
          
          {$imgS}
      </div>
		
        <div class="busquedasRela">
        <span>Busquedas relacionadas</span><br />
        <a href="#">Perro1</a>
        <a href="#">Perro1g fg</a>
        <a href="#">Perro1fd g gfd</a>
        <a href="#">Perro1gfdg ggdf</a>
        </div>
        
        <div class="anunciosMenuContacto">
        <span class="anunciosContacto">
		<a href="http://www.facebook.com/sharer.php?u=http://www.anunciamascotas.com/verAnuncio?idAnuncio={$idAnuncio}" target="parent"><img src="recursos/formularios/facebook.png" width="15" height="15" alt="compartir" />Compartir</a></span>
        <span class="anunciosContacto"><a href="#" class="enviarPoP" rel="{$idAnuncio}"><img src="recursos/formularios/check_mark_32x32.png" width="15" height="15" alt="enviar a amigos" />Enviar a amigos</a></span>
       
        </div>	
            
            
</div>
</div>




<div class="verAnuncioDerecha">
<div class="contactoPrincipal">
 <form METHOD="post" action="contacto.php" onSubmit="return compForm()" class="contacto">
  <div id="campos"> 
    <div class="contacto">
    <label for="Nombre">Nombre*:</label><input id="name" name="Nombre" type="text" size="39"  onblur="valida(this.value)" />
    <input type="hidden" name="idAnuncio" value="{$idAnuncio}"/>
    </div>
    <div style="height:30px; margin-top:7px;"><span id="errorNombre" class="errores">Compruebe el nombre.</span></div>
    <div class="contacto">
    <label for="Telefono">Telefono*:</label><input id="telefono" name="Telefono" type="text" size="39"  onblur="compTel(this.value)" />
    </div>
     <div style="height:30px; margin-top:7px;"><span id="errorTelefono" class="errores">Compruebe el teléfono.</span></div>
    
    <div class="contacto">
    <label for="Email">Correo Electronico*:</label><input id="email" name="Correo" type="text" size="39"  onblur="compEmail(this.value)" />
    </div>
     <div style="height:30px; margin-top:7px;"><span id="errorEmail" class="errores">Compruebe el e-mail.</span></div>
    <div class="contacto">
    <label for="Mensaje">Breve explicacion:</label><textarea name="Mensaje" id="message" rows="5" cols="30"  onblur="compText(this.value)" ></textarea>
    </div>
     <div style="height:30px; margin-top:7px;"><span id="errorText" class="errores">Compruebe el Texto.</span></div>
   </div>
   <div style="margin-top:20px;"><input type="submit" name="submit" value="Contactar" /></div>
 </form>
 
 <div class="llamar">
 
 Llamar a <b style="color:#666; size:14px">{$nombre}</b><br />	
<img src="recursos/formularios/iphone_32x32.png" width="32" height="32" alt="llamar" /><span >{$telefono}</span>

 
 </div>
 {$datosAdop}
</div>
        <div style="margin-left:60px; margin-top:30px;">
         <span class="anunciosContacto"><a href="#" class="denunciarPoP" rel="'.$reAd['anuncioId'].'"><img src="recursos/formularios/error_32x32(4).png" width="20" height="20" alt="denunciar" />Denunciar este anuncio</a></span>
     	</div>   


</div>
     
</div>


<!--/////////////////////////////FIN CONTENEDOR///////////////////////////////////////////////////////////////-->
<!--//////////////Enviar a amigo//////////////////////-->

<div id="basic-modal-content">
  <div id="enviar-popUp">
			<h3 style="margin-bottom:15px; font-family: Petita, Arial, Helvetica, sans-serif;">Enviar a un amigo:</h3>
<div class="ednviarPop">
<h3>{$res}</h3>
<form METHOD="post" action="adopcionesVi.php"  class="contacto">
            <div>
        	<label class="texto" for="nombre">Tu nombre:</label>
            <input class="input" type="text" name="nombre" id="nombre_" value="{$nombre}"  />
            <input type="hidden" name="id" id="enviarAmigo"  value="0"/>
            </div>
            <div style="height:30px;"><span class="errores">Compruebe el nombre, no es correcto</span></div>
            <div>
            <label class="texto" for="mail">e-mail:</label>
            <input class="input" type="text" name="email" id="emailAmigo" value="{$email}" />
            </div>
            <div style="height:30px;"><span class="errores">Compruebe el e-mail, no es correcto</span></div>
            <div style="clear:both"></div>
      <div class="formBoton">
       	  	<input name="enviarAmigo" type="submit" value="Enviar" />
       	</div>
     </form>
        
	</div>
  </div>        
</div>


<div style="clear:both"></div>
<!--////////////////////////////////////////PIE DE PAGINA//////////////////////////////////////////////////////-->

{include file="pie.tpl"}

</body>
</html>
