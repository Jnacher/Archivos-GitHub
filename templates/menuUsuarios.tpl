<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu usuario</title>
<meta name="descripción" 	content="AMenu usuarios, panel de control">
<meta name="palabras clave" content="material, adopciones, montas, modificar anuncios, busco cachorro">
<meta name="keywords" 		content="anuncia mascotas, anunciamascotas, anuncia perros"/>

<link href="css.css" rel="stylesheet" type="text/css" />
<link href="../css.css" rel="stylesheet" type="text/css" />


  
{literal}

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
   
{/literal} 

</head>

<body>
{include file="cabecera.tpl"}

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

{include file="pie.tpl"}

</body>
</html>
