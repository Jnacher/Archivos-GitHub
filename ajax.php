<?php
require_once('phpIncludes/config.php');
if(isset($_POST['idImg'])){
  $sql="delete from imagenes where imagenId=".sanitize($_POST['idImg'], INT);
  if($db->execute($sql)){
	  echo 'ok';
  }else{
    echo 'ko';
  }
}
