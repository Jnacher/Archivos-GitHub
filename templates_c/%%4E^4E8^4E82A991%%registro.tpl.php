<?php /* Smarty version 2.6.20, created on 2012-09-22 19:22:28
         compiled from registro.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro</title>
<meta name="descripción" 	content="Registro clientes anunciamascotas.com">
<meta name="palabras clave" content="usuarios, empresas, veterinarios, criadores, empresarios caninos">
<meta name="keywords" 		content="anuncia mascotas, anunciamascotas, anuncia perros"/>

<link href="css.css" rel="stylesheet" type="text/css" />
<link href="../css.css" rel="stylesheet" type="text/css" />


  
<?php echo '
<style type="text/css">

.error {
	font-family: Petita, Arial, Helvetica, sans-serif;
	position: relative;
	background: #88b7d5;
	border: 2px solid #c2e1f5;
	width: 200px;
	text-align: center;
	margin-left: 370px;
	font-size: 12px;
	font-weight: 700;
	color: #FFF;
	padding: 5px;	
} 

.error:after, .error:before {
	bottom: 100%; 
	border: solid transparent; 
	content: " "; 
	height: 0px; 
	width: 0; 
	position: absolute; 
	pointer-events: none; 
} 
.error:after {
		border-bottom-color: #88b7d5; 
		border-width: 5px; 
		left: 10%; 
		margin-left: -5px; 
} 
.error:before {
	border-bottom-color: #c2e1f5; 
	border-width: 8px; 
	left: 10%; 
	margin-left: -8px; 
}
.errores {
	font-family: Petita, Arial, Helvetica, sans-serif;
	position: relative;
	background: #88b7d5;
	border: 2px solid #c2e1f5;
	width: 200px;
	text-align: center;
	margin-left: 370px;
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
.condiciones {
	font-size: 10px;
	color: #999;
	padding-top: 2px;
	padding-right: 2px;
	padding-bottom: 7px;
	padding-left: 2px;
	vertical-align: middle;
}
.formBoton {
	float: right;
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

.arrow_box {
	position: relative;
	border: 1px solid #f50800;
	font-size: 10px;
	font-weight: lighter;
	color: #900;
	width: 150px;
	margin-left: 370px;
	padding: 3px;
} 
.arrow_box:after, .arrow_box:before { bottom: 100%; border: solid transparent; content: " "; height: 0; width: 0; position: absolute; pointer-events: none; } .arrow_box:after { border-bottom-color: #ffffff; border-width: 5px; left: 50%; margin-left: -5px; } .arrow_box:before { border-bottom-color: #f50800; border-width: 6px; left: 50%; margin-left: -6px; }

.formularioReglas {
	font-size: 12px;
	color: #000;
	font-weight: bold;
	margin-bottom: 10px;
}
.formularioReglas p {
	font-size: 10px;
	color: #666;
	margin-top: 10px;
	margin-bottom: 7px;
}

.formularioReglas A:link {
	font-size: 10px;
	color: #39C;
	text-decoration: none;
}
.formularioReglas A:visited {
	font-size: 10px;
	color: #3CF;
}
.formularioReglas a:hover {
	font-size: 10px;
	color: #06C;
}
#MultiFile1_wrap_labels{
	float:left;
	margin-left: -350px;
}
#tipo, .profes{
	display:none;
}
</style>
       
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
   $(\'#categoria\').change(function(){//alert(\'ola\');
   //$(\'#ciudad\').html(\'<option value="cero">selecciona</option>\');
    var cat=$(\'#categoria\').val();//append añade en vez de sustituir y preappend, para pasarle un valor
	$.get(\'compreubaBDAjax.php\',{\'cat\':cat},function(resp){
	  $(\'#raza\').html(resp);
	});
   });
   
    $(\'#provincia\').change(function(){//alert(\'ola\');
    var prov=$(\'#provincia\').val();//append añade en vez de sustituir y preappend, para pasarle un valor
	$.get(\'compreubaBDAjax.php\',{\'prov\':prov},function(resp){
	  $(\'#poblacion\').html(resp);
	});
   });
   
   
});
</script>

<script type="text/javascript">
/*VALIDACION FORMULARIO*/
var errorNombre, errorEmail, errorTelefono;
 
		function valida(valor){
			  if(valor.match(/^[a-zA-ZÑñáéíóúÁÉÍÓÚ ]{3,}$/i)){
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
		  
		    function compPass(valor){
			  if(valor.match(/^[^ ]{6,20}$/i)){
				$(\'#errorPass\').fadeOut(\'slow\');
				errorPass=false;
			  }else{
				$(\'#errorPass\').fadeIn(\'slow\');
				errorPass=true;
				
			  }
			}
			function compPass2(valor){
			  var pass=$(\'#pass\').val();
			  if(valor==pass){
				$(\'#errorPass2\').fadeOut(\'slow\');
				errorPass2=false;
			  }else{
				$(\'#errorPass2\').fadeIn(\'slow\');
				errorPass2=true;
			  }
			}
		  
		
 function compForm(e){//return true;
    valida($(\'#name\').val());
	compEmail($(\'#email\').val());
	compTel($(\'#telefono\').val());
	
	if(!errorNombre && !errorText && !errorEmail && !errorTelefono){
	  return true;
	}else{
	  return false;
	}
	
}
$(document).ready(function(){
  $(\'.eres\').click(function(){
    if($(this).attr(\'id\')==\'Pro\'){
	  $(\'#tipo\').css(\'display\', \'block\');
	  $(\'#Emp\').attr(\'checked\', \'checked\');
	  $(\'.Emp\').css(\'display\', \'block\');
      $(this).attr(\'checked\', \'checked\');
	}else{
	  $(\'#tipo, .profes\').css(\'display\', \'none\');
	}
	
  });
  
   $(\'.eres1\').click(function(){
     var clase=$(this).attr(\'id\');
	 $(\'.profes\').css(\'display\', \'none\');
	 $(\'.\'+clase).css(\'display\', \'block\');
  });
});
</script>

'; ?>
 
<?php echo $this->_tpl_vars['camposShow']; ?>

<?php echo $this->_tpl_vars['errorr']; ?>

</head>

<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cabecera.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--////////////////////////////////////////CONTENEDOR/////////////////////////////////////////////////////////-->
<div class="contenedorForm">

  <div class="formularioTitulo">1. Pon tu anuncio gratis ¡en solo 1 minuto!</div>
    <div class="formularioForm">
    <form id="registro" name="form1" method="post" enctype="multipart/form-data" action="registro.php" onsubmit="return compForm();">
    
    <div class="formLegend">Datos del anuncio</div>
    <ul>
    
    <li>
       	  <label class= "formLabel" for="tipoCliente">Eres</label>
          <span class= "formInputRadio">
            <input name="tipoCliente" type="radio" id="Pro" value="Pro" class="eres" <?php echo $this->_tpl_vars['profesional']; ?>
 />
            <label for="Pro">Profesional</label>
            <input type="radio" name="tipoCliente" id="Par" value="Par" class="eres" <?php echo $this->_tpl_vars['particular']; ?>
 />
            <label for="Par">Particular</label>
          </span>
        </li>
        
         <li id="tipo">
       	  <label class= "formLabel" for="tipoCliente">Eres</label>
          
          <span class= "formInputRadio">
          
            <input name="tipoCliente2" type="radio" id="Emp" class="eres1" value="Emp" <?php echo $this->_tpl_vars['eresCheck']['empresa']; ?>
 />
            <label for="Emp">Empresa</label>
            
            <input type="radio" name="tipoCliente2" id="Prot" class="eres1" value="Prot" <?php echo $this->_tpl_vars['eresCheck']['protectora']; ?>
 />
            <label for="Prot">Protectora</label><br />

             <input type="radio" name="tipoCliente2" id="Cri" class="eres1" value="Cri" <?php echo $this->_tpl_vars['eresCheck']['criador']; ?>
 />
            <label for="Cri">Criador</label>
            
            <input style="margin-left:14px;" type="radio" name="tipoCliente2" id="Vet" class="eres1" value="Vet" <?php echo $this->_tpl_vars['eresCheck']['veterinario']; ?>
 />
            <label for="Vet">Veterinario</label>
          </span>
        </li>
    
        <li style="margin-top:15px;">
        	 <label class= "formLabel" for="nombre">Nombre Contacto:</label>
            <input class= "formInput" type="text" name="nombre" id="nombre" value="<?php echo $this->_tpl_vars['nombre']; ?>
"  onblur="valida(this.value);"/>
        </li>
        <li><span id="errorNombre" class="errores">Compruebe el nombre, no es correcto</span></li>
       
         <!--//////////////////////Empresa//////////////////////////-->
         
        <li class="Emp profes">
        	 <label class= "formLabel" for="nombreEmpresa">Nombre empresa:</label>
            <input class= "formInput" type="text" name="nombreEmpresa" id="nombreEmpresa" value="<?php echo $this->_tpl_vars['nombreEmpresa']; ?>
"  onblur="valida(this.value);"/>
        </li>
        <li class="Emp profes"><?php echo $this->_tpl_vars['error']['nombreEmpresa']; ?>
</li>
        
        <li class="Emp profes">
        	<label class= "formLabel" for="webEmpresa">Web empresa:</label>
            <input class= "formInput" name="webEmpresa" type="text" id="webEmpresa" value="<?php echo $this->_tpl_vars['http']; ?>
<?php echo $this->_tpl_vars['webEmpresa']; ?>
"  autocomplete="off" />
        </li>
        <li class="Emp profes"><?php echo $this->_tpl_vars['error']['webEmpresa']; ?>
</li>
        
        <!--//////////////////////Protectora//////////////////////////-->
        
         <li class="Prot profes">
        	<label class= "formLabel" for="nomProtectora">Nombre protectora:</label>
            <input class= "formInput" name="nomProtectora" type="text" id="nomProtectora" value="<?php echo $this->_tpl_vars['nomProtectora']; ?>
"  autocomplete="off" />
        </li>
       <li class="Prot profes"><?php echo $this->_tpl_vars['error']['nomProtectora']; ?>
</li>
        
        <li class="Prot profes">
        	<label class= "formLabel" for="webProtectora">Web protectora:</label>
            <input class= "formInput" name="webProtectora" type="text" id="webProtectora" value="<?php echo $this->_tpl_vars['http']; ?>
<?php echo $this->_tpl_vars['webProtectora']; ?>
"  autocomplete="off" />
        </li>
        <li class="Prot profes"><?php echo $this->_tpl_vars['error']['webProtectora']; ?>
</li>
       


        
        <!--//////////////////////criador//////////////////////////-->
        
         <li class="Cri profes">
        	<label class= "formLabel" for="nomCriador">Nombre criador:</label>
            <input class= "formInput" name="nomCriador" type="text" id="nomCriador" value="<?php echo $this->_tpl_vars['nomCriador']; ?>
"  autocomplete="off" />
        </li>
       <li class="Cri profes"><?php echo $this->_tpl_vars['error']['nomCriador']; ?>
</li>
        
        <li class="Cri profes">
        	<label class= "formLabel" for="webCriador">Web criador:</label>
            <input class= "formInput" name="webCriador" type="text" id="webCriador" value="<?php echo $this->_tpl_vars['http']; ?>
<?php echo $this->_tpl_vars['webCriador']; ?>
"  autocomplete="off" />
        </li>
        <li class="Cri profes"><?php echo $this->_tpl_vars['error']['webCriador']; ?>
</li>
        
        
         <!--//////////////////////VETERINARIO//////////////////////////-->
        
         <li class="Vet profes">
        	<label class= "formLabel" for="nomVeterinario">Nombre Veterinario:</label>
            <input class= "formInput" name="nomVeterinario" type="text" id="nomVeterinario" value="<?php echo $this->_tpl_vars['nomVeterinario']; ?>
"  autocomplete="off" />
        </li>
       <li class="Vet profes"><?php echo $this->_tpl_vars['error']['nomVeterinario']; ?>
</li>
        
        <li class="Vet profes">
        	<label class= "formLabel" for="webVeterinario">Web Veterinario:</label>
            <input class= "formInput" name="webVeterinario" type="text" id="webVeterinario" value="<?php echo $this->_tpl_vars['http']; ?>
<?php echo $this->_tpl_vars['webVeterinario']; ?>
"  autocomplete="off" />
        </li>
        <li class="Vet profes"><?php echo $this->_tpl_vars['error']['webVeterinario']; ?>
</li>

        
        <!--//////////////////////Protectora//////////////////////////-->
        
        
        <li>
         <label class= "formLabel" for="mail">e-mail:</label>
            <input class= "formInput" type="text" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
" onblur="compEmail(this.value)"/>
        </li>
        <li><span id="errorEmail" class="errores">El e-mail repetido o el formato incorrecto</span></li>
        <li>
        	<label class= "formLabel" for="telefono">Telefono:</label>
            <input class= "formInput"name="telefono" type="text" id="telefono" value="<?php echo $this->_tpl_vars['telefono']; ?>
" onBlur="compTel(this.value)" autocomplete="off" />
        </li>
        <li ><span id="errorTelefono" class="errores">Compruebe el teléfono, no es correcto</span></li>
        
        <li>
        	<label class= "formLabel" for="pass">Contraseña:</label>
            <input class= "formInput"name="pass" type="text" id="pass" value="<?php echo $this->_tpl_vars['pass']; ?>
" onBlur="compPass(this.value)" autocomplete="off" />
        </li>
        <li ><span id="errorPass" class="errores">Compruebe la contraseña, no es correcta</span></li>
         <li>
        	<label class= "formLabel" for="pass2">Repite Contraseña:</label>
            <input class= "formInput"name="pass2" type="text" id="pass2" value="<?php echo $this->_tpl_vars['pass2']; ?>
" onBlur="compPass2(this.value)" autocomplete="off" />
        </li>
        <li ><span id="errorPass2" class="errores">Compruebe la contraseña, no es correcta</span></li>
        
        
          <li>
            <label class= "formLabel" for="provincia">Provincia</label>
            <select class= "formInput" name="provincia" id="provincia">
            <option value="0">Selecciona</option>
            <?php echo $this->_tpl_vars['htmlProv']; ?>

            </select>
        </li>
        <li><?php echo $this->_tpl_vars['error']['provincia']; ?>
</li>
        <li>
            <label class= "formLabel" for="poblacion">Población</label>
            <select class= "formInput" name="poblacion" id="poblacion">
            <option value="0">Selecciona</option>
            <?php echo $this->_tpl_vars['htmlMunicipios']; ?>

            </select>
        </li> 
       <li> <?php echo $this->_tpl_vars['error']['poblacion']; ?>
</li>
        
        
        
        
        
        <li style="margin-left:250px">
       	  <input name="acepto" type="checkbox" value="acepto" /><span class="condiciones">Acepto las condiciones de uso y la Política de Privacidad.</span>
        </li>
        <li><?php echo $this->_tpl_vars['error']['acepto']; ?>
</li>
         <li class="formBoton">
       	  <input name="enviar" type="submit" value="Enviar" />
        </li>
    </ul>
    </form>
    </div>
    <div class="formularioReglas">
    <span class="titFormularioReglas">Para una compra-venta con éxito</span>
    <p><img src="recursos/formularios/formularios.png" width="15" height="15" style="padding-right: 5px" />Pon un anuncio por cada artículo</p>
    <p><img src="recursos/formularios/formularios.png" width="15" height="15" style="padding-right: 5px" />El título debe ser lo más descriptivo posible</p>
    <p><img src="recursos/formularios/formularios.png" width="15" height="15" style="padding-right: 5px" />Revisamos todos los anuncios</p>
    <p><img src="recursos/formularios/error.png" width="15" height="15" style="padding-right: 5px" />No pongas el mismo anuncio más de una vez</p>
    <p><img src="recursos/formularios/error.png" width="15" height="15" style="padding-right: 5px" />Los anuncios que no cumplan las normas no se publicarán</p>
    <p><a href="reglas.php">Consulta nuestras reglas de inserción.</a></p>
    
  </div>
    
	<div style="clear:both"></div> 
    
    <div class="formularioInfo">
    <span style="padding-top:5px; padding-bottom:20px; padding-left:20px; padding-right:20px; float:left;"><img src="recursos/formularios/asterisk_32x32.png" width="32" height="32" /></span><p>Poner un anuncio como particular en segundamano.es es gratis. Antes de ser publicado, nuestro equipo de moderación lo revisará. El anuncio durará cuatro meses (un mes para profesionales) y durante este periodo, podrás modificarlo, contratar productos o eliminarlo en cualquier momento.</p>
<p>Ver reglas de inserción </p></div> 
  
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