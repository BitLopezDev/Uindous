<?php
$bloqueoOn='

<?php
session_start();



	session_destroy();

?>
<!doctype html>
<html mfesecureplugin="1.6.3">
<head>
<meta charset="utf-8">
<title>Inicio de sesion obligatorio</title>
<link rel="icon" type="image/ico" href="../Documents_and_settings/visible/logo.ico" />


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

#cite{
	margin-top:50%;
	float:center;
	color:white;
}
input{
            background-color:white;
           
border-radius:10% 10% 10% 10% ;
color:black;
border:2px solid #06F;
        }
        input:hover{
			color:black;
            background-color:#81F7F3;
  
            border-radius:20% 20% 20% 20% ;
			border:2px solid #06F;
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
			border:2px solid #06F;
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
#estadoclave{
color:#F00;
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

<script>
window.onload=function(){
	var apagar=document.getElementById("apagar");
	apagar.onclick=function(){
		location.href="apagando";
		//alert("Hola carambola");
		}
}
</script>
</head>
<body>

<div id="body">

<center><h1>Usuario: Yo.<br>yo@tymail.com</h1><br><br><br><br>
<img src="../Documents_and_settings/visible/perfil.png" alt="Usted" width="150px" height="100px"/>
<div>
<form method="post" action="acceso.php">
<input type="mail" id="usuario" placeholder="Usuario" autocomplete="off" requiered autofocus name="usuario"/><br>
 <input type="password" id="clave" placeholder="Contraseña" autocomplete="off" requiered name="clave"/><br><br>
 <button type="submit">Iniciar sesion de usuario.</button> <input type="reset" value="reset"/>
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



';
$bloqueoOffapagado='
<html>
<head>
<script>
window.onload=function(){
location.href="Systemboot.php";
}
</script>
</head>
<body>
</body>
</html>
';
$bloqueoOffreiniciado='
<html>
<head>
<script>
window.onload=function(){
location.href="Restart.php";
}
</script>
</head>
<body>
</body>
</html>
';
$bloqueoOffRestart='
<html>
<head>
<script>
window.onload=function(){
location.href="reiniciando.php";
}
</script>
</head>
<body>
</body>
</html>
';
$bloqueoOffApagando='
<html>
<head>
<script>
window.onload=function(){
location.href="apagando.php";
}
</script>
</head>
<body>
</body>
</html>
';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Verificando clave de acceso</title>
<script>

window.onload=function(){
	setTimeout(function(){
	location.href="../System32/AccesoDenegado.php";
},400);
}
</script>
</head>

<body>

</body>
</html>