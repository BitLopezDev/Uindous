<?php
$text=$_POST["editor1"];

if (isset($_POST['ruta'])) {

$ruta=$_POST["ruta"];

$archivo =fopen($ruta,"w+");
   
   
    fwrite($archivo,$text);
   
fclose($archivo);
header("location:../notepad.php");
}else{
echo "Aun no se pueden crear archivos";

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Guardando archivo</title>
</head>
<body>

</body>
</html>

