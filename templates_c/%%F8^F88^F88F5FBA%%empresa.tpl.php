<?php /* Smarty version 2.6.20, created on 2012-09-12 23:00:47
         compiled from empresa.tpl */ ?>
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
	min-height:600px;
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
   	<div class="imagen"><img src="recursos/bajoProtectora.png" width="650" height="200" /></div>
    
    
    
    
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