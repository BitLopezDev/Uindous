<?php
if($_GET["foto"]){

/**/
	$archivo =$_GET["foto"];


if (file_exists($archivo)) {
	touch($archivo);
	unlink($archivo);	
}else{header("location:../../SOS/BSapp.php?error=El archivo no existe. Problablemente ya haya sido eliminado, o haya cambuiadio de nombre.&app=Explorer");}
	

/**/
	header("location:done.php");
}else{header("location:../../SOS/BSapp.php?error=No se ha indicado el archivo que se debe modificar.&app=Explorer");}



echo $archivo;
?>