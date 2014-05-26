<?php /* Smarty version 2.6.20, created on 2012-09-10 21:32:05
         compiled from login.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/styleLogin.css" />
<link rel="stylesheet" type="text/css" href="../css/styleLogin.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<?php echo '
<script type="text/javascript">
$(document).ready(function(){

   $(\'#olvide\').click(function(){
     //$(\'#olvide\').attr(\'href\', \'login.php?olvide=\'+$(\'#email\').val());
	 document.location.href ="login.php?olvide="+$(\'#email\').val();
	 return false;
   });
  
});
</script>
'; ?>

</head>


<body>
<div class="content" style="margin-top:100px;">
				<div id="form_wrapper" class="form_wrapper">
				  <form method="post" action="login.php" class="login active">
						<h3>Login</h3>
					  <div>
							<label>Email:</label>
							<input type="text" name="email" id="email" />
							
					</div>
						<div>
							<label>Contraseña: <a id="olvide" href=""  rel="forgot_password" class="forgot linkform">Recordar contraseña?</a></label>
							<input type="password" name="pass" />
							
					</div>
                        <?php echo $this->_tpl_vars['errorLogin']; ?>

                        <?php echo $this->_tpl_vars['mensajeOlvide']; ?>

						<div class="bottom">
						  <input type="submit" value="Login"></input>
							<a href="registro.php" rel="register" class="linkform">No tienes una cuenta aún, Registrate</a>
							<div class="clear"></div>
						</div>
					</form>
					
				</div>
				<div class="clear"></div>
			</div>
</body>
</html>