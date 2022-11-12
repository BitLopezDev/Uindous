<?php

if (isset($_GET['disk']) && isset($_GET['oa'])) {
	$disk=$_GET['disk'];
	$oa=$_GET['oa'];
	$ruta="../part/".$disk."/BitLocker/btlckr.js";
	$archivo =fopen($ruta,"w+");
   
   
    fwrite($archivo,"

  do{

    var Clave=prompt('Intruduzca la contraseña de BitLocker');
  }while(Clave!='".$oa."');
");
   
fclose($archivo);
header("location:BitLocker.php");
}

?>
