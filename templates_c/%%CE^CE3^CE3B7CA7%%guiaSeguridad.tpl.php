<?php /* Smarty version 2.6.20, created on 2012-09-13 21:30:56
         compiled from guiaSeguridad.tpl */ ?>
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

.error {
	font-family: Petita, Arial, Helvetica, sans-serif;
	position: relative;
	background: #88b7d5;
	border: 2px solid #c2e1f5;
	width: 200px;
	text-align: center;
	margin-left: 370px;
	font-size: 12px;
	font-weight: 700;
	color: #FFF;
	padding: 5px;	
} 

.error:after, .error:before {
	bottom: 100%; 
	border: solid transparent; 
	content: " "; 
	height: 0px; 
	width: 0; 
	position: absolute; 
	pointer-events: none; 
} 
.error:after {
		border-bottom-color: #88b7d5; 
		border-width: 5px; 
		left: 10%; 
		margin-left: -5px; 
} 
.error:before {
	border-bottom-color: #c2e1f5; 
	border-width: 8px; 
	left: 10%; 
	margin-left: -8px; 
}
.errores {
	font-family: Petita, Arial, Helvetica, sans-serif;
	position: relative;
	background: #88b7d5;
	border: 2px solid #c2e1f5;
	width: 200px;
	text-align: center;
	margin-left: 370px;
	font-size: 12px;
	font-weight: 700;
	color: #FFF;
	padding: 5px;
	display:none;	
} 
.errores:after, .error:before {
	bottom: 100%; 
	border: solid transparent; 
	content: " "; 
	height: 0px; 
	width: 0; 
	position: absolute; 
	pointer-events: none; 
} 
.errores:after {
		border-bottom-color: #88b7d5; 
		border-width: 5px; 
		left: 10%; 
		margin-left: -5px; 
} 
.errores:before {
	border-bottom-color: #c2e1f5; 
	border-width: 8px; 
	left: 10%; 
	margin-left: -8px; 
}
.condiciones {
	font-size: 10px;
	color: #999;
	padding-top: 2px;
	padding-right: 2px;
	padding-bottom: 7px;
	padding-left: 2px;
	vertical-align: middle;
}
.formBoton {
	float: right;
	margin-top: 5px;
	margin-right: 20px;
	margin-bottom: 10px;
}
input[type=\'submit\']{
	font-family: sans-serif;
    font-size: 12px;
    color: #798e94;
    border: 1px solid #CED5D7;
    box-shadow:0 0 0 3px #EEF5F7;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: bold;
    text-shadow: 1px 1px 0px white;
    background: #e4f1f6; /* fallback para navegadores que no soporten degradados */
    background: -moz-linear-gradient(top, #e4f1f6 0%, #cfe6ef 100%);
    background: -webkit-linear-gradient(top, #e4f1f6 0%,#cfe6ef 100%);
	cursor:pointer;
}
input[type=\'submit\']:hover{
    background: #edfcff;
    background: -moz-linear-gradient(top, #edfcff 0%, #cfe6ef 100%);
    background: -webkit-linear-gradient(top, #edfcff 0%,#cfe6ef 100%);
}
input[type=\'submit\']:active{
    background: #cfe6ef;
    background: -moz-linear-gradient(top, #cfe6ef 0%, #edfcff 100%);
    background: -webkit-linear-gradient(top, #cfe6ef 0%,#edfcff 100%);
}

.arrow_box {
	position: relative;
	border: 1px solid #f50800;
	font-size: 10px;
	font-weight: lighter;
	color: #900;
	width: 150px;
	margin-left: 370px;
	padding: 3px;
} 
.arrow_box:after, .arrow_box:before { bottom: 100%; border: solid transparent; content: " "; height: 0; width: 0; position: absolute; pointer-events: none; } .arrow_box:after { border-bottom-color: #ffffff; border-width: 5px; left: 50%; margin-left: -5px; } .arrow_box:before { border-bottom-color: #f50800; border-width: 6px; left: 50%; margin-left: -6px; }

.formularioReglas {
	font-size: 12px;
	color: #000;
	font-weight: bold;
	margin-bottom: 10px;
}
.formularioReglas p {
	font-size: 10px;
	color: #666;
	margin-top: 10px;
	margin-bottom: 7px;
}

.formularioReglas A:link {
	font-size: 10px;
	color: #39C;
	text-decoration: none;
}
.formularioReglas A:visited {
	font-size: 10px;
	color: #3CF;
}
.formularioReglas a:hover {
	font-size: 10px;
	color: #06C;
}
#MultiFile1_wrap_labels{
	float:left;
	margin-left: -350px;
}
.contenedorForm .formularioForm {
	font-size: 12px;
	color: #666;
	font-family: Petita, Arial, Helvetica, sans-serif;
}
.contenedorForm .formularioForm a{
	font-size: 12px;
	color:#69F;
	font-family: Petita, Arial, Helvetica, sans-serif;
	text-decoration: none;
	font-weight: bold;
}
.contenedorForm .formularioForm a:hover{
	font-size: 12px;
	color:#06F;
	font-family: Petita, Arial, Helvetica, sans-serif;
}
.contenedorForm .formularioForm a:visit{
	font-size: 12px;
	color:#69F;
	font-family: Petita, Arial, Helvetica, sans-serif;
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
        <div class="publicidadHorizontal">
        <span>Publicidad </span>
        </div>
<div class="contenedorForm">
	
  <div class="formularioForm">
    
    
<p><b style="color:#333333">AVISO DE SEGURIDAD</b></p><br /><br />

<p><b style="color:#333333">Estimado usuario:</b></p>

<p>En anuciamascotas.com se prevé miles de encuentros entre compradores y vendedores. Hay que ir con ojo ya que no todos los anuncios pueden ser legitimos, nos han informado de varios intentos de estafa; te indicamos unas sencillas normas para evitar ese tipo de fraudes, e incluimos algunas recomendaciones para una Venta y Compra Segura.</p><br /><br />

<a href="#detectar">CÓMO DETECTAR ANUNCIOS FALSO</a><br /><br />

<a href="#compra">COMPRA SEGURA</a><br /><br />

<a href="#venta">VENTA SEGURA</a><br /><br />

<a href="#solicitud">SOLICITUD DE DATOS</a><br /><br /><br /><br />

<a name="detectar"></a>
<p id="detectar"><b style="color:#333333">CÓMO DETECTAR ANUNCIOS FALSOS</b></p><br /><br />

   <p> PRECIOS excesivamente baratos, es demasiado llamativo para ser verdad.</p><br />
   <p> El vendedor/comprador reside en el EXTRANJERO
    (Nigeria, Londres, Alemania, etc.)</p><br />
    <p>Anuncios en inglés, mal redactados, o con una mala traducción al castellano.</p><br />
    <p>TELÉFONOS que no existen, Poblaciones y Provincias que no concuerdan (London/Barcelona,...)</p><br />
    <p>e-mail o Nº DE TELÉFONO EXTRANJERO en el Texto del anuncio.</p><br /><br />


<a name="compra"></a>
<p><b style="color:#333333">COMPRA SEGURA</b></p><br /><br />

   <p> REALIZAR LA TRANSACCIÓN PERSONALMENTE, es la mejor opción, es decir, pagar y recoger la mascota en el mismo instante. Es aconsejable llegar a un acuerdo para poder ver la mascota e inspeccionarla antes de la compra. Antes de cerrar la transacción, asegúrate de que el producto cumple con lo que esperas de él; así evitarás posibles inconvenientes.</p><br />
    <p>NO ENVÍES DINERO a través de Western Unión, MoneyGram, Bidpay u otros tipos de pago similares, ya que no pueden garantizar transacciones con desconocidos.</p><br />
    <p>NO TENGAS EN CUENTA mensajes que te llegan suplantando a anunciamascotas.com. En ellos, un agente intermediario se ofrece para una venta segura, o te verifican que una transacción es segura. NO OFRECEMOS ESE SERVICIO, NUNCA INTERVENIMOS EN LA TRANSACCIÓN.</p><br />
   <p> DESCONFÍA de los vendedores que sólo admiten transferencias como forma de pago.</p><br />
    <p>NO ENVÍES DINERO como entrada, señal, garantía, gastos de envío o por cualquier otra razón. Se han dado casos en los que después de que el comprador hace el pago, desaparece todo rastro de contacto del vendedor.</p><br />
    <p>DESCONFÍA de vendedores que NO pueden hablar por teléfono por cualquier excusa.</p><br /><br />


<a name="venta"></a>
<p><b style="color:#333333">VENTA SEGURA</b></p><br /><br />

    <p>LA MEJOR OPCIÓN ES REALIZAR LA TRANSACCIÓN PERSONALMENTE, es decir, cobrar y entregar la mascota en el mismo instante.</p><br />
   <p> CONTRA-REEMBOLSO. Si eliges esta opción para vender un artículo, te informamos que el comprador solo podrá inspeccionar la mascota, si tú lo autorizas indicándolo expresamente.</p><br />
    <p>NO ADMITAS transacciones monetarias vía Western Unión, MoneyGram, Bidpay o tipos de pago similares, ya que no pueden garantizar transacciones con desconocidos.</p><br />
    <p>DESCONFÍA de los compradores que sólo admiten transferencias como forma de pago.</p><br />
    <p>NO ACEPTES Cheques emitidos por un banco si proceden del extranjero.</p><br />
    <p>DESCONFÍA de compradores que NO pueden hablar por teléfono por cualquier excusa.</p><br />
    <p>DESCONFÍA cuando el comprador te ofrezca una cantidad superior a la solicitada.</p><br />
    <p>NO TENGAS EN CUENTA mensajes que te llegan suplantando a anunciamascotas.com. En ellos, un agente intermediario se ofrece para una venta segura, o te verifican que una transacción es segura. NO OFRECEMOS ESE SERVICIO, NUNCA INTERVENIMOS EN LA TRANSACCIÓN.</p><br /><br />


<a name="solicitud"></a>
<p><b style="color:#333333">SOLICITUD DE DATOS</b></p><br /><br />

    <p>Recientemente hemos tenido conocimiento de que se han enviado emails fraudulentos a nuestros clientes, solicitándoles sus datos o claves de acceso a sus cuentas de email. Para evitar ser víctima de un fraude: NUNCA ATIENDAS SOLICITUDES DE CLAVES QUE TE LLEGUEN MEDIANTE UN CORREO ELECTRÓNICO.</p><br />
    <p>Si tienes alguna duda contacta con nosotros a través de info@anunciamascotas.com</p><br /><br />



<p style="color:#333333">Anunciamascotas.com Informa que todo proceso de compra-venta es responsabilidad única y exclusiva del comprador y del vendedor. Los consejos aquí descritos tienen la finalidad de ayudar a realizar las transacciones de forma más segura y disminuir el riesgo de estafa, pero en ningún caso implican un traspaso de responsabilidad hacia anunciamascotas.com.</p><br /><br />

    
   
  </div>
    <div class="formularioReglas">
    <span class="titFormularioReglas">Para una compra-venta con éxito</span>
    <p><img src="recursos/formularios/formularios.png" width="15" height="15" style="padding-right: 5px" />Pon un anuncio por cada artículo</p>
    <p><img src="recursos/formularios/formularios.png" width="15" height="15" style="padding-right: 5px" />El título debe ser lo más descriptivo posible</p>
    <p><img src="recursos/formularios/formularios.png" width="15" height="15" style="padding-right: 5px" />Revisamos todos los anuncios</p>
    <p><img src="recursos/formularios/error.png" width="15" height="15" style="padding-right: 5px" />No pongas el mismo anuncio más de una vez</p>
    <p><img src="recursos/formularios/error.png" width="15" height="15" style="padding-right: 5px" />Los anuncios que no cumplan las normas no se publicarán</p>
    <p><a href="reglas.php">Consulta nuestras reglas de inserción.</a></p>
    
  </div>
    <div class="publicidadVertical">
    <span>Publicidad</span>
    </div>
	<div style="clear:both"></div> 
    
    <div class="formularioInfo">
    <span style="padding-top:5px; padding-bottom:40px; padding-left:20px; padding-right:20px; float:left;"><img src="recursos/formularios/info_32x32.png" width="32" height="32" alt="informacion" /></span>
    <p>Poner un anuncio en <b>anunciamascotas.com</b> es totalmente gratis. Antes de ser publicado, nuestro equipo de moderación lo revisará. El anuncio durará cuatro meses.</p>
  <p>Para anunciarse en los apartados adopciones, busco novi@, tendrás que ser usuario de la Web, aconsejamos que si tiene que utilizar la Web con asiduidad se de de alta como usuario así tendrá varias ventajas, por ejemplo podrá modificar el anuncio y eliminarlo en cualquier momento, además no tendra que poner sus datos en cada anuncio.</p></div> 
  
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