<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ver razas</title>
<meta name="descripción" 	content="ver razas informacion de perros, gatos, caballos, peces, conejos...">
<meta name="palabras clave" content="razas, especies, canes, can, anuncios">
<meta name="keywords" 		content="anuncia mascotas, anunciamascotas, anuncia perros"/>

<link href="css.css" rel="stylesheet" type="text/css" />
<link href="../css.css" rel="stylesheet" type="text/css" />


  
{literal}
<style type="text/css">
 
.contenedorForm .formularioForm .titulo {
	float: left;
	width: 680px;
	font-variant: small-caps;
	text-transform: capitalize;	
}
.contenedorForm .formularioForm {
	font-size: 12px;
	color: #666;
	font-family: Petita, Arial, Helvetica, sans-serif;
}
.contenedorForm .formularioForm .menu {
	display: inline;
	float: left;
	width: 640px;
	padding: 20px;
}
.contenedorForm .formularioForm .menuRef {
	float: left;
	padding: 20px;
}
.razas-destacado-top {
    float: left;
    margin-right: 10px;
    margin-top: 20px;
    width: 160px;
}
.razas-destacado {
    float: left;
    margin-right: 10px;
    margin-top: 20px;
    width: 250px;
}
.contenedorForm .formularioForm .imagen img {
	padding: 10px;
	float: left;
	width: 200px;
	border: thin solid #CCC;
}
.contenedorForm .formularioForm .info .imagenInfo {
	height: 100px;
	padding-bottom:15px;

}
.contenedorForm .formularioForm .info .textoRazaTitulo {
	font-size: 12px;	
	color:#999;
}
.contenedorForm .formularioForm .info {
	float: left;
	width: 450px;
	display: inline;
	padding-top: 20px;
	padding-bottom: 20px;
	padding-left: 10px;
}
.contenedorForm .formularioForm .infoGeneral {
	padding: 10px;
	float: left;
	width: 680px;
}
.contenedorForm .formularioForm .info .subTituloRaza {
	font-size:16px; 
	color:#6699FF;
	padding:5px;
	padding-bottom:15px;
}
.contenedorForm .formularioForm .titulo {
	padding: 10px;
	float: left;
	width: 680px;
	font-size:20px;
	color:#6699FF;
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-weight: 800;
}
.contenedorForm .formularioForm .razaDestacado {
	padding: 5px;
	padding-bottom:15px;
	float: left;
	width: 680px;
	font-size:14px;
	color:#6699FF;
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-weight: 400;
	font-variant: small-caps;
	text-transform: capitalize;
}
.contenedorForm .formularioForm .razaNombre {
	float: left;
	width: 680px;
	font-size:12px;
	color:#333;
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-weight: 600;
}

.contenedorForm .botonArriba {
	height: 32px;
	padding: 5px;
	float: left;
	width: 900px;
}
.contenedorForm  a .botonArriba{
	background-image: url(recursos/formularios/left_arrow_32x32.png);
	background-repeat: no-repeat;
	background-position: left;
}
.contenedorForm  a:hover .botonArriba{
	background-image: url(recursos/formularios/left_arrowRojo.png);
	background-repeat: no-repeat;
	background-position: left;
}
.contenedorForm  a:visited .botonArriba{
	background-image: url(recursos/formularios/left_arrow_Gris.png);
	background-repeat: no-repeat;
	background-position: left;
}
</style>
{/literal}


</head>

<body>
{include file="cabecera.tpl"}

<!--////////////////////////////////////////CONTENEDOR/////////////////////////////////////////////////////////-->
        <div class="publicidadHorizontal">
        <span>Publicidad </span>
        </div>
        
<div class="contenedorForm">
	
   
    
  <a href="razas.php"><div class="botonArriba"></div></a>
  
  <div class="formularioForm">
    
    <div class="titulo">{$nombre}</div>
    <div class="imagen"><img src="images/imagenesRaza/{$rutaImagenRaza}" width="200" height="200" /></div>
    
    <div class="info">
    
        <div class="razas-destacado-top">
          <div class="subTituloRaza">Pais de origen</div>
         {$imgesS}
          <div class="textoRazaTitulo">El país de origen del {$nombre} es {$pais}</div>
        </div>
        
        <div class="razas-destacado">
        <div class="subTituloRaza">Tamaño de la raza</div>
        {$imgS}
        {$tamS}
    	</div>
        
    </div>
    <div class="razaNombre">Sobre el {$nombre}</div><br /><br />
    
    <div class="infoGeneral">
    
    
    {$historiaI}


	{$caracteristicasI}


	{$temperamentoI}


	{$colorI}


	{$peloI}
    
    
<div class="razaDestacado">Tamaño Y Peso:</div><br /><br />
 	{$dimensionesI}
	{$pesoI}

 	{$cuidadosI}  
    

	{$utilidadI}   


  
    
    </div>
    
  </div>
  <div class="publicidadVertical">
    <span>Publicidad</span>
  </div>
	<div style="clear:both"></div>   
    
    
   
</div>
    
  
    


<!--/////////////////////////////FIN CONTENEDOR///////////////////////////////////////////////////////////////-->

<!--////////////////////////////////////////PIE DE PAGINA//////////////////////////////////////////////////////-->

{include file="pie.tpl"}

</body>
</html>
