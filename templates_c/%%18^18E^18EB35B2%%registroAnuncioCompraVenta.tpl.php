<?php /* Smarty version 2.6.20, created on 2012-09-22 19:22:20
         compiled from registroAnuncioCompraVenta.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Compra y venta</title>
<meta name="descripción" 	content="Anuncios de criadores de mascotas, animales, perros, gatos, caballos, peces, conejos...">
<meta name="palabras clave" content="compra, venta, adopcion, animales, perros gratis">
<meta name="keywords" 		content="compra y venta mascotas, compra venta, compraventa"/>

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
	padding-top: 2px;
	padding-right: 2px;
	padding-bottom: 7px;
	padding-left: 2px;
	vertical-align: middle;
}
.condiciones a {
	font-size: 10px;
	color: #333;
	text-decoration: underline;
}
.condiciones a:hover {
	font-size: 10px;
	color:#69F;
}
.condiciones a:visited {
	font-size: 10px;
	color: #999;
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
	width: 200px;
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
	
	if(cat==\'3\'){
	  $(\'#vacunas-li, #desparasitados-li\').css(\'display\', \'none\');
	}else{
	  $(\'#vacunas-li, #desparasitados-li\').css(\'display\', \'block\');
	}
   });
   
    $(\'#provincia\').change(function(){//alert(\'ola\');
    var prov=$(\'#provincia\').val();//append añade en vez de sustituir y preappend, para pasarle un valor
	$.get(\'compreubaBDAjax.php\',{\'prov\':prov},function(resp){
	  $(\'#poblacion\').html(resp);
	});
   });
   
   
   
   
});
</script>
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
</script>
'; ?>

<?php echo $this->_tpl_vars['errorr']; ?>
 

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
	
  <div class="formularioTitulo">1. Pon tu anuncio gratis ¡en solo 1 minuto!</div>
    <div class="formularioForm">
    <form id="registro" name="form1" method="post" enctype="multipart/form-data" action="registroAnuncioCompraVenta.php" onsubmit="return compForm();">
    
    <div class="formLegend">Datos del anuncio</div>
    <ul>
        <li>
            <label class= "formLabel" for="categoria">Categoría</label>
            <select class= "formInput" name="categoria" id="categoria">
            <?php echo $this->_tpl_vars['htmlCats']; ?>

            </select>
        </li>
        
        <li>
            <label class= "formLabel" for="raza">Raza</label>
            <select class= "formInput" name="raza" id="raza">
            <option value="0">todas las razas</option>
            <?php echo $this->_tpl_vars['htmlRazas']; ?>

          </select>

        </li>
        <li>
            <label class= "formLabel" for="provincia">Provincia</label>
            <select class= "formInput" name="provincia" id="provincia">
            <option value="0">Selecciona</option>
            <?php echo $this->_tpl_vars['htmlProv']; ?>

            </select>
        </li>
        <?php echo $this->_tpl_vars['error']['provincia']; ?>

        <li>
            <label class= "formLabel" for="poblacion">Población</label>
            <select class= "formInput" name="poblacion" id="poblacion">
            <option value="0">Selecciona</option>
            <?php echo $this->_tpl_vars['htmlMunicipios']; ?>

            </select>
        </li> 
        <?php echo $this->_tpl_vars['error']['poblacion']; ?>

        <li>
            <label class= "formLabel" for="sexo">Sexo</label>
            <span class= "formInputRadio">
            <input  name="sexo" type="radio" id="h" value="h" <?php echo $this->_tpl_vars['fimale']; ?>
/>
            <label for="h">Hembra:</label>
            <input type="radio" name="sexo" id="m" value="m" <?php echo $this->_tpl_vars['male']; ?>
/>
            <label for="m">Macho:</label>
            </span>
        </li>
       
        <li id="vacunas-li">
            <label class= "formLabel" for="vacunas">Vacunas</label>
            <span class= "formInputRadio">
            <input name="vacunas" type="radio" id="sV" value="s" <?php echo $this->_tpl_vars['vacunaSi']; ?>
 />
            <label for="s">Si:</label>
            <input type="radio" name="vacunas" id="nV" value="n" <?php echo $this->_tpl_vars['vacunaNo']; ?>
 />
            <label for="n">No:</label>
            </span>
        </li>
        <li>
            <label class= "formLabel" for="edad">Edad</label>
            <select class= "formInput" name="edad" id="edad">
            <option value="0">Selecciona</option>
            <?php echo $this->_tpl_vars['htmlEdades']; ?>

            </select>
        </li>
        <?php echo $this->_tpl_vars['error']['edad']; ?>

        <li id="desparasitados-li">
            <label class= "formLabel" for="desparasitados">Desparasitados</label>
            <span class= "formInputRadio">
            <input name="desparasitados" type="radio" id="sD" value="s" <?php echo $this->_tpl_vars['desparasitadosSi']; ?>
 />
            <label for="s">Si:</label>
            <input type="radio" name="desparasitados" id="nD" value="n" <?php echo $this->_tpl_vars['desparasitadosNo']; ?>
/>
            <label for="n">No:</label>
            </span>
        </li>
        <li>
            <label class= "formLabel" for="titulo">Titulo del anuncio</label>
            <input name="titulo" type="text" class= "formInput" id="titulo" value="<?php echo $this->_tpl_vars['titulo']; ?>
" />
        </li> 
        <?php echo $this->_tpl_vars['error']['titulo']; ?>
	
        <li>
            <label style=" margin-bottom:90px" class= "formLabel" for="descripcion">Descripción</label>
          	<textarea rows="3" cols="20" name="descripcion" class="formInput" style="width: 311px; height: 125px;"><?php echo $this->_tpl_vars['descripcion']; ?>
</textarea>
      	</li>
        <li style="clear:both"></li>
        <?php echo $this->_tpl_vars['error']['descripcion']; ?>

        
        <li>
            <label class= "formLabel" for="precio">Precio</label>
            <input name="precio" type="text" class= "formInput" id="precio" value="<?php echo $this->_tpl_vars['precio']; ?>
" />€
        </li>
        <?php echo $this->_tpl_vars['error']['precio']; ?>

          
    </ul>
    <div class="formLegend">Imágenes</div>
    <ul>
    	<li><script type="text/javascript" src="jQuery/jquery.MultiFile.js"></script>
        	<label class="formLabel" for="imagen">Imagen</label>
            <input type="file" name="files[]" class="multi accept-jpg|gif|png" maxlength="4"/>
        </li>
        <li class="arrow_box">
        Recuerda que... los anuncios con fotos reciben más visitas (máximo 4 imagenes)
        </li>
    </ul>
  	<div class="formLegend">Datos para que contacten contigo</div>
    <ul>
    	<li>
       	  <label class= "formLabel" for="tipoCliente">Eres</label>
          <span class= "formInputRadio">
            <input name="tipoCliente" type="radio" id="Pro" value="Pro" <?php echo $this->_tpl_vars['profesional']; ?>
 />
            <label for="Pro">Profesional:</label>
            <input type="radio" name="tipoCliente" id="Par" value="Par" <?php echo $this->_tpl_vars['particular']; ?>
 />
            <label for="Par">Particular:</label>
          </span>
        </li>
        <li>
        	 <label class= "formLabel" for="nombre">Nombre:</label>
            <input class= "formInput" type="text" name="nombre" id="nombre" value="<?php echo $this->_tpl_vars['nombre']; ?>
"  onblur="valida(this.value);"/>
        </li>
        <li><span id="errorNombre" class="errores">Compruebe el nombre, no es correcto</span></li>
        <li>
         <label class= "formLabel" for="mail">e-mail:</label>
            <input class= "formInput" type="text" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
" onblur="compEmail(this.value)"/>
        </li>
        <li><span id="errorEmail" class="errores">Compruebe el e-mail, no es correcto</span></li>
        <li>
        	<label class= "formLabel" for="telefono">Teléfono:</label>
            <input class= "formInput"name="telefono" type="text" id="telefono" value="<?php echo $this->_tpl_vars['telefono']; ?>
" onBlur="compTel(this.value)" autocomplete="off" />
        </li>
        <li ><span id="errorTelefono" class="errores">Compruebe el teléfono, no es correcto</span></li>
        <li style="margin-left:250px">
       	  <input name="acepto" type="checkbox" value="acepto" /><span class="condiciones">Acepto las <a target="_blank"  href="condicionesUso.php">condiciones de uso y la Política de Privacidad.</a></span>
        </li>
        <?php echo $this->_tpl_vars['error']['acepto']; ?>

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
    <div class="publicidadVertical">
    <span>Publicidad</span>
    </div>
	<div style="clear:both"></div> 
    
    <div class="formularioInfo">
    <span style="padding-top:5px; padding-bottom:40px; padding-left:20px; padding-right:20px; float:left;"><img src="recursos/formularios/info_32x32.png" width="32" height="32" alt="informacion" /></span>
    <p>Poner un anuncio en <b>anunciamascotas.com</b> es totalmente gratis. Antes de ser publicado, nuestro equipo de moderación lo revisará. El anuncio durará cuatro meses.</p>
  <p>Para anunciarse en los apartados adopciones, busco novi@, tendrás que ser usuario de la Web, aconsejamos que si tiene que utilizar la Web con asiduidad se de de alta como usuario así tendrá varias ventajas, por ejemplo podrá modificar el anuncio y eliminarlo en cualquier momento, además no tendra que poner sus datos en cada anuncio.</p></div> 
  
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