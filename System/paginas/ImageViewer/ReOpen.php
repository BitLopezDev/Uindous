<?php

session_start();
if ($_SESSION['acceso']!="1")
{
	header("Location:../../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/paginas/ImageViewer.php&hacia=ImageViewer");
	exit;
}
if(file_exists("../../../Users/admin/AppData/temp/temporalarchvoabierto.ImgVwrCde.IVsys1AsaIV0001tmpfloplgInwhle.tmp")){

$temporalarchvoabierto =fopen("../../../Users/admin/AppData/temp/temporalarchvoabierto.ImgVwrCde.IVsys1AsaIV0001tmpfloplgInwhle.tmp","r");

   $lineatemporalarchvoabierto=fgets($temporalarchvoabierto);

   if ($lineatemporalarchvoabierto!="") {
 
   	header("location:../ImageViewer.php?$lineatemporalarchvoabierto");
   }

fclose($temporalarchvoabierto);
}else{
	//echo("Hola");
	 	header("location:../ImageViewer.php");
}
?>
