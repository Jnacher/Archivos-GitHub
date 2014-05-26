<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mensaje</title>
<meta name="descripción" 	content="Mensajes de usabilidad de la web anunciamascotas">
<meta name="palabras clave" content="anuncia, anuncio, compra perros, venta perros, compra cachorros, venta cachorros">
<meta name="keywords" 		content="mil mascotas, milmascotas, mil perros"/>

<link href="css.css" rel="stylesheet" type="text/css" />
<link href="../css.css" rel="stylesheet" type="text/css" />

{literal}
<style type="text/css">

.contenedorMensajes {
	min-height:300px;
	width: 700px;
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
	background-color:#FFFFFF;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	font-family: Petita,Arial,Helvetica,sans-serif;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
	padding: 10px;
	text-align: center;
	border: thin solid #CCC;
} 
.contenedorMensajes img {
	padding-right: 10px;
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

<div class="contenedorMensajes">
{if $ref=='cont'}
    {if $res=='ok'}
    <div class="Estilo2"><img src="recursos/formularios/check_mark_32x32.png" width="15" height="15" alt="ok" /> Su mensaje se envió correctamente.</div>
    {else}
    <div class="Estilo1"><img src="recursos/formularios/error.png" width="15" height="15" alt="error" /> Ocurrió un error en el envió del mensaje, inténtelo más tarde.</div>
    {/if}
{/if}

{if $ref=='reg'}
    {if $res=='ok'}
    <div class="Estilo2">
      <p><img src="recursos/formularios/check_mark_32x32.png" width="15" height="15" alt="ok" /> En breves recibirá un correo electrónico para activar su cuenta de usuario.</p>
      <p>Una vez recibido, dándole en el link que le aparecerá, su cuenta se activara automáticamente y ya podrá beneficiarse de las ventajas que tiene anunciamascotas.com, podrá poner anuncios gratuitamente en todos los apartados de la web.</p>
      <p>Un cordial saludo del equipo de anuncia mascotas y gracias por utilizar nuestros servicios.</p>
    </div>
    {else}
    <div class="Estilo1">
      <p><img src="recursos/formularios/error.png" width="15" height="15" alt="error" /> Ocurrió un error en el registro, inténtelo más tarde y si no puede envié un correo electrónico a info@anunciamascotas.com exponiendo lo sucedido, le responderemos con la máxima brevedad.</p>
      <p> Un cordial saludo del equipo de anuncia mascotas y gracias por utilizar nuestros servicios. </p>
    </div>
    {/if}
{/if}

{if $ref=='activar'}
    {if $res=='ok'}
    <div class="Estilo2"><img src="recursos/formularios/check_mark_32x32.png" width="15" height="15" alt="ok" /> Su cuenta ha sido activada.</div>
    {else}
    <div class="Estilo1"><img src="recursos/formularios/error.png" width="15" height="15" alt="error" /> Ocurrió un error en la activavión de la cuenta, inténtelo más tarde.</div>
    {/if}
{/if}

{if $ref=='upAnuncio'}
    {if $res=='ok'}
    <div class="Estilo2"><img src="recursos/formularios/check_mark_32x32.png" width="15" height="15" alt="ok" /> Su anuncio ha sido actualizado correctamente.</div>
    {else}
    <div class="Estilo1"><img src="recursos/formularios/error.png" width="15" height="15" alt="error" /> Ocurrió un error en la actualización del anuncio, inténtelo más tarde.</div>
    {/if}
{/if}

{if $ref=='inAnuncio'}
    {if $res=='ok'}
    <div class="Estilo2"><img src="recursos/formularios/check_mark_32x32.png" width="15" height="15" alt="ok" /> Su anuncio ha sido insertado correctamente.</div>
    {else}
    <div class="Estilo1"><img src="recursos/formularios/error.png" width="15" height="15" alt="error" /> Ocurrió un error en la inserción del anuncio, inténtelo más tarde.</div>
    {/if}
{/if}
</div>

<div class="publicidadHorizontal">
        <span>Publicidad </span>
</div>
<!--////////////////////////////////////////FIN CONTENEDOR/////////////////////////////////////////////////-->
{include file="pie.tpl"}


</body>
</html>
