<?php /* Smarty version 2.6.20, created on 2012-09-21 18:28:17
         compiled from cabecera.tpl */ ?>
<link rel="icon" type="image/png" href="recursos/favicon.png" />
<!--<?php echo '-->
<style type="text/css">
.login {
	width: 380px;
	margin-bottom: 5px;
	float: left;
	text-align: right;
}

.login span {
	float: left;
	padding:5px;
}
.logoMenu {
	float: left;
	width: 530px;
	margin-top: 5px;
	margin-left: 5px;
}
.botonesMenu {
	float: left;
	width: 940px;
	margin-left: 25px;
}
.destacado {
	float: left;
	width: 700px;
	font-weight: bolder;
	color: #09C;
	font-family: Petita, Arial, Helvetica, sans-serif;
	font-size: 12px;
	margin-left:120px;
}
.cabeceraMenu span a {
	float:left;
	font-size: 20px;
	font-weight: 500;
	color: #666;
	text-decoration: none;
	font-family:\'FFF_Tusj\', Helvetica, Arial, sans-serif;
	text-transform: capitalize;
	margin-left: 20px;
}
.cabeceraMenu span a:hover {
	color: #69F;	
}
.cabeceraMenu span a:visited {
	color: #69C;	
}
.cabeceraMenu{
	font-size: 11px;
	font-weight: 500;
	color: #666;
	text-decoration: none;
	font-family:\'FFF_Tusj\', Helvetica, Arial, sans-serif;
	text-transform: capitalize;
}
.cabeceraMenu .login img {
	float:left;
	padding-top: 12px;
	padding-left: 10px;
}
.cabeceraMenu a {
	float:left;
	padding:5px;
	font-size: 12px;
	font-weight: 500;
	color: #666;
	text-decoration: none;
	font-family:\'FFF_Tusj\', Helvetica, Arial, sans-serif;
	text-transform: capitalize;
	
}
.cabeceraMenu a:hover {
	color: #69F;
}
.cabeceraMenu a:visited {
	color: #69C;
}

@font-face {
         font-family: \'FFF_Tusj\';
         src: url(\'font/Pacifico.ttf\') format(\'truetype\');
         font-weight: normal;    font-style: normal;		
}

</style>
<!--'; ?>
-->

<div class="cabeceraMenu">
	<div class="logoMenu"><a href="index.php"><img src="recursos/logo.png" width="482" height="50" alt="anunciamascotas.com" /></a></div>
    
  <div class="login">
    <?php if (! $this->_tpl_vars['user']): ?>
    <a style="margin-left:200px;" href="registro.php">Nuevo registro</a>
    <a style="margin-left:5px;" href="login.php">Entrar</a>
    <?php else: ?>
    <span style="margin-left:50px;">Hola <b style="font-size:12px;"><?php echo $this->_tpl_vars['nombre']; ?>
</b></span>
    <a style="margin-left:5px;" href="index.php?cerrar=act"> Cerrar sesion</a>
    <a style="margin-left:5px;" href="menuUsuarios.php">Panel de control</a>
    <?php endif; ?>
    </div>
    
  <div class="botonesMenu">
    <span><a href="index.php">Inicio</a></span>
    <span><a href="registroAnuncioCompraVenta.php">poner anuncio</a></span>
    <span><a href="adopcionesVi.php">adopción</a> </span>
    <span><a href="compraVentaVi.php">compra y venta</a></span>
    <span><a href="montasVi.php">busco novi@</a></span>
	<span><a href="materialVi.php">Material</a></span>
    </div>
  	<div class="destacado">
    <span>¡En 1 minuto!</span>
    </div>
    
    
    
  	
    
    
</div>
