<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>/!\/!\INICIE SESIÓN/!\/!\</title>
<link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/logo.ico" />
<link href="../System32/css/personalizacion.css" rel="stylesheet"/>

<link rel="icon" type="image/ico" href="../Documents_and_settings/visible/logo.ico" />
<script>
window.onload=function(){
	

}
</script>
<style>
/*Basico*/
/*Manejo UI*/
.seesconde{
display:none;
	width:0;
	height:0;
	color:transparent;
	background-color:transparent;
	font-size:0;

	
	
	
}
.displaynone{
display:none;
	width:0;
	height:0;
	color:transparent;
	background-color:transparent;
	font-size:0;

	
	
	
}
/*Etiquetas estructurales */

html{
cursor:default !important;	
	
}




		
	/*Especificadciones*/	
html{
background-image:url(../Documents_and_settings/visible/Windows7/windows7back.jpg);
	        background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
			width:100%;
           background-color:#09F;

}
#rojo{
border-radius:100% !important;
color:white !important;
background-color:red !important; 
border:3px solid white !important;
font-size:2em !important;
text-align:center !important;	
width:35px;
height:35px;
	float:center;
}
h1{color:white;}

</style>
</head>

<body><br><br><br><br><br><br><br>
<center> <img src="../Documents_and_settings/visible/Windows10/Denegado.ico" height="50px" width="50px" alt="Error" 
"><h1>/!\/!\/!\Atención: usted no ha inicado sesión./!\/!\/!\ </h1><br><h2>Inicie sesión para poder acceder a todas las funcionalidades del sistema.</h2><br><br><!-- <button onClick="location.href='../apagado/bloqueo.php'">Aceptar</button>-->
<?php
//?next=http://localhost/SublimeText/C/OperatingSystem/System/paginas/mediaplayer/Mediaplay.php&hacia=Mediaplayer
//echo('<button onClick="location.href=\'../apagado/bloqueo.php?\'">Aceptar</button>');
if(isset($_GET["next"])){
	$next=$_GET["next"];
/**/
	if(isset($_GET["hacia"])){
	$hacia=$_GET["hacia"];
echo('<button onClick="location.href=\'../apagado/bloqueo.php?next='.$next.'&hacia='.$hacia.'\'">Aceptar</button>');
	
}else{
	echo('<button onClick="location.href=\'../apagado/bloqueo.php?next='.$next.'\'">Aceptar</button>');
}
/**/
}else{
	echo('<button onClick="location.href=\'../apagado/bloqueo.php\'">Aceptar</button>');
}
?>

</center>


 </div>
 <div id="estadoclave">
 
 
 </div>


</body>
</html>
