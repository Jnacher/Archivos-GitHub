<?php 
session_start();
require_once('phpIncludes/pass.php');
require_once('adodb/adodb.inc.php');
require_once('libs/Smarty.class.php');
require_once('phpIncludes/claseValida.php');
require_once('phpIncludes/sanitize.inc.php');
$sy= new Smarty();
$db=ADONewConnection('mysql');
$local=true;
if($local){
  $db->connect('localhost','root','','perro');
}else{
  $db->connect('db428307617.db.1and1.com','dbo428307617',$pass,'db428307617');
}

//////////////////////////////////////////////////////////////////////////////////////////////CHECKEO SESION DE ADMIN
$sesion=false;
if(isset($_SESSION['admin'])){
  if(time() <= $_SESSION['expira']+(60*15)){
	  $sy->assign('admin',true);
	  $admin=true;
	  $_SESSION['expira']=time();
  }else{
      unset($_SESSION['admin']);
	  unset($_SESSION['expira']);
	  $sy->assign('admin',false);
	  $admin=false;
  }
}else{
  $sy->assign('admin',false);
}


//////////////////////////////////////////////////////////////////////////////////////////////CHECKEO SESION DE USUARIO
$user=false;
if(isset($_SESSION['idUser'])){
  if(time() <= $_SESSION['expiraUser']+(60*15)){
	  $sy->assign('user',true);
	  $sy->assign('nombre',$_SESSION['nombre']);
	  $user=true;
	  $_SESSION['expiraUser']=time();
  }else{
      unset($_SESSION['idUser']);
	  unset($_SESSION['expiraUser']);
	  unset($_SESSION['nombre']);
	  $sy->assign('user',false);
	  $user=false;
  }
}else{
  $sy->assign('user',false);
}
$sy->assign('edita', '');
//REDIRIGE A MOVIL
/*require_once('phpIncludes/mobile_device_detect.php');
mobile_device_detect(true,true,true,true,true,true,true,'http://www.jovetravel.com/mobil.php',false)*/
/*$sqlExpira="delete from anuncios where expira <=".time();
$db->execute($sqlExpira);*/

?>