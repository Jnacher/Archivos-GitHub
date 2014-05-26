<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Criadores</title>
<meta name="descripción" 	content="Anuncios de criadores de mascotas, animales, perros, gatos, caballos, peces, conejos...">
<meta name="palabras clave" content="criadores, telefono, email, direccion, web">
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
   
{/literal} 

</head>

<body>
{include file="cabecera.tpl"}

<!--////////////////////////////////////////CONTENEDOR/////////////////////////////////////////////////////////-->
<div class="contenedorInicio">
<div class="contenedorDentroInicio">
    <div class="menu">
      			<ul>
      			<li>
                <span style="margin-right:20px;">Elige tu ciudad</span>
                	<form name="buscar" id="buscar" method="post" action="criadores.php">
                    <select class= "formInput" name="provincia" id="provincia" tabindex="2">
                    <option value="0">Cualquiera</option>
                    {$htmlProv}
                    </select>
                    <input type="submit" name="actualizar" id="actualizar" value="Actualizar" />
                    </form>
                </li>
                </ul>
    </div>
      
      
    <div class="muestraPerreras">
          Busca los <b style="font-weight: 900;">criadores</b> de tu ciudad »
    </div>
      

    <div class="cabeceraProtectoras">
      	
        <div class="uno">Nombre</div>
        <div class="dos">Teléfono</div>
        <div class="tres">Web de la criador</div>
        <div class="cuatro">Anuncios</div>
      	
    </div>
      
    <!--<div class="cabeceraProtectorasSub">
        <div class="uno">NombreEjemplo</div>
        <div class="dos">669587889</div>
        <div class="tres">www.ejemploProtectora.com</div>
        <div class="cuatro"><a href="empresa.php">Ver anuncios</a></div>  
    </div>
    
    <div class="cabeceraProtectorasSub">
        <div class="uno">NombreEjemplo</div>
        <div class="dos">669587889</div>
        <div class="tres">www.ejemploProtectora.com</div>
        <div class="cuatro"><a href="#">Ver anuncios</a></div>   
    </div>
    
    <div class="cabeceraProtectorasSub">
        <div class="uno">NombreEjemplo</div>
        <div class="dos">669587889</div>
        <div class="tres">www.ejemploProtectora.com</div>
        <div class="cuatro"><a href="#">Ver anuncios</a></div>   
    </div>-->
            
     {$infoProtectoras}
  </div>

	{include file="menuLateral.tpl"}
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
