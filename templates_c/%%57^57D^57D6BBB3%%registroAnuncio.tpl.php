<?php /* Smarty version 2.6.20, created on 2012-07-23 11:18:10
         compiled from registroAnuncio.tpl */ ?>
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
.error {
	font-size: 14px;
	color: #F00;
}
</style>
<script src=\'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\' type=\'text/javascript\'></script>
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
var errorNombre, errorEmail, errorTelefono, errorEmail2;

function valida(valor){
	  if(valor.match(/^[a-zA-ZÑñáéíóúÁÉÍÓÚ]{3,}$/i)){
		$(\'#errorNombre\').text(\'\');
		errorNombre=false;
	  }else{
	    $(\'#errorNombre\').text(\'error de nombre\');
		errorNombre=true;
	  }
}
function compTel(tel){
   		 if(tel.match(/^[0-9]{9,14}$/)){
			$(\'#errorTelefono\').text(\'\');
			errorTelefono=false;
          }else{
	        $(\'#errorTelefono\').text(\'telefono no es correcto\');
			errorTelefono=true;
		  }
}
function compEmail(email){
   // ale=Math.random()*99999999;
		  if(email.match(/^[0-9a-z-_\\.]{2,}@[a-z]{2,}\\.[a-z]{2,4}(\\.[a-z]{2,4})?$/i)){
			$(\'#errorEmail\').text(\'\');
			errorEmail=false;
          }else{
	        $(\'#errorEmail\').text(\'email no es sintaxicamente correcto\');
			errorEmail=true;
		  }
  }
  
function confEmail(valor){
  var email2=$(\'#email\').val();
  if(valor==email){
    $(\'#errorEmail2\').text(\'\');
	errorEmail2=false;
  }else{
    $(\'#errorEmail2\').text(\'E-mail no coincide\');
	errorEmail2=true;
  }
}
function compForm(e){
	
	//alert($(\'#anyoNacimiento\').val()+\' v\');//stopPropagation(e);
    valida($(\'#nombre\').val());
	compEmail($(\'#email\').val());
	comEmail($(\'#email\').val());
	compTel($(\'#telefono\').val());
	regionProvComp($(\'#poblacionComp\').val());
   /* alert(!errorNombre +\'&&\'+ !errorEmail +\'&&\'+ !errorPass +\'&&\'+ !errorPass2 +\'&&\'+ !errorAnyo +\'&&\'+ !errorCP +\'&&\'+ !errorPais +\'&&\'+ !errorCiudad +\'&&\'+ !errorRegProv +\'&&\'+ !errorTelefono +\'&&\'+ !errorApellido +\'&&\'+ !errorDirerccion);*/
	if(!errorNombre && !errorEmail && !errorTelefono && !errorEmail2){
		
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
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--////////////////////////////////////////CONTENEDOR/////////////////////////////////////////////////////////-->
<div class="contenedorForm">

  <div class="formularioTitulo">1. pon tu anuncio gratis ¡en solo 2 pasos!(anuncios gratis para particulares)</div>
    <div class="formularioForm">
    <form id="registro" name="form1" method="post" action="registro.php" onsubmit="return compForm();">
    <div class="formLegend">datos del anuncio</div>
    <ul>
        <li>
            <label class= "formLabel" for="categoria">Categoria</label>
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
        <li>
            <label class= "formLabel" for="poblacion">Población</label>
            <select class= "formInput" name="poblacion" id="poblacion">
            <option value="0">Selecciona</option>
            <?php echo $this->_tpl_vars['htmlMunicipios']; ?>

            </select>
        </li> 
        <li>
            <label class= "formLabel" for="sexo">Sexo</label>
            <span class= "formInputRadio">
            <input  name="sexo" type="radio" id="h" value="h" />
            <label for="h">Hembra:</label>
            <input type="radio" name="sexo" id="m" value="m" checked="checked"/>
            <label for="m">Macho:</label>
            </span>
        </li>
        <li>
            <label class= "formLabel" for="vacunas">Vacunas</label>
            <span class= "formInputRadio">
            <input name="vacunas" type="radio" id="s" value="s"  />
            <label for="s">Si:</label>
            <input type="radio" name="vacunas" id="n" value="n" checked="checked" />
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
        <li>
            <label class= "formLabel" for="desparasitados">Desparasitados</label>
            <span class= "formInputRadio">
            <input name="desparasitados" type="radio" id="s" value="s"  />
            <label for="s">Si:</label>
            <input type="radio" name="desparasitados" id="n" value="n" checked="checked"/>
            <label for="n">No:</label>
            </span>
        </li>
        <li>
            <label class= "formLabel" for="titulo">Titulo del anuncio</label>
            <input class= "formInput" type="text" name="titulo" id="titulo" />
        </li> 	
        <li>
            <label style=" margin-bottom:90px" class= "formLabel" for="descripcion">Descripción</label>
          	<textarea rows="3" cols="20" name="descripcion" class="formInput" style="width: 311px; height: 125px;"></textarea>
      	</li>
        <li style="clear:both"></li>
        <li>
            <label class= "formLabel" for="precio">Precio</label>
            <input class= "formInput" type="text" name="precio" id="precio" />€
        </li>
          
    </ul>
    <div class="formLegend">Imagenes</div>
    <ul>
    	<li>
        	<label class="formLabel" for="imagen">Imagen</label>
       		<input name="imagen" type="file" /> 
        </li>
    </ul>
  	<div class="formLegend">Datos para que contacten contigo</div>
    <ul>
    	<li>
        	<label class= "formLabel" for="tipoCliente">Eres</label>
          <span class= "formInputRadio">
            <input name="tipoCliente" type="radio" id="Pro" value="Pro"  />
            <label for="Pro">Profesional:</label>
            <input type="radio" name="tipoCliente" id="Par" value="Par" checked="Par" />
            <label for="Par">Particular:</label>
          </span>
        </li>
        <li>
        	 <label class= "formLabel" for="nombre">Nombre:</label>
            <input class= "formInput" type="text" name="nombre" id="nombre" value="<?php echo $this->_tpl_vars['nombre']; ?>
"  onblur="valida(this.value);"/>
        </li>
        <li class="error" id="errorNombre"><?php echo $this->_tpl_vars['errorNombre']; ?>
</li>
        <li>
         <label class= "formLabel" for="mail">e-mail:</label>
            <input class= "formInput" type="text" name="email" id="email" value="<?php echo $this->_tpl_vars['email']; ?>
" onblur="compEmail(this.value)"/>
        </li>
        <li class="error" id="errorEmail"><?php echo $this->_tpl_vars['errorEmail']; ?>
</li>
        <li>
       	  <label class= "formLabel" for="confEmail">Confirmar e-mail:</label>
          <input class= "formInput" type="text" name="confEmail" id="confEmail" value="<?php echo $this->_tpl_vars['email2']; ?>
" onblur="confEmail(this.value)" />
        </li>
        <li class="error" id="errorEmail2"><?php echo $this->_tpl_vars['errorEmail2']; ?>
</li>
        <li>
        	<label class= "formLabel" for="telefono">Telefono:</label>
            <input class= "formInput"name="telefono" type="text" id="telefono" value="<?php echo $this->_tpl_vars['telefono']; ?>
" onBlur="compTel(this.value)" autocomplete="off" />
        </li>
        <li class="error" id="errorTelefono"><?php echo $this->_tpl_vars['errorTelefono']; ?>
</li>
        <li>
       	  <input name="acepto" type="checkbox" value="acepto" />Acepto las condiciones de uso y la Política de Privacidad.
        </li>
    </ul>
    </form>
    </div>
    <div class="formularioReglas">
    Para una compra-venta con éxito
    <p>Pon un anuncio por cada artículo</p>
    <p>El título debe ser lo más descriptivo posible</p>
    <p>Revisamos todos los anuncios</p>
    <p>No pongas el mismo anuncio más de una vez</p>
    <p>Los anuncios que no cumplan las normas no se publicarán</p>
    Consulta nuestras reglas de inserción.
    
    </div>
    
	<div style="clear:both"></div>    
</div>

<div class="formularioInfo">
    Poner un anuncio como particular en segundamano.es es gratis. Antes de ser publicado, nuestro equipo de moderación lo revisará. El anuncio durará cuatro meses (un mes para profesionales) y durante este periodo, podrás modificarlo, contratar productos o eliminarlo en cualquier momento.
    Ver reglas de inserción
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