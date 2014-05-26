<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listar anuncios</title>
<meta name="descripción" 	content="Listar anuncios de mascotas, animales, perros, gatos, caballos, peces, conejos...">
<meta name="palabras clave" content="anuncios, publicidad, anunciar, direccion, gratis anuncios">
<meta name="keywords" 		content="anuncia mascotas, anunciamascotas, anuncia perros"/>

<link href="css.css" rel="stylesheet" type="text/css" />
<link href="../css.css" rel="stylesheet" type="text/css" />


  
{literal}

<style type="text/css">
.contenedorInicio{
	width:900px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
	padding: 10px;
	font-family: Petita,Arial,Helvetica,sans-serif;
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
}

.contenedorInicio .contenedorDentroInicio table .titulo {
	font-size: 18px;
	font-weight: 700;
	color: #FFF;
	background-color: #CCC;
	text-align: center;
}
.contenedorInicio .contenedorDentroInicio table .contenido {
	font-size: 14px;
	font-weight: 500;
	color: #666;
	text-align: center;
	border-bottom-width: thin;
	border-bottom-style: dashed;
	border-bottom-color: #69F;
	height: 30px;
}
.contenedorInicio .contenedorDentroInicio table .contenido a:link {
	font-size: 14px;
	font-weight: 400;
	color: #333;
	text-align: center;
	text-decoration: none;
}
.contenedorInicio .contenedorDentroInicio table .contenido a:hover {
	color: #69F;
}
.contenedorInicio .contenedorDentroInicio table .contenido a:visited {
	color: #666;
}
</style>
{/literal}
</head>

<body>
{include file="cabecera.tpl"}

<!--///////////////////////////////CONTENEDOR/////////////////////////////////////////////////////////-->
<div class="contenedorInicio">
<div class="contenedorDentroInicio">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr class="titulo">
    <td style="width:300px">Titulo</td>
    <td style="width:300px" colspan="2">Accion</td>
  </tr>
  {$listaAn}
</table>
</div>  
<div class="publicidadVertical">
    <span>Publicidad</span>
  </div>
  <div style="clear:both"></div>
</div>

<!--/////////////////////////////FIN CONTENEDOR///////////////////////////////////////////////////////-->

<!--/////////////////////////////PIE DE PAGINA///////////////////////////////////////-->

{include file="pie.tpl"}
</body>
</html>
