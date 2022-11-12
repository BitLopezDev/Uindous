

<?php
if($_GET["update"]){
	$archivo = "../".$_GET["update"];
	touch($archivo);

	unlink($archivo);
	header("location:../../update.php");
}?>

<!DOCTYPE html>
<html>
<head>
	<title>Terminando de actualizar...</title>
</head>
<body>

</body>
</html>