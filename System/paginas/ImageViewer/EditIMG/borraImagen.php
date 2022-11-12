<?php
if($_GET["foto"]){
	$archivo = "../../".$_GET["foto"];
	touch($archivo);
	unlink($archivo);	
	header("location:done.php");
}else{
	header("location:../../../../SOS/BSapp.php?error=No se ha indicado el archivo que se debe eliminar.&app=ImageViewer");
}

?>