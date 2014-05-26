<?php 
require_once('phpIncludes/config.php');
if(isset($_POST['email']) && isset($_POST['pass'])){
	  $Email=sanitize(trim($_POST['email']), SQL);
	  $Password=md5(trim($_POST['pass']));// $db->debug=true;
	  $sql="select usuarioId, nombre from usuarios where email='$Email' and pass='$Password'";
	  $res=$db->GetRow($sql);
	  if(sizeof($res)>0){
		$_SESSION['idUser']=$res['usuarioId'];
		$_SESSION['expiraUser']=time();
		$_SESSION['nombre']=$res['nombre'];
		$sy->assign('nombre',$res['nombre']);
		$sy->assign('sesion',true);
		$sesion=true;
		header('location: index.php');
	  }else{
		$sy->assign('errorLogin','<span class="error">email y pass no son correctos</span>');
		$sy->assign('mal',true);
	  }   	  
}elseif($_GET['olvide']){	
  $email=sanitize(trim($_GET['olvide']), SQL);
  $sql="select usuarioId from usuarios where email='$email' and activo='s'";
  $res=$db->GetRow($sql);
  if(sizeof($res)>0){  
	$pass=substr(md5(rand(0,9999)),0, 7);
	$sqlIn="update usuarios set pass='$pass' where usuarioId=".$res['usuarioId'];
	if($db->execute($sqlIn)){
	  $sy->assign('pass', $pass);
	  $htmlBody=$sy->fetch('emailRecuperacion.tpl');
	  $cabeceras = "Content-type: text/html\r\n"; 
	  $cabeceras .= 'To: <'.$Email.'>' . "\r\n";
	  $cabeceras .= 'From: www.anunciamascotas.com' . "\r\n";          
      $enviarMail = @mail ($Email, 'Recordatorio de contraseña', $htmlBody, $cabeceras);
		if($enviarMail){
		 $resultado= 'Has recibido un email con la nueva contraseña';
		}else{
		  $resultado= 'El email proporcionados no existe';
		} 
	}
	
  }else{
    $resultado= 'El email proporcionado no existe';
  }
  
  $sy->assign('mensajeOlvide','<span class="mensaje">'.$resultado.'</span>');

}

$sy->display('login.tpl');
?>