<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Email de bienvenida</title>
{literal}
<style type="text/css">
a{
	text-decoration: none;
}
a:link{
	color: #FF9900
}
a:hover{
	color: #6699CC;
}
#cuerpoEmail {
	width: 600px;
	padding: 30px;
	float: left;
	font-family: Petita, Arial, Helvetica, sans-serif;
}
#cuerpoEmail .img {
	float: left;
	width: 600px;
	margin-bottom: 10px;
}
#cuerpoEmail .texto {
	float: left;
	width: 600px;
	margin-bottom: 10px;
	color: #666;
	margin-top: 10px;
	text-align: center;
	font-family: Petita, Arial, Helvetica, sans-serif;
}
</style>
{/literal}
</head>

<body>
<div id="cuerpoEmail">
		<div class="img"><a href="http://www.anunciamascotas.com"><img src="http://www.anunciamascotas.com/recursos/logo-menu.png" width="400" height="100" alt="www.anunciamascotas.com" /></a></div>
      	<div class="texto">Ya estas registrado en el portal, tan solo te queda confirmar el registro accediendo al enlace que aparece en el inferior y estaras dado de alta definitivamente</div>
      	<div align="center" class="titulos2"><a href="{$enlace}">Confirma tu subscripcion aqui</a></div>
  
  		<div class="texto">Una vez hecha la confirmacion ya podras anunciarte en todos los apartados de anunciamascotas.com.</div>
        
        
</div>
</body>
</html>
