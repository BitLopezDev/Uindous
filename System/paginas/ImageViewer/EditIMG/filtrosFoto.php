<?php
if(isset($_GET["foto"])==false){
		header("location:../../personalizar.php");
		exit;
	}
	$foto = $_GET["foto"];
	$filtro = $_GET["op"];
	$nombre = $_GET["nombre"];
	$direccion = $_GET["direccion"];
	
	$archivo = "../../".$foto;
	
	$info = getimagesize($archivo);
	$ancho = $info[0];
	$alto = $info[1];
	$tipo = $info["mime"];

	switch($tipo){
		case "image/jpg":
		case "image/jpeg":
			$imagen = imagecreatefromjpeg($archivo);
			break;
		case "image/png":
			$imagen = imagecreatefrompng($archivo);
			break;	
		case "image/gif":
			$imagen = imagecreatefromgif($archivo);
			break;
	}
	/*if ($tipo=="image/jpg" || $tipo=="image/jpeg") {
$imagen = imagecreatefromjpeg($archivo);
	}else if ($tipo=="image/png") {
	$imagen = imagecreatefrompng($archivo);
	}else if ($tipo=="image/gif") {
$imagen = imagecreatefromgif($archivo);
	}else if ($tipo=="image/vnd.microsoft.icon") {
$imagen = imagecreatefromjpeg($archivo);
	}*/
	echo $tipo;
	
	if($filtro=="negativo") {
		imagefilter($imagen, IMG_FILTER_NEGATE);
	}
	if($filtro=="grises") {
		imagefilter($imagen, IMG_FILTER_GRAYSCALE);
	}
	if($filtro=="brillo") {
		imagefilter($imagen, IMG_FILTER_BRIGHTNESS, 20);
	}
	if($filtro=="contraste") {
		imagefilter($imagen, IMG_FILTER_CONTRAST, 20);
	}
	
	$lienzo = imagecreatetruecolor($ancho, $alto);
	
	imagecopy($lienzo, $imagen, 0,0, 0,0, $ancho, $alto);
	
	imagejpeg($lienzo, "../../".$direccion.$nombre, 80);
	
	header("location:../../ImageViewer.php?abrir=".$direccion.$nombre."&direccion=".$direccion);


?>
