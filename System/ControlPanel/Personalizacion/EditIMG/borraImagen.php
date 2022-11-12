<?php
if($_GET["foto"]){
	$archivo = "../../../../Documents_and_settings/fondos/otras/".$_GET["foto"];
	touch($archivo);
	unlink($archivo);	
}
header("location:../../personalizar.php");
?>