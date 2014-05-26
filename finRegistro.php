<?php
require_once('phpIncludes/config.php');
if(isset($_GET['res'])){
  $sy->assign('res', $_GET['res']);
  $sy->assign('ref', $_GET['ref']);
  $sy->display('finRegistro.tpl');
}
?>