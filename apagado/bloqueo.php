<?php
session_start();
 


	session_destroy();


	
$archivoRestartCount =fopen("BootCount/RestartCount.inf","w+");
   $lineaRestartCount=fgets($archivoRestartCount);
   
    fwrite($archivoRestartCount,"");
   
fclose($archivoRestartCount);

$archivoyendoasesionCount =fopen("BootCount/yendoasesionCount.inf","w+");
   $lineayendoasesionCount=fgets($archivoyendoasesionCount);
   
    fwrite($archivoyendoasesionCount,"");
   
fclose($archivoyendoasesionCount);

$archivoSystemBootCount =fopen("BootCount/SystemBootCount.inf","w+");
   $lineaSystemBootCount=fgets($archivoSystemBootCount);
   
    fwrite($archivoSystemBootCount,"");
   
fclose($archivoSystemBootCount);


$archivoBSCount =fopen("BootCount/BSCount.inf","w+");
   $lineaBSCount=fgets($archivoBSCount);
   
    fwrite($archivoBSCount,"");
   
fclose($archivoBSCount);


$StartJingleFile =fopen("StartJingle.inf","w+");

   
    fwrite($StartJingleFile,"i");
   
fclose($StartJingleFile);



?>

<!doctype html>
<html class=" fondologin fondoclaro " >
<head>
<meta charset="utf-8">
<title>Inicio de sesión obligatorio</title>
<script src="../System32/jquery/$definicion/js/jquery-1.9.1.js" type="text/javascript" language="javascript"></script>
<link rel="icon" type="image/ico" href="../Documents_and_settings/visible/logo.ico" />
<link href="../System32/css/personalizacion.css" rel="stylesheet"/><link href="../System32/css/imageres.css" rel="stylesheet"/>
<script>
window.onerror = function (msg, url, lineNo, columnNo, error) {
   var message = [
            'Message: ' + msg,
            'URL: ' + url,
            'Line: ' + lineNo,
            'Column: ' + columnNo,
            'Error object: ' + JSON.stringify(error)
        ].join(' - ');

   
//location.href="SOS/BS.php?error="+message;
   

  
};

  function pruebaFunctionf(){
  var wWindowSize = window.outerWidth;
    var hWindowSize = window.outerHeight;
    var txtWindowSize = "Window size: width=" + wWindowSize + ", height=" + hWindowSize;
 if (hWindowSize<585 || wWindowSize<730) {
    //alert(txtWindowSize+"Muy chico");



//
if (hWindowSize<486) {
$("footer").hide();
}  

if (hWindowSize>485) {
$("footer").show();
}  

if (wWindowSize<368) {
$("#apagar").hide();
}  

if (wWindowSize>367) {
$("#apagar").show();
}


/**/
if (wWindowSize<268) {
$("#reset").hide();
}  

if (wWindowSize>267) {
$("#reset").show();
}
/**/
if (wWindowSize<250) {
$("footer").hide();
}  

if (wWindowSize>249) {
$("footer").show();
}

} else{}
 
  }
window.onload=function(){

	pruebaFunctionf();
	var apagar=document.getElementById("apagar");
	apagar.onclick=function(){
		location.href="apagando.php";
		//alert("Hola carambola");
		}
		 if (top != self) {
$("footer").hide();
$("#apagar").hide();


		 }
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

.body2{
cursor:default;	
	
}

.body1{
cursor:wait;	
}
img{
    /*box-shadow:10px 10px 10px;*/
    border-radius:10%;
border:5px solid #06F;


}
.img{
    /*box-shadow:10px 10px 10px;*/
    border-radius:100%;
/*border:5px solid #06F;*/


}
#cite{
	margin-top:50%;
	float:center;
	color:white;
}

		
	/*Especificadciones*/	
html{
	cursor: default !important;
/*background-image:url(../Documents_and_settings/visible/Windows7/windows7back.jpg);
	        background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
			width:100%;
           background-color:#09F;*/

}
#estadoclave{
color:white;
font-size:2em;
text-decoration:underline;	
	
}

footer{
width:100%;
height:60px;
float:center;
background-color:transparent;
position:absolute;
bottom:0;
right:0;
left:0;
	
}
footer cite{
	color:white;
	font-size:1.1em;
	text-shadow:5px 5px 10px black;
}
#logo img{
		height:28;
		width:20px; 
		float:center;  
	border:1px solid black !important;
		
	   }
	  footer #apagado{
		  right:10px;
		  position:absolute;
		  bottom:15px;
	  }
	#apagar{
background-color:red;
color:white;
border-radius:25% 0 25% 0;
		
		
	}
	#apagar:hover{
background-color:red;
color:white;
border-radius:50% 0 50% 0;
		border:3px solid white;
		
	}
</style>
</head>

<body  onresize="pruebaFunctionf()">

<script type="text/javascript">

</script>
<div id="body">

<center><h1 class="tituloH1">Inicio de sesión.</h1>
<?php

 if (isset($_GET['hacia'])) {
$hacia=$_GET["hacia"];
       echo "<h3>Ir a:".$hacia."</h3>";

       }

?>



<br><br>
<div class="fondousuariobloqueo img" height="100px" width="150px" > </div>
<div>
<form method="post" <?php if (isset($_GET['next']) && isset($_GET['hacia']) ) {$next=$_GET["next"]; $hacia=$_GET["hacia"]; echo 'action="acceso.php?hacia='.$hacia.'&next='.$next.'"';}else if (isset($_GET['next'])) {$next=$_GET["next"]; echo 'action="acceso.php?next='.$next.'"';}else{echo "action='acceso.php'";} 
?> > 
<input type="mail" id="usuario" placeholder="Usuario" autocomplete="off" requiered autofocus name="usuario"/><!--<textarea id="usuario" name="usuario"></textarea>--><br>
 <input type="password" id="clave" placeholder="Contraseña" autocomplete="off" requiered name="clave"/><br><br>
 <button type="submit">Iniciar sesión de usuario.</button> <input type="reset" id="reset" value="reset"/>
 </form>
 </div>
 <div id="estadoclave">
 
 
 </div><br>
 <footer>
  <div id="logo">
<img src="../Documents_and_settings/visible/logo.ico" /><br><cite>TY-Uindous 1.1 Professional.<cite></div> <div id="apagado"><button id="apagar">Apagar</button></div>
 </footer>

</center>
</div>
</body>
</html>
