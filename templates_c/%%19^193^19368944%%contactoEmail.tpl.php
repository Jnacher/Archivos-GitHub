<?php /* Smarty version 2.6.20, created on 2012-09-13 07:41:14
         compiled from contactoEmail.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Titulo</title>
<meta name="descripción" content="Venta y reparacion de motos y accesorios">
<meta name="palabras clave" content="valencia, massanassa">
<link href="css.css" rel="stylesheet" type="text/css" />
<link href="../css.css" rel="stylesheet" type="text/css" />


  
<?php echo '
<style type="text/css">

#campos {
	float: left;
	width: 350px;
}
#errores{
	float: left;
	margin-left:10px;
	width: 300px;
	text-align:left;
	color: #FFF;
}


.arrow_box:after, .arrow_box:before { right: 100%; border: solid ; content: " "; height: 0; width: 0; position: absolute; pointer-events: none;  }
.arrow_box:after { border-right-color: #88b7d5; border-width: 10px; top: 50%; margin-top: -10px;  } 
.arrow_box:before { border-right-color: #c2e1f5; border-width: 12px; top: 50%; margin-top: -12px; }
.arrow_box { 
position: relative; background: #88b7d5; border: 2px solid #c2e1f5; 
padding: 6px;
display:none;



} 
div.sep{
	height:1px;
}

div.wrapp{
	height:35px;
	margin-top:15px;
}
<!--/////////////////////CONTACTO//////////////////////-->



.contacto{
	border: 1px solid #CED5D7;
	border-radius: 6px;
	background-color: white;
	box-shadow: 0px 5px 10px #B5C1C5, 0 0 0 10px #EEF5F7 inset;
	margin: 5px;
	padding: 50px;
	height: 300px;
}

.contacto label{
    display: block; /* esto es para que el label se sobreponga a la caja de texto */
    font-weight: bold;
}
.contacto div{
    margin-bottom: 15px; /* esto los separara un poco */
}
.contacto input[type=\'text\'], .contacto textarea{
    padding: 7px 6px;
    width: 260px; /* una longitud definida */
    border: 1px solid #CED5D7;
    resize: none; /* esta propiedad es para que el textarea no sea redimensionable */
    box-shadow:0 0 0 3px #EEF5F7;
    margin: 2px 0;
}
.contacto input[type=\'text\']:focus, .contacto textarea:focus{
    outline: none; /* reset especifico para Chrome/Safari */
    box-shadow:0 0 0 3px #dde9ec;
}
.contacto input[type=\'submit\']{
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
.contacto input[type=\'submit\']:hover{
    background: #edfcff;
    background: -moz-linear-gradient(top, #edfcff 0%, #cfe6ef 100%);
    background: -webkit-linear-gradient(top, #edfcff 0%,#cfe6ef 100%);
}
.contacto input[type=\'submit\']:active{
    background: #cfe6ef;
    background: -moz-linear-gradient(top, #cfe6ef 0%, #edfcff 100%);
    background: -webkit-linear-gradient(top, #cfe6ef 0%,#edfcff 100%);
}
 .contacto .contactoDerecha {
	float: right;
	width: 300px;
	font-family: sans-serif;
    font-size: 12px;
    color: #798e94;
	margin-right: 250px;
}
 .contacto .contactoIzquierda {

	width: 300px;
	font-family: sans-serif;
    font-size: 12px;
    color: #798e94;
	margin-left: 50px;
}
 .contacto .contactoIzquierdaBoton {
	float: left;
	text-align: right;
	margin-top: 5px;
	margin-right: 5px;
	margin-bottom: 50px;
	margin-left: 400px;	
	font-family: sans-serif;
    font-size: 12px;
    color: #798e94;
}
	.direccion .textoDireccion {
	float: left;
	font-family: Petita,Arial,Helvetica,sans-serif;
	font-size: 12px;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	font-variant: normal;
	color: #7f7f7f;
	text-align: left;
	margin-top: 50px;
	margin-bottom: 15px;
	margin-left: 10px;
	width: 430px;
	}
    .direccion .mapa {
		color: #7f7f7f;
	font-family: Petita,Arial,Helvetica,sans-serif;
	margin: 20px;
	float: left;
	width: 400px;
	height: 350px;
	font-size: 12px;
	border: thin solid #CCC;
}


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="application/x-javascript">
/*VALIDACION FORMULARIO*/
var errorNombre, errorEmail, errorTelefono;
 
		function valida(valor){
			  if(valor.match(/^[a-zA-ZÑñáéíóúÁÉÍÓÚ\\s ]{3,}$/i)){
				$(\'#errorNombre\').fadeOut(\'slow\');
				errorNombre=false;
			  }else{
				$(\'#errorNombre\').fadeIn(\'slow\');
				errorNombre=true;
			  }
		}
		
		function compTel(tel){
				 if(tel.match(/^[0-9]{9,14}$/)){
					$(\'#errorTelefono\').fadeOut(\'slow\');
					errorTelefono=false;
				  }else{
					$(\'#errorTelefono\').fadeIn(\'slow\');
					errorTelefono=true;
				  }
		} 
		
		function compEmail(email){
		   // ale=Math.random()*99999999;
			
				  if(email.match(/^[0-9a-z-_\\.]{2,}@[a-z]{2,}\\.[a-z]{2,4}(\\.[a-z]{2,4})?$/i)){
					$(\'#errorEmail\').fadeOut(\'slow\');
					errorEmail=false;
				  }else{
					$(\'#errorEmail\').fadeIn(\'slow\');
					errorEmail=true;
				  }
				
			
		  }
		  		  function compText(text){
		    if(text.length<5){
			  $(\'#errorText\')
			  .fadeIn(\'slow\');
			   errorText=true;
			}else{
			  $(\'#errorText\')
			  .fadeOut(\'slow\');
			   errorText=false;
			}
		  }
		
 function compForm(e){//return true;
    valida($(\'#name\').val());
	compEmail($(\'#email\').val());
	compTel($(\'#telefono\').val());
	compText($(\'#message\').val());
	if(!errorNombre && !errorText && !errorEmail && !errorTelefono && !errorText){
	  return true;
	}else{
	  return false;
	}
	
}
		  

</script>
'; ?>



</head>

<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabecera.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--////////////////////////////////////////CONTENEDOR/////////////////////////////////////////////////////////-->
        <div class="publicidadHorizontal">
        <span>Publicidad </span>
        </div>
<div class="contenedorForm">
	
  <div class="formularioForm">
   <h3 class="texto">Si quiere ponerse en contacto con nosotros puede rellenar este formulario también y en breves nos pondremos en contacto con usted.</h3>
    <form METHOD="post" action="contactoEmail.php" onSubmit="return compForm()" class="contacto">
  <div id="campos"> 
    <div class="contactoIzquierda">
    <label for="Nombre">Nombre*:</label><input id="name" name="Nombre" type="text" size="20"  onblur="valida(this.value)" />
    </div>
    
    <div class="contactoIzquierda">
    <label for="Telefono">Telefono*:</label><input id="telefono" name="Telefono" type="text" size="20"  onblur="compTel(this.value)" />
    </div>
    <div class="contactoIzquierda">
    <label for="Email">Correo Electronico*:</label><input id="email" name="Correo" type="text" size="20"  onblur="compEmail(this.value)" />
    </div>
    <div class="contactoIzquierda">
    <label for="Mensaje">Breve explicacion:</label><textarea name="Mensaje" id="message" rows="5" cols="30"  onblur="compText(this.value)" ></textarea>
    </div>
 </div>
 <div id="errores">
    <div class="wrapp">
        <div class="arrow_box" id="errorNombre">
          Campo nombre no es valido
        </div>
    </div>
    <div class="sep"></div>
    <div class="wrapp">
        <div class="arrow_box" id="errorTelefono">
        El teléfono no es valido
        </div>
    </div>
    <div class="sep"></div>
     <div class="wrapp">
        <div class="arrow_box" id="errorEmail">
        El Email no es correcto
        </div>
    </div>
    <div class="sep"></div>
     <div class="wrapp">
        <div class="arrow_box" id="errorText">
        El mensaje no es valido
        </div>
     </div>
 </div>
<div style="clear:both;"></div>
<div class="contactoIzquierdaBoton"><input type="submit" name="submit" value="Enviar" /></div>

<div></div>

</form>		  
   
   
    </div>
    
    <div class="publicidadVertical">
    <span>Publicidad</span>
    </div>
    
    
	<div style="clear:both"></div> 
    
    
  
</div>


<!--/////////////////////////////FIN CONTENEDOR///////////////////////////////////////////////////////////////-->

<!--////////////////////////////////////////PIE DE PAGINA//////////////////////////////////////////////////////-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pie.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</body>
</html>