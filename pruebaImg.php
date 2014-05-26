
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js' type='text/javascript'></script>
<script type="text/javascript" src="jQuery/jquery.MultiFile.js"></script>
<script>
function cambia(){
	alert('<?php
	@$archivo = $_FILES['files'];
	$nombrefile = $_FILES['files']['name'];
	$rutatmp = $_FILES['files']['tmp_name'];
	$rutanueva = "USUARIOS/";
	echo $rutatmp;?>');
}

</script>
</head>

<body>
 <p><input type="file" name="files[]" class="multi accept-jpg|gif|png" onchange="cambia();" maxlength="3"/></p>
</body>
</html>
