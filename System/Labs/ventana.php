<?php
session_start();
if ($_SESSION['acceso']!="1")
{
  header("Location:../../System32/Nosesion.php");
  exit;
}


?>
<!DOCTYPE html>
<html>
<head>

<script src="../../System32/jquery/$definicion/js/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>


<link href="../../System32/css/personalizacion.css" rel="stylesheet"/>
<link href="../../System32/css/imageres.css" rel="stylesheet"/>
<link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/logo.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
<meta charset="utf-8"/>
	<title>Solarium</title>
    <style>
	@-webkit-keyframes girandoinicio {
  from { -webkit-transform: rotateY(0deg);    }
  to   { -webkit-transform: rotateY(360deg); }
}
@-moz-keyframes girandoinicio {
  from { -moz-transform: rotateY(0deg);    }
  to   { -moz-transform: rotateY(360deg); }
}

@-webkit-keyframes rotandoinicio {
  from { -webkit-transform: rotateZ(0deg);    }
  to   { -webkit-transform: rotateZ(-360deg); }
}
@-moz-keyframes rotandoinicio {
  from { -moz-transform: rotateZ(0deg);    }
  to   { -moz-transform: rotateZ(-360deg); }
}








@-webkit-keyframes girando {
  from { -webkit-transform: rotateY(0deg);    }
  to   { -webkit-transform: rotateY(-360deg); }
}
@-moz-keyframes girando {
  from { -moz-transform: rotateY(0deg);    }
  to   { -moz-transform: rotateY(-360deg); }
}




@-webkit-keyframes rotando {
  from { -webkit-transform: rotateZ(0deg);    }
  to   { -webkit-transform: rotateZ(360deg); }
}
@-moz-keyframes rotando {
  from { -moz-transform: rotateZ(0deg);    }
  to   { -moz-transform: rotateZ(360deg); }
}


.giracirculo{

-webkit-animation-name: girando;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count: 1;
	-webkit-animation-duration: 2s;
	-webkit-transform-style: preserve-3d;
	
	-moz-animation-name: girando;
	-moz-animation-timing-function: linear;
	-moz-animation-iteration-count: 1;
	-moz-animation-duration: 2s;
	-moz-transform-style: preserve-3d;	
}

.giracuadrado{

-webkit-animation-name: rotando;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-duration: 2s;
    -webkit-transform-style: preserve-3d;
    
    -moz-animation-name: rotando;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: 1;
    -moz-animation-duration: 2s;
    -moz-transform-style: preserve-3d;
}

.cumpleUno{

-webkit-animation-name: girandoinicio;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count: 2;
	-webkit-animation-duration: 1s;
	-webkit-transform-style: preserve-3d;
	
	-moz-animation-name: girandoinicio;
	-moz-animation-timing-function: linear;
	-moz-animation-iteration-count: 2;
	-moz-animation-duration: 1s;
	-moz-transform-style: preserve-3d;	
}


.giracirculoinicio{

-webkit-animation-name: girandoinicio;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count: 1;
	-webkit-animation-duration: 2s;
	-webkit-transform-style: preserve-3d;
	
	-moz-animation-name: girandoinicio;
	-moz-animation-timing-function: linear;
	-moz-animation-iteration-count: 1;
	-moz-animation-duration: 2s;
	-moz-transform-style: preserve-3d;	
}

.giracuadradoinicio{

-webkit-animation-name: rotandoinicio;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-duration: 2s;
    -webkit-transform-style: preserve-3d;
    
    -moz-animation-name: rotandoinicio;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: 1;
    -moz-animation-duration: 2s;
    -moz-transform-style: preserve-3d;
}
	</style>
    <style type="text/css">
    	.cierraduck{
    		color: white !important;
    		background-color:red !important;
    		height:20px;
    		width:100%;
    		position:absolute;
    		bottom:500;
    		right:0;
    		left:0;
    	
    		text-decoration: none;

    	}
    		.cierraduck:hover{
    		color: white !important;
    		background-color:red !important;
    		height:20px;
    		width:100%;
    		position:absolute;
    		bottom:500;
    		right:0;
    		left:0;
  
    		text-decoration: underline;
    	}
    </style>
    <script>
  window.onerror = function (msg, url, lineNo, columnNo, error) {
  	 var message = [
            'Message: ' + msg,
            'URL: ' + url,
            'Line: ' + lineNo,
            'Column: ' + columnNo,
            'Error object: ' + JSON.stringify(error)
        ].join(' - ');

    
    return false;
};


//if (true) {}else 


	window.onload=function(){
		


			//Error: 

			//var cadena=quequiere.value;
		
		
var quequiere = document.getElementById("quequiere");
var ok =document.getElementById("ok");
		//var hayespacios=true;

		var quequiere=document.getElementById(quequiere);

		var txtSyst=document.getElementById(txtSyst);

	
		//var txtSystvl=txtSyst.value;
		//var quequieretxt= quequiere.value;
		$("#ok").click(piensa);
		
	}
	
	
	/*function comienzo(){
		
		
//caracter-s que deseamos eliminar

$("#txtSyst").text(cadena);

	}*/
	function piensa(){
		$("#ojo").removeClass("cumpleUno");
var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
		//alert("Estoy pensando");
		$("#ojo").html('<div id="aroUno" class="letraclaro"><div id="aroDos" class="letraobscuro"></div></div><br>');
			
		purificar();
		
	}
	function purificar(){
		var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
alert("Hola");
		
		var cadena=quequiere.value;
		var aUno="á";
		var eUno="é";
		var iUno="í";
		var oUno="ó";
		var uUno="ú"
		var solarium="solarium";
		var espacio=" ";
		//var busca="busca"
		
		/*var comilla="'";
		var comillas='"';*/
		//cadena=cadena.toLowerCase();

/*if(txtSyst.value==="solarium"){
		cadena=cadena.replace(solarium,'solarium');	
		}else{
			cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");
			cadena=cadena.replace(solarium,'');	

		}*/

cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');
cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');
cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');
cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');
cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".php",'');cadena=cadena.replace(".phpED",'.wait');cadena=cadena.replace("texarea",'textarea');cadena=cadena.replace("texarea",'textarea');









$("#prueba").html(cadena);




	
	}
	

</script>


<script>
/**/
// if(txtSyst.value==="" || txtSyst.value==="" || txtSyst.value==="" ){$("#answer").text("");}else


	</script>

</head>
<body>

<center>
<header >
<div id="acomodarsiframe"></div>
<br>
</div>

</div>

</div>
<div id="caja" class="seesconde">
<br><br>
  <?php
function validaprogramafondo($programa){
	$bandera = false;
	if(preg_match("/[Pp][Hh][Pp]$/",$programa)) $bandera = true;	
	/*if(preg_match("/[Jj][Pp][Gg]$/",$programa)) $bandera = true;	
	if(preg_match("/[Gg][Ii][Ff]$/",$programa)) $bandera = true;	
	if(preg_match("/[Pp][Nn][Gg]$/",$programa)) $bandera = true;	*/
	return $bandera;
}
$dir = opendir("../paginas");
$numRen = 1;
if($dir){
//print "<textarea id='quequiere'>";
	$i = 0;
	while(false !=($programa = readdir($dir))){
		if($programa != "." && $programa != ".." && validaprogramafondo($programa)){
			if($i==$numRen){
				$i=0;
			print "<br>";
			}
			$i++;
			$archivo = '../paginas/'.$programa;
	
	
			print "<button onclick='abre".$programa."'><img src='../../Documents_and_settings/visible/Windows10/".$programa.".ico'  height='15px' width='15px'>".$programa."</button>
<script type='text/javascript'>
	function abre".$programa."(){
    
    var ".$programa."program=document.getElementById(\'".$programa."program\');
var ".$programa." =".$programa."program.value;
    var ty".$programa." = window.open(\', \', \'width=1200, height=500\');
    ty".$programa.".document.write(".$programa.");
  }
</script>
<texarea id='".$programa."program' class='seesconde displaynone' style='display:none !important;'>
    <html>
    <head>
      <title>Cargando elementos de ".$programa.", por favor espere.</title>
      <script type='text/javascript'>
location.href = 'System/paginas/".$programa."ED';
      </script>
    </head>
    <body>
    
    </body>
    </html>
  </texarea>
			";

			
			
			
		}
		
	}

	
			print "</textarea>";
} else {
	print "Error al abrir el directorio.";
}

?>



<button class="BotonSolarium" id="ok">OK</button>
</div>
</header>



<!--<iframe width='100%' height='400' src='https://www.youtube.com' frameborder='0' allowfullscreen></iframe>-->
</center>
<div id="prueba"></div>
<textarea id='quequiere'></textarea>
</body>

                   
</html>