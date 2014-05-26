<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Razas</title>
<meta name="descripción" 	content="Informacion de todo tipo de razas de mascotas, animales, perros, gatos, caballos, peces, conejos...">
<meta name="palabras clave" content="perro, animal de compañia">
<meta name="keywords" 		content="mil anuncios, mil anuncio, milanuncios"/>

<link href="css.css" rel="stylesheet" type="text/css" />
<link href="../css.css" rel="stylesheet" type="text/css" />


  
{literal}
<style type="text/css">

.contenedorForm .formularioForm {
	font-size: 12px;
	color: #666;
	font-family: Petita, Arial, Helvetica, sans-serif;
}
.contenedorForm .formularioForm .separador {
	color: #F93;
	float: left;
	width: 680px;
	border-bottom-width: thin;
	border-bottom-style: double;
	border-bottom-color: #F93;
	padding-top:10px;
	padding-bottom:10px;
	margin-bottom:20px;
	margin-top:20px;
}

.contenedorForm .formularioForm .cuadro {
	padding: 5px;
	width: 126px;
	float:left;
	height:210px;
}
.contenedorForm .formularioForm .cuadro .imagen {
	margin-left:3px;
	height: 120px;
	width: 120px;
	float:left;
	border: thin solid #999;
}
.contenedorForm .formularioForm .avecedario {
	font-weight: bold;
	background-color: #F2F2F2;
	padding: 10px;
 	font-family: Petita, Arial, Helvetica, sans-serif;
	float:left;
	width:670px;
}
.contenedorForm .formularioForm .avecedario a {
	color: #585858;
	font-family: Petita, Arial, Helvetica, sans-serif;
	padding-left: 7px;
	padding-right: 7px;
	font-size: 14px;
	text-decoration: none;
	
}
.contenedorForm .formularioForm .avecedario a:hover {
	color:#81BEF7;

}
.contenedorForm .formularioForm .avecedario a:visited {
	color: #81BEF7;
}
.contenedorForm .formularioForm .cuadro .textoRaza {
	float:left;
	font-size: 10px;
	color: #666;
	font-family: Petita, Arial, Helvetica, sans-serif;
	text-align: left;
	width: 120px;
}
.contenedorForm .formularioForm .cuadro .textoRaza b {
	font-weight: 800;
	color:#69C;
	font-size: 11px;
}
.contenedorForm .formularioForm .cuadro .linkRaza a {
	float:left;
	font-size: 12px;
	color: #000;
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-decoration: none;
	text-align: center;
	width: 120px;
}
.contenedorForm .formularioForm .cuadro .linkRaza a:hover{
	color: #666;

}
.contenedorForm .formularioForm .cuadro .linkRaza a:visited {
	color: #666;

}
.contenedorForm .formularioForm .menuRaza {
	float: left;
	width: 680px;
	padding: 20px;
}
.contenedorForm .formularioForm li {
	float:left;
	padding-left: 20px;
	padding-bottom: 20px;
	padding-right: 20px;
}
</style><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
   //LIMPIAMOS QUERY
   var address=self.location.href;
   
   $('#categoria').change(function(){
    var cat=$('#categoria').val();
	var query=address.indexOf('?');
    address=address.substr(0,query);
	window.location=address+'?cat='+cat;
   });
   $('#raza').change(function(){
	 var query=address.lastIndexOf('/');
     address=address.substr(0,query);
     window.location=address+'/verRaza.php?razaId='+$('#raza').val();
   });

});
</script>


{/literal}


</head>

<body>
{include file="cabecera.tpl"}

<!--////////////////////////////////////////CONTENEDOR/////////////////////////////////////////////////////////-->
        <div class="publicidadHorizontal">
        <span>Publicidad </span>
        </div>
<div class="contenedorForm">
	
<div class="formularioForm">
<span>Elije categoria y raza y te mostrara las caracteristicas de cada una</span>
 <div class="menuRaza">
    		<ul>
            <li>
            <label style="padding-right:10px;" for="categoria">Categoría</label>
            <select  name="categoria" id="categoria">
            {$htmlCats}
            </select>
       		</li>
            <li>
            <label  style="padding-right:10px;" for="raza">Raza</label>
            <select  name="raza" id="raza">
            
            {$selectRazas}
          	</select>
			</li>
            </ul>
    </div>
<a name="Arriba"></a> 
<div class="avecedario"><a href="#a">A</a>|<a href="#b">B</a>|<a href="#c">C</a>|<a href="#d">D</a>|<a href="#e">E</a>|<a href="#f">F</a>|<a href="#g">G</a>|<a href="#h">H</a>|<a href="#i">I</a>|<a href="#j">J</a>|<a href="#k">K</a>|<a href="#l">L</a>|<a href="#m">M</a>|<a href="#n">N</a>|<a href="#o">O</a>|<a href="#p">P</a>|<a href="#r">R</a>|<a href="#s">S</a>|<a href="#t">T</a>|<a href="#u">U</a>|<a href="#v">V</a>|<a href="#w">W</a>|<a href="#x">X</a>|<a href="#y">Y</a> </div> 


<a name="a"></a> 

{$htmlRazasABC}
	

 
    
  
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
