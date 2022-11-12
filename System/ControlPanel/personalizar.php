
<?php 
session_start();
if ($_SESSION['acceso']!="1")
{
      header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/ControlPanel/personalizar.php&hacia=Panel de control>Personalización");
    exit;
}else{
	session_destroy();
	session_start();
$_SESSION['acceso']="1";
}?>
<?php
require_once("personalizacion/archivos/cssvalue.php");
?>
<!doctype html>
<html class="fondooscuro">
<head>
<meta charset="utf-8">
<script src="../../System32/jquery/$definicion/js/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>
<script src="Personalizacion/archivos/jsvalue.js" type="text/javascript" language="javascript"></script>

<link href="../../System32/css/personalizacion.css" rel="stylesheet"/><link href="../../System32/css/imageres.css" rel="stylesheet"/>

<title>Personalización</title>

<style>
html{
	overflow-x: hidden !important;
}
#audio{
	float: left;
	padding-top: 0px;
	padding-left: 0px;

	color: white;
	width: 15%;
	height: 100%;
	
	border: 5px solid black;

	position: absolute;
	top: 30px;
	bottom: 0;
	left: -1px;
}
#video{
	
	float: right;
	padding-top: 0px;
	padding-right: 0px;

	color: white;
	width: 15%;
	height: 100%;
	border: 5px solid black;

	position: absolute;
	top: 30px;
	bottom: 0;
	right: -11px;
}
#colornegro{color: black;}
#logo{
	position: absolute;
	top:0;
	right: -4px;
	height: 30px;
	width: 100px;
	background-color: black;		
	
		
	   }
	   #logo img{
		height:25px;
		width:25px; 
		float:center;  
		margin-top:1px;
		padding-top:1px;
	   }
	   .fondodefectoPERSONALIZARcontrolpanel:hover{
	   	border:5px solid white;
	   }
	   header{
		position:absolute;
		height:30px;
		width:100%;
		top:0;
		left:0;
		right;:0;
	
		border-bottom:1px solid black;
		font-family:vivaldi;
		color:white;
		padding:0;
		margin:0;
		border-bottom:5px solid black;

		  
	  }
header h1,h2,h3,h4,h5,h6{
        margin:0;
        padding:0;
        
      }
.divAudio{
border-left:5px solid white;
border-right:5px solid white;
border-bottom:5px solid white;
height:120px;
}

/*.fondodefectoAjustable{
		background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
}*/
.colores{
	background-image: url(../../Documents_and_settings/visible/Windows7/colores.PNG);
	        background-repeat: no-repeat;
           /* background-attachment: fixed;*/
            background-position: left;
			background-size:100% 120px !important;
			height:120px;
		border-left:5px solid white;
border-right:5px solid white;
border-bottom:5px solid white;
	}
.resto{position:absolute;
top:30px;
bottom:0;
right:0;
left:15.65%;
background-color:transparent;}
#iframe{
	height:255px;
	border-bottom:5px solid black;}
	.peonRESTO{


height:125px;
		}
		.seesconde{
display:none;
    width:0;
    height:0;
    color:transparent;

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



.anadecolor{
	border:2px solid black !important;
	height: 50px !important;
	width:50px !important;
	display:inline-block !important;
}
a{
	color:white;
}
.Tablaimg{border:5px solid white;}
.Tablaimg:hover{
	border: 5px solid black;
}
.opacidadDeAudioDiv{
	opacity:0.75;
}
.opacidadDeAudioDiv:hover{
	opacity:10.0;
}
.fondogenerico{
	        background-repeat: no-repeat;
           /* background-attachment: fixed;*/
            background-position: left;
			background-size:100% 120px !important;
			height:120px;
			/*background-color:red;*/
			border:5px solid white;
		
}
</style>

<script type="text/javascript">
	
window.onload=function(){
	/*$(".anadecolor").css("background-color","$(this).attr('data-claro')");*/

/*{}
var img=$("img");
img.onmouseover=function(){
	$(this).removeClass("bordeobscuro");
	$(this).addClass("bordeclaro");

}
img.onmouseleave=function(){
	$(this).removeClass("bordeclaro");
	$(this).addClass("bordeobscuro");

}
*/
	$("#fondospersonales").addClass("seesconde");
imprimir();
$(".parausuario").click(function(){
	//alert("usuario");
	var donde= $(this).attr("data-where");
	var queImprimir=$(this).attr("src");
/*$("#salida").html("<"+"scri"+"pt>function terminaImprimir(){$('#"+donde+"').html('"+queImprimir+"');}</"+"script>");
terminaImprimir();*/
//$("#usuarioinput").text(queImprimir);
var usuarioinput =document.getElementById("usuarioinput");
//usuarioinput.removeAttribute("value");
usuarioinput.setAttribute("value",queImprimir);
$("#usuarioinput").attr("value",queImprimir);
/*$("#usuario").removeClass("fondousuarioPERSONALIZARcontrolpanel");*/
$("#usuario").css("background","url("+queImprimir+")");
//$("#usuario").addClass("fondogenericoUsuario");

	
});

$(".parafondo").click(function(){
	//alert("fondo");
	var donde= $(this).attr("data-where");
	var queImprimir=$(this).attr("src");
/*$("#salida").html("<"+"scri"+"pt>function terminaImprimir(){$('#"+donde+"').html('"+queImprimir+"');}</"+"script>");
terminaImprimir();*/
//$("#usuarioinput").text(queImprimir);
var fondoinput =document.getElementById("fondoinput");
//fondoinput.removeAttribute("value");
fondoinput.setAttribute("value",queImprimir);

$("#fondoinput").attr("value",queImprimir);
$("#fondo").css("background","url("+queImprimir+")");
});

$(".parabloqueo").click(function(){
	//alert("bloqueo");
	var donde= $(this).attr("data-where");
	var queImprimir=$(this).attr("src");
/*$("#salida").html("<"+"scri"+"pt>function terminaImprimir(){$('#"+donde+"').html('"+queImprimir+"');}</"+"script>");
terminaImprimir();*/
//$("#usuarioinput").text(queImprimir);
var bloqueoinput =document.getElementById("bloqueoinput");
//bloqueoinput.removeAttribute("value");
//bloqueoinput.setAttribute("value",queImprimir);
$("#bloqueoinput").attr("value",queImprimir);
$("#bloqueo").css("background","url("+queImprimir+")");
});
function muestrabotonesotras(){
	$("#ampliacambiafondo").removeClass("seesconde");
	$("#ampliacambiausuario").removeClass("seesconde");
$("#ampliacambiabloqueo").removeClass("seesconde");
}
	$("#color").click(function(){
			$("#fondospersonales").addClass("seesconde");// $("#fondospersonales").hide("");$
			$("#OtrosOtras").removeClass("seesconde");
		$("#iframe>div").addClass("seesconde"); $("#otras>div").addClass("seesconde"); muestrabotonesotras();
		$("#cambiacolores").removeClass("seesconde");
	});

	$("#fondo").click(function(){
			$("#fondospersonales").addClass("seesconde");// $("#fondospersonales").hide("");$
			$("#OtrosOtras").removeClass("seesconde");
		$("#iframe>div").addClass("seesconde"); $("#otras>div").addClass("seesconde"); muestrabotonesotras();
		$("#cambiafondo").removeClass("seesconde");
	});

$("#ampliacambiafondo").click(function(){
		$("#fondospersonales").removeClass("seesconde");// $("#fondospersonales").show("");
			$("#OtrosOtras").addClass("seesconde");

		$("#ampliacambiafondo").addClass("seesconde");
	});

$("#achicacambiafondo").click(function(){
		$("#fondospersonales").addClass("seesconde");// $("#fondospersonales").hide("");$
			$("#OtrosOtras").removeClass("seesconde");
		$("#ampliacambiafondo").removeClass("seesconde");
	});

$("#usuario").click(function(){
			$("#usuariospersonales").addClass("seesconde");
			$("#OtrosOtras").removeClass("seesconde");
		$("#iframe>div").addClass("seesconde"); $("#otras>div").addClass("seesconde"); muestrabotonesotras();
		$("#cambiausuario").removeClass("seesconde");
	});

$("#ampliacambiausuario").click(function(){
		$("#usuariospersonales").removeClass("seesconde");$
			$("#OtrosOtras").addClass("seesconde");

		$("#ampliacambiausuario").addClass("seesconde");
	});

$("#achicacambiausuario").click(function(){
		$("#usuariospersonales").addClass("seesconde");$
			$("#OtrosOtras").removeClass("seesconde");
		$("#ampliacambiausuario").removeClass("seesconde");
	});
$("#bloqueo").click(function(){
			$("#bloqueospersonales").addClass("seesconde");
			$("#OtrosOtras").removeClass("seesconde");
		$("#iframe>div").addClass("seesconde"); $("#otras>div").addClass("seesconde"); muestrabotonesotras();
		$("#cambiabloqueo").removeClass("seesconde");
	});

$("#ampliacambiabloqueo").click(function(){
		$("#bloqueospersonales").removeClass("seesconde");$
			$("#OtrosOtras").addClass("seesconde");

		$("#ampliacambiabloqueo").addClass("seesconde");
	});

$("#achicacambiabloqueo").click(function(){
		$("#bloqueospersonales").addClass("seesconde");$
			$("#OtrosOtras").removeClass("seesconde");
		$("#ampliacambiabloqueo").removeClass("seesconde");
	});

$("#anadecolor").click(function(){
	var cualClaro=$(this).attr("data-claro");
	var cualObscuro=$(this).attr("data-obscuro");

var favcolorClaro=$("#colorCLaro");
var colorClarovalor=favcolorClaro.value;
var colorOscuro=document.getElementById("colorOscuro");
var colorOscurovalor=colorOscuro.value;

	colorClarovalor=cualClaro;
	colorOscurovalor=cualObscuro
});


$(".anadecolor").click(function(){
	//alert("fondo");
	/*var dondeClaro= $(this).attr("data-whereClaro");*/
	var queImprimirClaro=$(this).attr("data-claro");
	/*var dondeOscuro= $(this).attr("data-whereOscuro");*/
	var queImprimirOscuro=$(this).attr("data-obscuro");
/*$("#salida").html("<"+"scri"+"pt>function terminaImprimir(){$('#"+donde+"').html('"+queImprimir+"');}</"+"script>");
terminaImprimir();*/
//$("#usuarioinput").text(queImprimir);
/*var colorClaro =document.getElementById("colorClaro");*/
//colorClaro.value=queImprimirClaro;
/*var colorOscuro =document.getElementById("colorOscuro");*/
//colorOscuro.value=queImprimirOscuro;
$("#colorCLaro").attr("value",queImprimirClaro);
	$("#colorOscuro").attr("value",queImprimirOscuro);
});

/**//**/
$("body").removeClass("seesconde");
	}

	
function imprimir(){
	$("#fondoinput").attr("value",fondodefecto);
	$("#bloqueoinput").attr("value",bloqueo);
	$("#usuarioinput").attr("value",usuario);
	$("#colorCLaro").attr("value",claro);
	$("#colorOscuro").attr("value",oscuro);
}
			</script>



</head>

	<div id="salida" class="seesconde displaynone" style="display:none !important;"></div>
<body class="seesconde">
<header class="fondoclaro">

<div id="superior"><h3>Panel de control>Personalización>Personalizar</h3><div id="cierre"></div><div id="logo"><center><!--<img src="../../Documents_and_settings/visible/logo.ico" />-->
	<img src="../../Documents_and_settings/visible/Windows10/guardar.png"  onclick="GuardarIntento();">	
</center></div></div>



</header>
<div id="audio" class="fondoclaro">
<div id="fondo"  class="fondodefectoPERSONALIZARcontrolpanel  opacidadDeAudioDiv " title="Fondo de escritorio">

</div>
<div id="color" class="colores opacidadDeAudioDiv" title="Configuración de colores">

</div>
<div id="bloqueo" class="fondologinPERSONALIZARcontrolpanel  opacidadDeAudioDiv " title="Fondo de pntalla de bloqueo" >
</div>
<div id="usuario" class="fondousuarioPERSONALIZARcontrolpanel  opacidadDeAudioDiv " title="Imagen de cuenta de usuario">

</div>
<h2 class="guardarLink" onclick="GuardarIntento();">Guardar</h2><h5 class="guardarLink" onclick="location.reload(true);">Reset</h5>
<style type="text/css">
	.guardarLink:hover{
		text-decoration: underline;
		cursor: default !important;
		margin:0 !important;
		padding:0 !important;
	}

</style>
<input type="submit" id="guardar" form="datos" value="Guardar configuración." class="seesconde">
<!--<img src="../../Documents_and_settings/visible/Windows10/guardar.png" height="40px" width="40px" onclick="GuardarIntento();">	-->
<script type="text/javascript">
	function GuardarIntento(){
		var guardar=document.getElementById("guardar");
		guardar.click();
	}
</script>

</div>

<div class="resto">

<div id="iframe">
<div id="cambiacolores" class="seesconde">
<div class="letraclaro">
<center><h2>Cambiar colores de interfaz gráfica</h2><br>
<div id="menucolor">

<button data-oldID="cyan" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#0099ff;" data-claro="#0099ff"  data-obscuro="#0000ff"></button>        

<button data-oldID="azul" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#3333ff;" data-claro="#3333ff"  data-obscuro="#000084"></button> 


<button data-oldID="violeta" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#dd00dd;" data-claro="#dd00dd"  data-obscuro="#7d007d" ></button>

  <button data-oldID="rosa" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#ff64ff;" data-claro="#ff64ff"  data-obscuro="#e80074"></button> 
<button data-oldID="rosaosbcuro" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#ff0080;" data-claro="#ff0080"  data-obscuro="#aa0055"></button> 
<button data-oldID="rojo" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#ff0000;" data-claro="#ff0000"  data-obscuro="#ae0000"></button> 
       
       <button data-oldID="naranja" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#ff8000;" data-claro="#ff8000"   data-obscuro="#cc6600"></button>


<button  data-oldID="amarillo" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#ffff2f;" data-claro="#ffff2f"  data-obscuro="#aeae00"></button>        

        
         <button data-oldID="verdebrillante" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#5eff5e;" data-claro="#5eff5e"  data-obscuro="#00a800"></button>        

<button data-oldID="verde" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#00e600;" data-claro="#00e600"  data-obscuro="#005300"></button>  

      

     

<button data-oldID="gris" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#aeaeae;" data-claro="#aeaeae"  data-obscuro="#595959"></button>        
<button data-oldID="marron" class="anadecolor" id="anadecolor" style="border:2px solid black !important; height: 50px !important; width:50px !important; display:inline-block !important; background-color:#b05800;" data-claro="#b05800"  data-obscuro="#623100"></button> 

         





    
<form method="post" id="datos" action="personalizacion/cambiarcss.php">
       
   
<dl>
<dt><strong><i>Claro</i></strong></dt>
<dd><input type="color" id="colorCLaro" name="favcolorClaro"  ></dd>
<dt><strong><i>Oscuro</i></strong></dt>
<dd><input type="color" id="colorOscuro" name="favcolorOscuro"  ></dd>
</dl><br><!--<br><button  onclick="muestrahexacolor();">Configuración hexadecimal</button>-->
<input type="text" id="fondoinput" name="fondodefecto" class="displaynone">
	<input type="text" id="bloqueoinput" name="bloqueo" class="displaynone">
	<input type="text" id="usuarioinput" name="usuario" class="displaynone">

</form>
</div>

<!--<div id="hexacolor" class="seesconde">
<form method="post" action="cambiarcss.php">
<dl>
<dt><strong><i>Claro</i></strong></dt>
<dd><input type="text" id="colorClaroHEX" placeholder="Ejemplo:#FAFAFA"></dd>
<dt><strong><i>Oscuro</i></strong></dt>
<dd></a><input type="text" id="colorOscuroHEX" placeholder="Ejemplo:#d96c00" ></dd>
</dl><br><button  onclick="escondehexacolor();">Configuración mediante menu</button><br><button id="guardacoloreshexa" onclick="guardarcoloreshexa();">Guardar</button>
</form></div>-->



</center>
</div>
</div>
<!---->
<div id="cambiafondo" class="seesconde">
<center><h2><strong><i>Cambiar fondo de pantalla</i></strong></h2><br>

<strong>Fondos sugeridos por TY:</strong>
<table >
	<tbody>
		<tr >
		<td  height="95px">
		<img  class="parafondo Tablaimg Tablaimg" src="../../Documents_and_settings/fondos/fondodefecto/fondodefecto.jpg" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parafondo Tablaimg Tablaimg" src="../../Documents_and_settings/fondos/fondodefecto/Windows10logo.jpg" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parafondo Tablaimg Tablaimg" src="../../Documents_and_settings/fondos/fondodefecto/uindousprimera.jpg" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parafondo Tablaimg Tablaimg" src="../../Documents_and_settings/fondos/fondodefecto/Bitdefendertheme1.jpg" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parafondo Tablaimg Tablaimg"  src="../../Documents_and_settings/fondos/fondodefecto/Bitdefendertheme2.jpg" height="100px" width="160px">
		 </td>
		 </tr>
		<!--<tr><td style="border:5px solid white;">Fondo predeterminado</td><td style="border:5px solid white;">Imagen de Windows 10</td><td style="border:5px solid white;">Logo de Windows</td><td style="border:5px solid white;">Fondo Bitdefender 1</td><td style="border:5px solid white;">Fondo Bitdefender 2</td></tr>-->
	</tbody>
</table>
</tr><br><button id="ampliacambiafondo">Imagenes personales</button>
</div>
<!---->
<!---->
<div id="cambiausuario" class="seesconde">
<center><h2><strong><i>Cambiar imagen de usuario.</i></strong></h2><br>

<strong>fotos de usuario sugeridos por TY:</strong>
<table >
	<tbody>
	
		<tr ><td  height="95px">
		<img  class="parausuario Tablaimg" data-where="usuarioinput" src="../../Documents_and_settings/fondos/perfil/fondodefecto.jpg" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parausuario Tablaimg" data-where="usuarioinput" src="../../Documents_and_settings/fondos/perfil/Windows10logo.jpg" height="100px" width="160px"></td><td  height="95px">
		<img class="parausuario Tablaimg" data-where="usuarioinput" src="../../Documents_and_settings/fondos/perfil/Usuario.ico" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parausuario Tablaimg" data-where="usuarioinput" src="../../Documents_and_settings/fondos/perfil/Bitdefendertheme1.jpg" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parausuario Tablaimg"  data-where="usuarioinput" src="../../Documents_and_settings/fondos/perfil/Bitdefendertheme2.jpg" height="100px" width="160px"> 
		</td>
		</tr>
		<!--<tr><td style="border:5px solid white;">usuario predeterminado</td><td style="border:5px solid white;">Imagen de Windows 10</td><td style="border:5px solid white;">Logo de Windows</td><td style="border:5px solid white;">usuario Bitdefender 1</td><td style="border:5px solid white;">usuario Bitdefender 2</td></tr>-->

	</tbody>
</table>
</tr><br><button id="ampliacambiausuario">Imagenes personales</button>
</div>
<!---->
<div id="cambiabloqueo" class="seesconde">
<center><h2><strong><i>Cambiar imagen de bloqueo.</i></strong></h2><br>

<strong>fondos de bloqueo sugeridos por TY:</strong>
<table >
	<tbody>
		<tr >
		<td  height="95px">
		<img   class="parabloqueo Tablaimg" src="../../Documents_and_settings/fondos/bloqueo/fondodefecto.jpg" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parabloqueo Tablaimg" src="../../Documents_and_settings/fondos/bloqueo/Windows10logo.jpg" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parabloqueo Tablaimg" src="../../Documents_and_settings/fondos/bloqueo/windows7back.jpg" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parabloqueo Tablaimg" src="../../Documents_and_settings/fondos/bloqueo/Bitdefendertheme1.jpg" height="100px" width="160px">
		</td>
		<td  height="95px">
		<img  class="parabloqueo Tablaimg" src="../../Documents_and_settings/fondos/bloqueo/Bitdefendertheme2.jpg" height="100px" width="160px"> 
		</td
		></tr>
		<!--<tr><td style="border:5px solid white;">bloqueo predeterminado</td><td style="border:5px solid white;">Imagen de Windows 10</td><td style="border:5px solid white;">Logo de Windows</td><td style="border:5px solid white;">bloqueo Bitdefender 1</td><td style="border:5px solid white;">bloqueo Bitdefender 2</td></tr>-->
	</tbody>
</table>
</tr><br><button id="ampliacambiabloqueo">Imagenes personales</button>
</div>

<!---->
</div>
<!---->
<!---->
<!---->
<div id="temas" class="peonRESTO " style="border-bottom:5px solid black;">
</div>
<!---->
<!---->
<!---->
<div id="otras" class="peonRESTO">
<div id="fondospersonales" class="seesconde" >
<center><!--<p><strong><i>Que vacío está esto.</i></strong></p>-->

	<?php
function validaFotofondo($foto){
	$bandera = false;
	if(preg_match("/[Jj][Pp][Gg]$/",$foto)) $bandera = true;	
	if(preg_match("/[Gg][Ii][Ff]$/",$foto)) $bandera = true;	
	if(preg_match("/[Pp][Nn][Gg]$/",$foto)) $bandera = true;	
	if(preg_match("/[Ii][Cc][Oo]$/",$foto)) $bandera = true;	
	return $bandera;
}
$dir = opendir("../../Documents_and_settings/fondos/otras");
$numRen = 1;
if($dir){
	print '<table class="tablaFondosAhora" border="5px solid white">';
	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Alto (px)</th>";
	print "<th>Ancho (px)</th>";
	print "<th>Tamaño (bytes)</th>";
	print "<th>Borrar</th>";
	print "<th>Optimizar (%)</th>";
	print "<th>Optimizar x ancho</th>";
	print "<th>Filtros</th>";
	print "</tr>";
	print '<tr>';
	$i = 0;
	while(false !=($foto = readdir($dir))){
		if($foto != "." && $foto != ".." && validaFotofondo($foto)){
			if($i==$numRen){
				$i=0;
				print "</tr>";
				print "<tr>";
			}
			$i++;
			$archivo = '../../Documents_and_settings/fondos/otras/'.$foto;
			$info = getimagesize($archivo);
			print "<td>";
			print "<img src='../../Documents_and_settings/fondos/otras/$foto' class='parafondo' width='60px' height='60px'>";
			print "</td>";
			print "<td>";
			print $foto;
			print "</td>";
			print "<td>";
			print $info[0];
			print "</td>";
			print "<td>";
			print $info[1];
			print "</td>";
			print "<td>";
			print filesize($archivo);
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/borrarFoto.php?foto=$foto'>Borrar</a>";
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/optimizarFoto.php?foto=$foto'>Optimizar</a>";
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/optimizarAncho.php?foto=$foto'>Optimizar</a>";
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/filtrosImagen.php?foto=$foto'>Filtros</a>";
			print "</td>";
		}
		
	}
	print '</tr>';

	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Alto (px)</th>";
	print "<th>Ancho (px)</th>";
	print "<th>Tamaño (bytes)</th>";
	print "<th>Borrar</th>";
	print "<th>Optimizar (%)</th>";
	print "<th>Optimizar x ancho</th>";
	print "<th>Filtros</th>";
	print "</tr>";
	print '<tr>';
	print '</table>';
		print "<br><br><br><br><br><br><br><br><br><br><br>";
	
} else {
	print "Error al abrir el directorio.";
}

?>
</center><br><button id="achicacambiafondo" >Esconde</button>
</div>
<div id="usuariospersonales" class="seesconde">
<center><!--<p><strong><i>Que vacío está esto.</i></strong></p>-->
	<?php
function validaFotousuario($foto){
	$bandera = false;
	if(preg_match("/[Jj][Pp][Gg]$/",$foto)) $bandera = true;	
	if(preg_match("/[Gg][Ii][Ff]$/",$foto)) $bandera = true;	
	if(preg_match("/[Pp][Nn][Gg]$/",$foto)) $bandera = true;	
		if(preg_match("/[Ii][Cc][Oo]$/",$foto)) $bandera = true;	
	return $bandera;
}
$dir = opendir("../../Documents_and_settings/fondos/otras");
$numRen = 1;
if($dir){
	print '<table class="tablaFondosAhora" border="5px solid white">';
	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Alto (px)</th>";
	print "<th>Ancho (px)</th>";
	print "<th>Tamaño (bytes)</th>";
	print "<th>Borrar</th>";
	print "<th>Optimizar (%)</th>";
	print "<th>Optimizar x ancho</th>";
	print "<th>Filtros</th>";
	print "</tr>";
	print '<tr>';
	$i = 0;
	while(false !=($foto = readdir($dir))){
		if($foto != "." && $foto != ".." && validaFotousuario($foto)){
			if($i==$numRen){
				$i=0;
				print "</tr>";
				print "<tr>";
			}
			$i++;
			$archivo = '../../Documents_and_settings/fondos/otras/'.$foto;
			$info = getimagesize($archivo);
			print "<td>";
			print "<img src='../../Documents_and_settings/fondos/otras/$foto' class='parausuario' width='60px' height='60px'>";
			print "</td>";
			print "<td>";
			print $foto;
			print "</td>";
			print "<td>";
			print $info[0];
			print "</td>";
			print "<td>";
			print $info[1];
			print "</td>";
			print "<td>";
			print filesize($archivo);
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/borrarFoto.php?foto=$foto'>Borrar</a>";
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/optimizarFoto.php?foto=$foto'>Optimizar</a>";
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/optimizarAncho.php?foto=$foto'>Optimizar</a>";
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/filtrosImagen.php?foto=$foto'>Filtros</a>";
			print "</td>";
		}
		
	}
	print '</tr>';
	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Alto (px)</th>";
	print "<th>Ancho (px)</th>";
	print "<th>Tamaño (bytes)</th>";
	print "<th>Borrar</th>";
	print "<th>Optimizar (%)</th>";
	print "<th>Optimizar x ancho</th>";
	print "<th>Filtros</th>";
	print "</tr>";
	print '<tr>';
	print '</table>';
		print "<br><br><br><br><br><br><br><br><br><br><br>";
	
} else {
	print "Error al abrir el directorio.";
}

?>

</center><br><button id="achicacambiausuario" >Esconde</button>
</div>
<div id="bloqueospersonales" class="seesconde">
<center>
<?php
function validaFotobloqueo($foto){
	$bandera = false;
	if(preg_match("/[Jj][Pp][Gg]$/",$foto)) $bandera = true;	
	if(preg_match("/[Gg][Ii][Ff]$/",$foto)) $bandera = true;	
	if(preg_match("/[Pp][Nn][Gg]$/",$foto)) $bandera = true;
		if(preg_match("/[Ii][Cc][Oo]$/",$foto)) $bandera = true;		
	return $bandera;
}
$dir = opendir("../../Documents_and_settings/fondos/otras");
$numRen = 1;
if($dir){
	print '<table class="tablaFondosAhora" border="5px solid white">';
	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Alto (px)</th>";
	print "<th>Ancho (px)</th>";
	print "<th>Tamaño (bytes)</th>";
	print "<th>Borrar</th>";
	print "<th>Optimizar (%)</th>";
	print "<th>Optimizar x ancho</th>";
	print "<th>Filtros</th>";
	print "</tr>";
	print '<tr>';
	$i = 0;
	while(false !=($foto = readdir($dir))){
		if($foto != "." && $foto != ".." && validaFotobloqueo($foto)){
			if($i==$numRen){
				$i=0;
				print "</tr>";
				print "<tr>";
			}
			$i++;
			$archivo = '../../Documents_and_settings/fondos/otras/'.$foto;
			$info = getimagesize($archivo);
			print "<td>";
			print "<img src='../../Documents_and_settings/fondos/otras/$foto' class='parabloqueo' width='60px' height='60px'>";
			print "</td>";
			print "<td>";
			print $foto;
			print "</td>";
			print "<td>";
			print $info[0];
			print "</td>";
			print "<td>";
			print $info[1];
			print "</td>";
			print "<td>";
			print filesize($archivo);
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/borrarFoto.php?foto=$foto'>Borrar</a>";
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/optimizarFoto.php?foto=$foto'>Optimizar</a>";
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/optimizarAncho.php?foto=$foto'>Optimizar</a>";
			print "</td>";
			print "<td>";
			print "<a href='Personalizacion/EditIMG/filtrosImagen.php?foto=$foto'>Filtros</a>";
			print "</td>";
		}
		
	}
	print '</tr>';
	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Alto (px)</th>";
	print "<th>Ancho (px)</th>";
	print "<th>Tamaño (bytes)</th>";
	print "<th>Borrar</th>";
	print "<th>Optimizar (%)</th>";
	print "<th>Optimizar x ancho</th>";
	print "<th>Filtros</th>";
	print "</tr>";
	print '<tr>';
	print '</table>';
	print "<br><br><br><br><br><br><br><br><br><br><br>";
	
	
} else {
	print "Error al abrir el directorio.";
}

?>

</center><br><button id="achicacambiabloqueo" >Esconde</button>
</div>
<div id="OtrosOtras">

</div>
</div>

</body>

</html>



