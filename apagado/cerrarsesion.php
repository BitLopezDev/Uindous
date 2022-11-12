<?php
session_start();
if ($_SESSION['acceso']=="1")
{
	session_destroy();
	
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cerrando Sesion</title>

</body>
</html>
