<?php /* Smarty version 2.6.20, created on 2012-09-01 18:03:04
         compiled from menuUsuarios.tpl */ ?>
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
.contenedor{
	min-height:500px;
}
.contenedor .izquierda a {
	float: left;
	padding: 20px;
	margin-left: 80px;
	width: 150px;
	height:150px;
	text-align: center;
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #666;
	text-decoration: none;
	font-weight: bolder;
}
.contenedor .izquierda a:hover {
	float: left;
	padding: 20px;
	margin-left: 80px;
	height:150px;
	width: 150px;
	text-align: center;
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #69C;
	text-decoration: none;
	font-weight: bolder;
}
.contenedor .izquierda p {
	margin-top: 20px;
}


</style>
    <script type=>
    
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
<div class="contenedor">
       	
        <div class="izquierda">
        <a href="adopciones.php">
  		<img src="recursos/adopcion.png" width="100" height="100" alt="adopcion" />
  		<p>Insertar anuncios, en ADOPCIONES</p>
		</a>
        </div>
	 
        <div class="izquierda">
        <a href="compraVenta.php">
        <img src="recursos/compra-venta.png" width="100" height="100" alt="compra-venta" />
        <p>Insertar anuncios, en COMPRA-VENTA</p>
        </a>
        </div>
    
        <div class="izquierda">
        <a href="montas.php">
        <img src="recursos/montas.png" width="100" height="100" alt="montas" />
        <p>Insertar anuncios, en BUSCA NOVI@</p>
        </a>
        </div>
    
        <div class="izquierda">
        <a href="material.php">
        <img src="recursos/material.png" width="100" height="100" alt="montas" />
        <p>Insertar anuncios, en Material</p>
        </a>
        </div>
        
        <div class="izquierda">
        <a href="listarAnuncios.php">
        <img src="recursos/modificar.png" width="100" height="100" alt="modificar" />
        <p>Modificar mis anuncios</p>
        </a>
        </div>
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