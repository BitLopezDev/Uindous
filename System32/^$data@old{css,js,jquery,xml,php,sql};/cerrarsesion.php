<?php
session_start();
if ($_SESSION['acceso']=="1")
{
	session_destroy();
	
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cerrando Sesion</title>
<link rel="icon" type="image/ico" href="../Documents_and_settings/visible/logo.ico" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
window.onload=function(){
	$("html").addClass("html1");
	setTimeout(function () {
                  $("html").removeClass("html1");
				  $("html").addClass("html2"); 
                }, 2000);
				setTimeout(function () {
                   location.href="apagando.php";
                }, 4000);

}



</script>
<style>
/*Basico*/
/*Manejo UI*/
.displaynone{
display:none;
	width:0;
	height:0;
	color:transparent;
	background-color:transparent;
	font-size:0;

	
	
	
}
/*Etiquetas estructurales */
.php1{
cursor:wait !important;	
	
}
.php2{
cursor:none !important;	
	
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

</style>
</head>

<body>
<br><br><br><br><br><br>
<center>
<h1>Cerrando Sesion</h1>
</center>
</body>
</html>
