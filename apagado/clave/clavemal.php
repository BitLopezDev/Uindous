<!doctype html class=" fondologin fondoclaro ">
<html class="fondologin fondoclaro" >
<head>
<meta charset="utf-8">
<title>Inicio de sesion obligatorio</title>
<link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/logo.ico" />
<link href="../../System32/css/personalizacion.css" rel="stylesheet"/><link href="../../System32/css/imageres.css" rel="stylesheet"/>


<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
window.onload=function(){
	/*setTimeout(function(){
		location.href="../bloqueo.php";		
	},40000);*/

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



button{
            background-color:white;
            border:2px solid white;
border-radius:10% 10% 10% 10% ;
        }
        button:hover{
            background-color:#81F7F3;
            border:2px solid black;
            border-radius:20% 20% 20% 20% ;
        }
		
	/*Especificadciones*/	

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
<center> <img src="../../Documents_and_settings/visible/Windows10/Denegado.ico" height="50px" width="50px" alt="Error" 
"><h1>El nombre de usuario o la contraseña es/son incorrecto(s)</h1><br><br> <?php
//?next=http://localhost/SublimeText/C/OperatingSystem/System/paginas/mediaplayer/Mediaplay.php&hacia=Mediaplayer
//echo('<button onClick="location.href=\'../apagado/bloqueo.php?\'">Aceptar</button>');
if(isset($_GET["next"])){
	$next=$_GET["next"];
/**/
	if(isset($_GET["hacia"])){
	$hacia=$_GET["hacia"];
echo('<button onClick="location.href=\'../bloqueo.php?next='.$next.'&hacia='.$hacia.'\'">Aceptar</button>');
	
}else{
	echo('<button onClick="location.href=\'../bloqueo.php?next='.$next.'\'">Aceptar</button>');
}
/**/
}else{
	echo('<button onClick="location.href=\'../bloqueo.php\'">Aceptar</button>');
	
}
?></center>


 </div>
 <div id="estadoclave">
 
 
 </div>


</body>
</html>
