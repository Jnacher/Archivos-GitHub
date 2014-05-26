<?php /* Smarty version 2.6.20, created on 2012-09-20 02:28:31
         compiled from tiendasEmpresas.tpl */ ?>
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
.contenedorInicio{
	width:900px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
	padding: 10px;
}
.contenedorDentroInicio{
	width:650px;
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
	background-color:#FFFFFF;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	float:left;
	padding:10px;
	min-height:700px;
}

.muestraPerreras{
	float:left;
	width: 580px;
	font-size: 18px;
	font-weight: 400;
	font-variant: small-caps;
	color: #69F;
	text-align: justify;
	margin-left: 50px;
	margin-top: 20px;
}
.cabeceraProtectoras {
	float: left;
	width: 640px;
	margin-top: 20px;
	margin-bottom: 10px;
	border-top-width: thin;
	border-bottom-width: thin;
	border-top-style: solid;
	border-bottom-style: solid;
	border-top-color: #CCC;
	border-bottom-color: #CCC;
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #333;
	font-weight: bold;
	display: inline;	
}
.cabeceraProtectorasSub {
	float: left;
	width: 640px;
	margin-bottom: 10px;
	border-bottom-width: thin;
	border-bottom-style: solid;
	border-bottom-color: #CCC;
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #999;
	font-weight: bold;
	display: inline;
}
.cabeceraProtectorasSub .uno {
	float: left;
	width: 120px;
	text-align:center;
	padding:5px;	
}
.cabeceraProtectorasSub .dos {
	float: left;
	width: 120px;
	text-align:center;
	padding:5px;
	color:#333;	
}
.cabeceraProtectorasSub .tres {
	float: left;
	width: 200px;
	text-align:center;
	padding:5px;	
}
.cabeceraProtectorasSub .cuatro {
	float: left;
	width: 120px;
	text-align:center;
	padding:5px;	
}
.cabeceraProtectorasSub .cuatro a {
	color:#999;
	text-decoration: none;
}
.cabeceraProtectorasSub .cuatro a:hover {
	color:#69F;
}
.cabeceraProtectorasSub .cuatro a:visited {
	color:#CCC;
}


.cabeceraProtectoras .uno {
	float: left;
	width: 120px;
	text-align:center;
	padding:5px;	
}
.cabeceraProtectoras .dos {
	float: left;
	width: 120px;
	text-align:center;
	padding:5px;	
}
.cabeceraProtectoras .tres {
	float: left;
	width: 200px;
	text-align:center;
	padding:5px;	
}
.cabeceraProtectoras .cuatro {
	float: left;
	width: 120px;
	text-align:center;
	padding:5px;	
}
.cabeceraProtectoras span {
	font-size: 14px;
	color: #333;
	display: inline;
	float: left;
	width: 280px;
	text-align: center;
}

.contenedorInicio .contenedorDentroInicio .menu {
	font-size: 18px;
	font-weight: bold;
	color: #666;
	padding: 10px;
	float: left;
	width: 600px;
}
.contenedorInicio .contenedorDentroInicio .tituloConsejo {
	font-size: 18px;
	font-weight: 400;
	font-variant: small-caps;
	color: #666;
	float: left;
	width: 650px;
	border-bottom-width: thin;
	border-bottom-style: dotted;
	border-bottom-color: #333;
	margin-bottom: 10px;
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
<div class="contenedorInicio">
<div class="contenedorDentroInicio">
    <div class="menu">
      			<ul>
      			<li>
                <span style="margin-right:20px;">Elige tu ciudad</span>
                	<form name="buscar" id="buscar" method="post" action="tiendasEmpresas.php">
                    <select class= "formInput" name="provincia" id="provincia" tabindex="2">
                    <option value="0">Cualquiera</option>
                    <?php echo $this->_tpl_vars['htmlProv']; ?>

                    </select>
                    <input type="submit" name="actualizar" id="actualizar" value="Actualizar" />
                    </form>
                </li>
                </ul>
    </div>
      
      
    <div class="muestraPerreras">
          Busca los empresas de tu ciudad »
    </div>
     
     <div class="cabeceraProtectoras">
      	
        <div class="uno">Nombre</div>
        <div class="dos">Teléfono</div>
        <div class="tres">Web de la empresa</div>
        <div class="cuatro">Anuncios</div>
      	
    </div>
             <?php echo $this->_tpl_vars['infoProtectoras']; ?>

    
	</div>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menuLateral.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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