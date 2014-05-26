<?php /* Smarty version 2.6.20, created on 2012-09-22 19:22:17
         compiled from adopcionesVi.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adopcion</title>
<meta name="descripción" 	content="Anuncios de mascotas en adopcion">
<meta name="palabras clave" content="adopta, protectora, regalo mascota">
<meta name="keywords" 		content="adopta perro, adoptaperro, atopcionperro"/>

<link href="css.css" rel="stylesheet" type="text/css" />
<link href="../css.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<!-- Page styles -->

<!-- Contact Form CSS files -->
<link type='text/css' href='css/modal/basic.css' rel='stylesheet' media='screen' />
 <link type='text/css' href='../css/modal/basic.css' rel='stylesheet' media='screen' /> 
<?php echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
$(document).ready(function(){
						   
	//prepend span tag
	$(".jquery h1").prepend("<span></span>");
	
	$(\'.contactarPoP\').click(function (e) {
		$(\'#contactar-popUp\').modal();
		return false;
	});
	$(\'.compartirPoP\').click(function (e) {
		$(\'#compartir-popUp\').modal();
		return false;
	});
	$(\'.enviarPoP\').click(function (e) {
		$(\'#enviar-popUp\').modal();
		$(\'#enviarAmigo\').val($(this).attr(\'rel\'));
		return false;
	});
	$(\'.denunciarPoP\').click(function (e) {
		$(\'#denunciar-popUp\').modal();
		$(\'#denunciar\').val($(this).attr(\'rel\'));
		return false;
	});
								  
});
</script>

<!--[if lt IE 7]>
<style>
.gradient-ie h1 span {
    background: none;
    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'images/gradient-white.png\', sizingMethod=\'scale\');
}
</style>
<![endif]-->

<script type="application/x-javascript">
/*VALIDACION FORMULARIO*/
var errorNombre, errorEmail, errorTelefono;
 
		function valida(valor, obj){
			  if(valor.match(/^[a-zA-ZÑñ\\sáéíóúÁÉÍÓÚ ]{3,}$/i)){
				$(obj).parent().next().find(\'.errores\').fadeOut(\'slow\');
				errorNombre=false;
			  }else{
				$(obj).parent().next().find(\'.errores\').fadeIn(\'slow\');
				errorNombre=true;
			  }
		}
		
		function compTel(tel, obj){console.log(obj);
				 if(tel.match(/^[0-9]{9,14}$/)){
					$(obj).parent().next().find(\'.errores\').fadeOut(\'slow\');
					errorTelefono=false;
				  }else{
					$(obj).parent().next().find(\'.errores\').fadeIn(\'slow\');
					errorTelefono=true;
				  }
		} 
		
		function compEmail(email, obj){console.log(obj);
		   // ale=Math.random()*99999999;
			
				  if(email.match(/^[0-9a-z-_\\.]{2,}@[a-z]{2,}\\.[a-z]{2,4}(\\.[a-z]{2,4})?$/i)){console.log(email+\' n\');
					$(obj).parent().next().find(\'.errores\').fadeOut(\'slow\');
					errorEmail=false;
				  }else{console.log(email+\' n\');
					$(obj).parent().next().find(\'.errores\').fadeIn(\'slow\');
					errorEmail=true;
				  }
				
			
		  }
		  function compText(text, obj){
		    if(text.length<5){
			 $(obj).parent().next().find(\'.errores\')
			  .fadeIn(\'slow\');
			   errorText=true;
			}else{
			  $(obj).parent().next().find(\'.errores\')
			  .fadeOut(\'slow\');
			   errorText=false;
			}
		  }
		  
		
 function compForm(e){
 errorNombre=errorText=errorEmail=errorTelefono=false;
 if(e==\'a\'){
 //AMIGO
    compEmail($(\'#emailAmigo\').val(), $(\'#emailAmigo\'));
    compEmail($(\'#nombre\').val(), $(\'#nombre\'));
    if(!errorNombre && !errorEmail){
	  return true;
	}else{
	  return false;
	}
 }else if(e==\'c\'){
 //CONTACTO
    valida($(\'#name\').val(), $(\'#name\'));
	compEmail($(\'#emailContacto\').val(), $(\'#emailContacto\'));
	compTel($(\'#telefono\').val(), $(\'#telefono\'));
	compText($(\'#message\').val(), $(\'#message\'));
	if(!errorNombre && !errorText && !errorEmail && !errorTelefono){
	  return true;
	}else{
	  return false;
	}
 }
	
}
</script>

<style type="text/css">

.errores {
	font-family: Petita, Arial, Helvetica, sans-serif;
	background: #88b7d5;
	border: 2px solid #c2e1f5;
	text-align: center;
	font-size: 12px;
	font-weight: 700;
	color: #FFF;
	padding: 5px;
	display:none;
	position: relative;
	width: 300px;
	height: auto;
} 
.errores:after, .errores:before {
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

.publicidadHorizontal {
	width: 900px;
	height:90px;
	border: thin solid #CCC;
	margin-bottom:20px;
	margin-right: auto;
	margin-left: auto;
}
.publicidadHorizontal span {
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #CCC;
	padding: 10px;
	float: left;
}
.publicidadVertical span {
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #CCC;
	padding: 10px;
	float: left;
}
.publicidadVertical {
	float: right;
	width: 180px;
	text-align: right;
	height:600px;
	border: thin solid #CCC;
}
.contenedorAnuncios .anuncios {
	margin: 5px;
	float: left;
	width: 650px;
}
.contenedorAnuncios {
	width:900px;
	margin-right: auto;
	margin-left: auto;
}

.publicidadHorizontal {
	margin-right: auto;
	margin-left: auto;
}
.menuLinea {
	display: inline;
	width: 300px;
	padding: 15px;
}
.menuUl {
	margin: 10px;
}
.menuRef {
	font-size: 10px;
	color: #000;
	vertical-align: top;
}
.anunciosCiudad {
	float: left;
	width: 370px;
}
.anunciosFecha {
	
	float: right;
	width: 240px;
}
.anunciosDescrip {
	font-family: Petita, Arial, Helvetica, sans-serif;
	color: #848484;
	font-size: 10px;
	font-weight: lighter;
	float: left;
	width: 460px;
	text-transform: capitalize;
	text-align: left;
	margin-bottom: 5px;
}
.anunciosPrecio {
	float: left;
	width: 460px;
	margin-top: 5px;
	margin-bottom: 5px;
	font-family: Petita,Arial,Helvetica,sans-serif;
	color:#FF4000;
	font-size: 15px;
	font-weight: bold;
	text-align: left;
	display:inline
}
.anunciosTitulo span {
	
	margin-right: 20px;
	float: right;
}
.anunciosTitulo a {
	font-family: Petita, Arial, Helvetica, sans-serif;
	color:#58ACFA;
	font-size: 10px;
	font-weight: lighter;
	text-decoration: none;
	margin-left: 20px;
}
.anunciosTitulo A:hover {
	font-family: Petita, Arial, Helvetica, sans-serif;
	color:#FF4000;
	font-size: 10px;
	font-weight: lighter;
	text-decoration: none;
	margin-left: 20px;
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
.anunciosIndi {
	border-bottom-width: thin;
	border-bottom-style: dashed;
	border-bottom-color: #CCC;
	padding-bottom: 5px;
}
.anunciosContacto A:hover {
	display: inline;
	margin-right: 10px;
	font-family: Petita,Arial,Helvetica,sans-serif;
	color:#FF4000;
	font-weight: bold;
}
.anunciosContacto A:visit {
	display: inline;
	margin-right: 10px;
	font-family: Petita,Arial,Helvetica,sans-serif;
	color:#FFBF00;
	font-weight: bold;
}
.anunciosImagen {
	float:left;
	padding-left: 60px;
}
.anunciosTitulo {
	float: left;
	width: 640px;
	font-family: Petita,Arial,Helvetica,sans-serif;
	color:#424242;
	font-size: 13px;
	font-weight: bold;
	margin-left: 10px;
}
.enviarPop {
	font-family: Petita,Arial,Helvetica,sans-serif;
	color:#58ACFA;
	font-size: 13px;
	font-weight: bold;
	float: left;
	width: 400px;
	padding-left:120px;
}
.enviarPop .texto {
	font-family: Petita,Arial,Helvetica,sans-serif;
	color:#58ACFA;
	font-size: 13px;
	font-weight: bold;
	width: 100px;
	float: left;
}
.enviarPop .input {
	font-family: Petita,Arial,Helvetica,sans-serif;
	color:#666666;
	font-size: 13px;
	font-weight: bold;
	margin-top: 10px;
	margin-bottom: 15px;
}
.enviarPop .input input[type=\'submit\']{
	font-family: sans-serif;
    font-size: 12px;
    color: #798e94;
    border: 1px solid #CED5D7;
    box-shadow:0 0 0 3px #EEF5F7;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: bold;
    text-shadow: 1px 1px 0px white;
    background: #e4f1f6; /* fallback para navegadores que no soporten degradados */
    background: -moz-linear-gradient(top, #e4f1f6 0%, #cfe6ef 100%);
    background: -webkit-linear-gradient(top, #e4f1f6 0%,#cfe6ef 100%);
	cursor:pointer;
}
.enviarPop .input input[type=\'submit\']:hover{
    background: #edfcff;
    background: -moz-linear-gradient(top, #edfcff 0%, #cfe6ef 100%);
    background: -webkit-linear-gradient(top, #edfcff 0%,#cfe6ef 100%);
}
.enviarPop .input input[type=\'submit\']:active{
    background: #cfe6ef;
    background: -moz-linear-gradient(top, #cfe6ef 0%, #edfcff 100%);
    background: -webkit-linear-gradient(top, #cfe6ef 0%,#edfcff 100%);
}



.enviarPop span {
	margin-left: 0px;	
}


.formBoton {
	float: left;
	margin-top: 5px;
	margin-right: 20px;
	margin-bottom: 10px;
}
input[type=\'submit\']{
	font-family: sans-serif;
    font-size: 12px;
    color: #798e94;
    border: 1px solid #CED5D7;
    box-shadow:0 0 0 3px #EEF5F7;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: bold;
    text-shadow: 1px 1px 0px white;
    background: #e4f1f6; /* fallback para navegadores que no soporten degradados */
    background: -moz-linear-gradient(top, #e4f1f6 0%, #cfe6ef 100%);
    background: -webkit-linear-gradient(top, #e4f1f6 0%,#cfe6ef 100%);
	cursor:pointer;
}
input[type=\'submit\']:hover{
    background: #edfcff;
    background: -moz-linear-gradient(top, #edfcff 0%, #cfe6ef 100%);
    background: -webkit-linear-gradient(top, #edfcff 0%,#cfe6ef 100%);
}
input[type=\'submit\']:active{
    background: #cfe6ef;
    background: -moz-linear-gradient(top, #cfe6ef 0%, #edfcff 100%);
    background: -webkit-linear-gradient(top, #cfe6ef 0%,#edfcff 100%);
}
</style>

   
'; ?>
 

</head>

<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabecera.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--////////////////////////////////////////CONTENEDOR/////////////////////////////////////////////////////////-->
<div class="contenedorForm">

              <div class="menuAnuncios">
              <div class="infoMenu"><span><img style="margin-right:10px; "src="recursos/formularios/asterisk_32x32.png" width="15" height="15" />Busqueda rápida</span>
              Elija las opciones que le aparecen en este menú y actualicelo, seguidamente le aparecerán los resultados que usted haya seleccionado, actualicelo en cada cambio que realice.</div>
              <form name="buscar" id="buscar" method="post" action="adopcionesVi.php">
            <ul class="menuUl">
                <li class="menuLinea">
                <span class="menuRef">Categoria</span>
                    <select class= "formInput" name="categoria" id="categoria">
                    <?php echo $this->_tpl_vars['htmlCats']; ?>

                    </select>
                </li>
                <li class="menuLinea">
                <span class="menuRef">Raza</span>
                    <select class= "formInput" name="raza" id="raza">
                    <option value="cero">Cualquiera</option>
                    <?php echo $this->_tpl_vars['htmlRazas']; ?>

                    </select>
                </li>
              <li class="menuLinea">
                <span class="menuRef">Ciudad</span>
                    <select class= "formInput" name="ciudad" id="ciudad">
                    <option value="cero">Cualquiera</option>
                    <?php echo $this->_tpl_vars['htmlProv']; ?>

                    </select>
                </li>
             </ul>
             <ul class="menuUl">
                <li class="menuLinea">
                <span class="menuRef">Vendedor</span>
                  <span class= "formInputRadio">
                    <input name="tipoCliente" type="radio" id="Pro" value="pro" <?php echo $this->_tpl_vars['pro']; ?>
 />
                    <label for="Pro">Profesional:</label>
                    <input type="radio" name="tipoCliente" id="Par" value="par" <?php echo $this->_tpl_vars['par']; ?>
 />
                    <label for="Par">Particular:</label>
                    <input type="radio" name="tipoCliente" id="both"  value="both" <?php echo $this->_tpl_vars['bothTC']; ?>
 />
                    <label for="both">Ambos</label>
                  </span>
                </li>
             
                <li class="menuLinea">
                <span class="menuRef">Sexo</span>
                    <span class= "formInputRadio">
                    <input  name="sexo" type="radio" id="h" value="h" <?php echo $this->_tpl_vars['sexH']; ?>
 />
                    <label for="h">Hembra:</label>
                    <input type="radio" name="sexo" id="m" value="m" <?php echo $this->_tpl_vars['sexM']; ?>
 />
                    <label for="m">Macho:</label>
                     <input type="radio" name="sexo" id="both"  value="both" <?php echo $this->_tpl_vars['bothSx']; ?>
 />
                    <label for="both">Ambos</label>
                    </span>
                </li>
             </ul>
             <ul class="menuUl">
                <li class="menuLinea">
                <span class="menuRef">Publicado</span>
                    <select class= "formInput" name="publicado" id="publicado">
                    <option value="cero">en cualquier momento</option>
                    <option value="1" <?php echo $this->_tpl_vars['1']; ?>
>en el último dia</option>
                    <option value="3" <?php echo $this->_tpl_vars['3']; ?>
>en los últimos 3 dias</option>
                    <option value="5" <?php echo $this->_tpl_vars['5']; ?>
>en los últimos 5 dias</option>
                    <option value="10" <?php echo $this->_tpl_vars['10']; ?>
>en los últimos 10 dias</option>
                    <option value="15" <?php echo $this->_tpl_vars['15']; ?>
>en los últimos 15 dias</option>
                    <option value="20" <?php echo $this->_tpl_vars['20']; ?>
>en los últimos 20 dias</option>
                    <option value="30" <?php echo $this->_tpl_vars['30']; ?>
>en los últimos 30 dias</option>
                    <option value="60" <?php echo $this->_tpl_vars['60']; ?>
>en los últimos 60 dias</option>
                    <option value="90" <?php echo $this->_tpl_vars['90']; ?>
>en los últimos 90 dias</option>
                    <option value="120" <?php echo $this->_tpl_vars['120']; ?>
>en los últimos 120 dias</option>
                    </select>
                </li>
               <input type="submit" name="actualizar" id="actualizar" value="Actualizar" />
             </ul>
           </form>
        </div>
        <div class="publicidadHorizontal">
        <span>Publicidad </span>
        </div>
        
        <div class="contenedorAnuncios">
        <div class="anuncios">
        <?php echo $this->_tpl_vars['anunciosHtml']; ?>

        </div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menuLateral.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="publicidadVertical">
        <span>Publicidad</span>
        </div>
        
        </div>
    
</div>
<!--/////////////////////////////FIN CONTENEDOR///////////////////////////////////////////////////////////////-->
<div style="clear:both"></div>
<!--////////////////////////////////////////PIE DE PAGINA//////////////////////////////////////////////////////-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pie.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- VENTANAS MODALES -->
<div id="basic-modal-content">
<div id="contactar-popUp">
			<h3>Formulario de contacto</h3>
			<div class="contactoPrincipal">
 <form METHOD="post" action="adopcionesVi.php" onSubmit="return compForm('c')" class="contacto">
  <div id="campos"> 
    <div class="contacto">
    <label for="Nombre">Nombre*:</label><input id="name" name="Nombre" type="text" size="39"  onblur="valida(this.value, this)" />
    </div>
    <div style="height:40px; padding-top:10px;"><span  class="errores">Compruebe el nombre, no es correcto</span></div>
    <div class="contacto">
    <label for="Telefono">Telefono*:</label><input id="telefono" name="Telefono" type="text" size="39"  onblur="compTel(this.value, this)" />
    </div>
    <div style="height:40px;  padding-top:10px;"><span  class="errores">Compruebe el nombre, no es correcto</span></div>
    <div class="contacto">
    <label for="Email">Correo Electronico*:</label><input id="emailContacto" name="Correo" type="text" size="39"  onblur="compEmail(this.value, this)" />
    </div>
    <div style="height:40px;  padding-top:10px;"><span  class="errores">Compruebe el nombre, no es correcto</span></div>
    <div class="contacto">
    <label for="Mensaje">Breve explicacion:</label><textarea name="Mensaje" id="message" rows="5" cols="30"  placeholder="Estoy interesado en este anuncio..." onblur="compText(this.value, this)" ></textarea>
    </div>
    <div style="height:40px; padding-top:10px; "><span  class="errores">Compruebe el nombre, no es correcto</span></div>
   </div>
   <div style="margin-top:20px;"><input type="submit" name="submit" value="Contactar" /></div>
 </form>
 
</div>
		
			
  </div>
        
</div>


<!--//////////////Enviar a amigo//////////////////////-->

<div id="basic-modal-content">
  <div id="enviar-popUp">
			<h3 style="margin-bottom:15px; font-family: Petita, Arial, Helvetica, sans-serif;">Enviar a un amigo:</h3>
<div class="enviarPop">
<h3><?php echo $this->_tpl_vars['res']; ?>
</h3>

<div class="envioPrincipal">
 <form METHOD="post" action="adopcionesVi.php" onSubmit="return compForm('a')" class="contacto">
  <input type="hidden" name="id" id="enviarAmigo"  value="0"/>
  <div id="campos"> 
    <div class="contacto">
    <label for="Nombre">Tu nombre:*:</label>
    <input id="name" name="Nombre" type="text" size="39"  onblur="valida(this.value, this)" />
    </div>
    <div style="height:40px; padding-top:10px;"><span  class="errores">Compruebe el nombre, no es correcto</span></div>
    
    <div class="contacto">
    <label for="Email">Correo Electronico*:</label>
    <input id="emailContacto" name="Correo" type="text" size="39"  onblur="compEmail(this.value, this)" />
    </div>
    <div style="height:40px;  padding-top:10px;"><span  class="errores">Compruebe el nombre, no es correcto</span></div>
    
   <div style="margin-top:20px; margin-bottom:50px;"><input name="enviarAmigo" type="submit" value="Enviar" /></div>
 </form>
</div>

        
</div>
  </div>        
</div>

<!--/////////////////Denunciar////////////////////////-->

<div id="basic-modal-content" class="simplemodal-container-contacto">
<div id="denunciar-popUp">
			<h3>Formulario de contacto</h3>
			<div class="contactoPrincipal">
 <form METHOD="post" action="adopcionesVi.php"  class="contacto">
  <div id="campos"> 
    <div class="contacto">
    <label for="estafa">Es una estafa:</label>
   <input type="radio" name="denunciarR" id="estafa" value="estafa"/><br />

   <label for="repetido">Está repetido:</label>
   <input type="radio" name="denunciarR" value="repetido"/><br />

   <label for="obsoleto">Está obsoleto o vendido:</label>
   <input type="radio" name="denunciarR" value="obsoleto"/><br />

   <label for="categoria">Este anuncio no corresponde a su categoria:</label>
   <input type="radio" name="denunciarR" value="categoria"/><br />

    </div>
    
    <input type="hidden" id="denunciar" name="id" value="0"/>
   </div>
   <div style="margin-top:20px;"><input type="submit" name="denunciar" value="Contactar" /></div>
 </form>
</div>
		
			
		</div>
        
</div>

<script type='text/javascript' src='jQuery/jquery.simplemodal.js'></script>


</body>
</html>