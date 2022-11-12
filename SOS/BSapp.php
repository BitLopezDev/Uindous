<?php

?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8"/>
	<title>STOP: Error</title>
	<style type="text/css">
html{

	background-color: #08088A;
	color:#A4A4A4;
	font-size:2em;
	/*cursor:none;*/
	width:100%;
	height:100%;
}
a{
	color: white;
}
.

	</style>
	<script type="text/javascript">
		window.onload=function(){


		}


	</script>
</head>
<body>
Un problerma ha sido detectado, por lo cual el sistema decidió detenerse para evitar más daños.<br>
 
<br>
<strong>ERROR_APLICACION(APP_ERROR)</strong><br><br>
Si esta es la primera vez que ve esta pantalla de error, por favor reinicie el sistema. <br>
Si el problema persiste, en ese caso habrá re reparar el sistema manualmente, o aplicar actualizaciones con el fin de reparar el sistema.<br>


<?php
 if (isset($_GET['error'])) {
$error=$_GET['error'];
echo("<br>Información técnica:
<br><br>
<strong>Error:</strong> ".$error);

       

       }else{
       	Echo("<strong><br><br>No hay información técnica sobre este error.</strong>");
       }


if (isset($_GET['app'])) {
$app=$_GET['app'];
echo("<br><br>

<strong>Aplicación/archivo que ha fallado:</strong> ".$app);

       

       }else{
echo("<br><br>

No hay información sobre la aplicación/el archivo que ha fallado.");
       }
if (isset($_GET['detalle'])) {
$detalle=$_GET['detalle'];
echo("<br><br>

<strong>Detalles:</strong> ".$detalle);

       

       }

if (isset($_GET['ExtraInf'])) {
$detalle=$_GET['ExtraInf'];
echo("<br><br>

<strong>Información adicional:</strong> ".$ExtraInf);

       

       }


?>
<!--
*** STOP: 0x000000e2 (0x0000000, 0x0000000, 0x0000000, 0x0000000)<br>-->
<!--
***kbdhid.sys - Address 0x94efd1aa base at 0x94efb000 DateStamp 0x4a5bc705-->
<br>
</p>

</body>
</html>