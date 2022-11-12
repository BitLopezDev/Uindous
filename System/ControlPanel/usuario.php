<?php
session_start();
if ($_SESSION['acceso']!="1")
{
   header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/ControlPanel/personalizar.php&hacia=Panel de control>Configuración de la cuenta de Usuario");
  exit;
}


?>
<!DOCTYPE html>
<html class="fondoobscuro">
<head>
<meta charset="UTF-8"/>
<link href="../../System32/css/personalizacion.css" rel="stylesheet"/>
<script src="../../System32/jquery/$definicion/js/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>
<script src="../Solarium/JS/data.js" type="text/javascript" language="javascript"></script>
<link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/Windows10/usuario.ico" />
    <title>Configuración de la cuenta de usuario.</title>
      <style type="text/css">
  html{
    color:white;
  }
  html a {color:white;
    font-size:1.3em;}
 .displaynone{display:none;
  width:0;
  height:0;
  color:transparent;
  background-color:transparent;
  font-size:0;}
 .semuestra{display:inline;

 
} 



#audio{
  float: left;
  padding-top: 0px;
  padding-left: 0px;
 
  color: white;
  width: 15%;
  height: 100%;
  
  border-top: 5px solid black;
  border-right: 5px solid black;
  border-bottom: 5px solid black;
  
  position: absolute;
  top: 30px;
  bottom: 0;
  left: 0;
}

.seesconde{display:none;
  width:0;
  height:0;
  color:transparent;
  background-color:transparent;
  font-size:0;}


#colornegro{color: black;}
#logo{
  position: absolute;
  top:0;
  right: 0;
  height: 30px;
  width: 100px;
  background-color: black;    
  
    
     }
     #logo img{
    height:28;
    width:20px; 
    float:center;  
    margin-top:1px;
    padding-top:1px;
     }
     header{
    position:absolute;
    height:30px;
    width:100%;
    top:0;
    left:0;
    right;:0;
   
    border-bottom:1px solid black;
    
    color:white;
    padding:0;
    margin:0;
    border-bottom:5px solid black;

      
    }
header h1,h2,h3,h4,h5,h6{
        margin:0;
        padding:0;
        
      }
.remarca{
	border:5px solid #ff0000 !important;
	background-color: black !important;
	color:#ff0000 !important;
}
.remarcar{
	border:5px solid #ff0000 !important;
	background-color: black !important;
	color:#ff0000 !important;
}
  </style>
  <script type="text/javascript">
window.onload=function(){
$("#nombre").attr("value",nombre);
$("#apellido").attr("value",apellido);
$("#edad").attr("value",edad);
$("#email").attr("value",mail);
$("#usuario").attr("value",usuario);




	$("#psactual").keyup(function(e){
	var estado=document.getElementById("estado");
	if (estado.value!="cambio") {var queescribe=$("#psactual").attr("value");
$('#Nps').attr('value',queescribe);$('#CNps').attr('value',queescribe);}
	

});
	$("#Nps").keyup(function(e){
	

$('#CNps').attr('value','');

});
	$("#email").keyup(function(e){
	var cualeselmail=$(this).attr("value");

$('#usuario').attr('value',cualeselmail);

});
	$(".input").keyup(function(e){
	
	setTimeout(function(){
		$(".input").removeClass("remarca");
	},500);

});
	}
function cambiarPassword(){
	
	var psactual=document.getElementById("psactual");
	var psactualquees=psactual.value;
	if (psactualquees===ps) {
		$("#estado").text("cambio");
$('#nuevoPassword').removeClass('seesconde'); $('#Nps').attr('value',''); $('#CNps').attr('value','');
}else{
$("#psactual").addClass("remarca");
	alert("El password que introdujo como password actual en este campo no es correcto");
}
}



function GuardarIntento(){

var psactual=document.getElementById("psactual");
	var psactualquees=psactual.value;

	
	var Nps=$("#Nps").attr("value");

	var CNps=$("#CNps").attr("value");
	if (psactualquees===ps) {
verificaPasoDos();
}else{
$("#psactual").addClass("remarca");
	alert("El password que introdujo como password actual en este campo no es correcto");
}

}
function verificaPasoDos(){

	
	var Nps=$("#Nps").attr("value");

	var CNps=$("#CNps").attr("value");

	if(CNps==Nps){
		
verificaPasoTres();

}else{
	alert("Las contraseñas no coinciden!!");

	$("#CNps").addClass("remarcar");
		$("#Nps").addClass("remarcar");
}

}
function verificaPasoTres(){
	
	
	guardarDefinivamente();



}
function guardarDefinivamente(){
var datos=document.getElementById("datos");
datos.submit();
}
/*if(Nps!=psactual){
$("#Nps").addClass("remarcar");
$("#CNps").addClass("remarcar");
var confirmar=('/!\\Atención!!!!/!\\ Está a punto de cambiar sus contraseñas. Recomendamos que precione cancelar y que oprima el botón de "ver contraseñas" para asegurarse que introdujo las contraseñas correctamente.');
if(confirmar){

	guardarDefinivamente();
}

}else{guardarDefinivamente();}*/
  </script>



</head>

<body>
<header class="fondoclaro">

<div id="superior"><h3>Panel de control>Usuario>Control de la cuenta de usuario.</h3><div id="cierre"></div><div id="logo"><center><img src="../../Documents_and_settings/visible/Windows10/guardar.png"  onclick="GuardarIntento();">	</center></div></div>



</header>
<center>
<div id="contenido">
<br><br>
<form method="post" id="datos" action="usuario/cambiosusuario.php">
	Nombre:<input class="input"   type="text" placeholder="Nombre" name="nombre" id="nombre" requiered autofocus><br><br>

		Primer apellido:<input class="input"   type="text" placeholder="Primer apellido" name="apellido" id="apellido" requiered autofocus><br><br>

			edad:<input class="input"   type="number" min="0"  placeholder="ej:26" name="edad" id="edad" requiered autofocus><br><br>

				E-Mail:<input class="input"   type="email" placeholder="ej:ejemplo@example.com" name="email" id="email" requiered autofocus><br><br>
					Nombre de usuario:<input class="input"   type="text" placeholder="ej:pepe" name="usuario" id="usuario" requiered autofocus><br><br>

						Contraseña actual:<input class="input"  type="password"  name="psactual" id="psactual" requiered autofocus><br><br>
						<div class="seesconde" id="nuevoPassword">
						<hr><br>

							Nueva contraseña:<input class="input"  type="password"  name="Nps" id="Nps" requiered autofocus><br><br>

								confirme nueva contraseña:<input class="input"  type="password"  name="CNps" id="CNps" requiered autofocus><br></div>
</form>
</div>
</center>

  <div id="audio" class="fondoclaro">
<button onclick="cambiarPassword();">Cambiar contraseña</button>

</div>











</div>

<center>
<textarea class="seesconde displaynone" id="estado"></textarea>
</center>
</body>

</html>

