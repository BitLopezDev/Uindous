<?php
$archivo =fopen("../BootCount/BSCount.inf","a+");
   $linea=fgets($archivo);
   if($linea=="11"){echo('<script type/text="javascript" language="javascript">window.location="BSD.php"</script>');}else {
    fwrite($archivo,"1");
   }
fclose($archivo);
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


	</style>
	<script type="text/javascript">
		window.onload=function(){


		}


	</script>
</head>
<body>
Un problerma ha sido detectado, por lo cual el sistema decidió detenerse para evitar más daños.<br>
 
<br>
<strong>ERROR_INICIO(BOOT_ERROR)</strong><br><br>
Si esta es la primera vez que ve esta pantalla de error, por favor reinicie el sistema. <br>
Si el problema persiste, en ese caso habrá re reparar el sistema manualmente, o aplicar actualizaciones con el fin de reparar el sistema.<br>

<br>Información técnica:
<br>
<?php
/*
$Systemboot="";
if (file_exists("../Systemboot.php")) {
$file =fopen("bloqueo.php","w");
	fwrite($file,'
');
fclose($file);
}else{

}
$Restart="";
if (file_exists("../Restart.php")) {

}$acceso="";
if (file_exists("../acceso.php")) {

}$apagando="";
if (file_exists("../apagando.php")) {

}$arranqueespecial="";
if (file_exists("../arranqueespecial.php")) {

}$bloqueo="";
if (file_exists("../bloqueo.php")) {

}$llendoasesion="";
if (file_exists("../llendoasesion.php")) {

}
$reiniciando="";
if (file_exists("../reiniciando.php")) {

}*/
?>
<!--
*** STOP: 0x000000e2 (0x0000000, 0x0000000, 0x0000000, 0x0000000)<br>-->
<!--
***kbdhid.sys - Address 0x94efd1aa base at 0x94efb000 DateStamp 0x4a5bc705-->
<p>Error:<br>
<?php 
//echo($error); 
$errorTxTFile="Error.txt";
$fp=fopen($errorTxTFile,'r');
$texto=fread($fp, filesize($errorTxTFile));
$texto=nl2br($texto);
echo($texto);
fclose($fp);

  $archivo =fopen("Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"");
   
fclose($archivo);


?><br>
</p>
<?php
if (file_exists("../Restart.php")) {
echo('<a href="../Restart.php">Restart</a>');
}else{
	echo('<a href="about:blank">Faltan archivos de inicio, por lo que no podemos reiniciar. Haga click para redirigir a about:blank.</a>');

}
?>

</body>
</html>