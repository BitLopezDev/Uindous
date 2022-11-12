<?php

if (isset($_GET['disk']) && isset($_GET['oa'])) {
	$disk=$_GET['disk'];
	$oa=$_GET['oa'];
	$ruta="../part/".$disk."/BitLocker/btlckr.php";
	$archivo =fopen($ruta,"w+");
   
   
    fwrite($archivo,'$Clave_btlckr_Local="'.$oa.'";');
   
fclose($archivo);
header("location:BitLocker.php");
}

?>
