<?php
session_start();
if ($_SESSION['acceso']!="1")
{
  header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/Solarium/Solarium.php&hacia=Solarium");
  exit;
}


?>
<!DOCTYPE html>
<html>
<head>

<script src="../../System32/jquery/$definicion/js/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>
<script src="JS/data.js" type="text/javascript" language="javascript"></script>
<script src="JS/preguntas.js" type="text/javascript" language="javascript"></script>
<script src="JS/speechrecognition.js" type="text/javascript" language="javascript"></script>
<link href="CSS/Styles.css" rel="stylesheet"/>
<link href="../../System32/css/personalizacion.css" rel="stylesheet"/>
<link href="../../System32/css/imageres.css" rel="stylesheet"/>
<link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/logo.ico" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
<meta charset="utf-8"/>
	<title>Solarium</title>
    <style>
/*	@-webkit-keyframes girandoinicio {
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
}*/
@-webkit-keyframes girandoinicio {
  from { -webkit-transform: rotateY(0deg);    }
  to   { -webkit-transform: rotateY(360deg); }
}
@-moz-keyframes girandoinicio {
  from { -moz-transform: rotateY(0deg);    }
  to   { -moz-transform: rotateY(360deg); }
}

@-webkit-keyframes rotandoinicio {
  from { -webkit-transform: rotateY(0deg);    }
  to   { -webkit-transform: rotateY(360deg); }
}
@-moz-keyframes rotandoinicio {
  from { -moz-transform: rotateY(0deg);    }
  to   { -moz-transform: rotateY(360deg); }
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
  from { -webkit-transform: rotateY(0deg);    }
  to   { -webkit-transform: rotateY(-360deg); }
}
@-moz-keyframes rotando {
  from { -moz-transform: rotateY(0deg);    }
  to   { -moz-transform: rotateY(-360deg); }
}





/*
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

*/
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

       
   	var ojo=document.getElementById("ojo");
			ojo.setAttribute("height","200px");
			ojo.setAttribute("width","200px");
			ojo.setAttribute("class","leraclaro");

document.getElementById("ojo").innerHTML= "<h1 style='font-size:8em !important; padding:0 !important; margin:0 !important;'class='letraclaro'><strong>;(</strong></h1>";
document.getElementById("caja").innerHTML= "";
document.getElementById("answerDiv").innerHTML= "Ha existido un error.";
document.getElementById("answerDosDiv").innerHTML= "<p>"+message+"</p>";
document.getElementById("buscaigual").innerHTML= "";
document.getElementById("elementos").innerHTML= "";
			/*
			 $("#ojo").html("<h1 style='font-size:8em !important; padding:0 !important; margin:0 !important;'class='letraclaro'><strong>;(</strong></h1>");
  	$("#caja").html("");
  	$("#answer").text("Ha existido un error.");
  	$("#answerDos").html("<p>"+message+"</p>");*/

   

    return false;
};


//if (true) {}else 


	window.onload=function(){
		if (top != self) {
			$("#acomodarsiframe").html("<br><br>");
		}else{}
var es_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
if(es_chrome){
$("#micro").removeClass("seesconde");
reconocimientovocal();
}
micro.onmouseover=function(){
	$(".micro").css("background-color","white");
	$(".micro").css("opacity","0.4");
}
micro.onmouseout=function(){
	$(".micro").css("background-color","black");
	$(".micro").css("opacity","1.0");
}
		var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
		$("#answerDos").html("<h6>Cargando</h6>");
		$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); 
			setTimeout(function(){$("#answerDos").html("<h6>Cargando .</h6>");$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); },500);
		setTimeout(function(){$("#answerDos").html("<h6>Cargando . .</h6>");$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value);},1000);
		setTimeout(function(){$("#answerDos").html("<h6>Cargando . . .</h6>");$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); },1500);
		$("#aroUno").addClass("giracuadradoinicio");
		$("#aroDos").addClass("giracirculoinicio");
		setTimeout(function(){$("#aroUno").removeClass("giracuadradoinicio");
		$("#aroDos").removeClass("giracirculoinicio");
/*$("#caja").html('<br><br><input type="text" id="quequiere" autofocus placeholder="Pídeme lo que quieras que haga" autocomplete="off"/><button class="BotonSolarium" id="ok">OK</button><button class="seesconde">SO</button>');*/
$("#caja").removeClass("seesconde");
$("#answerDos").html("");
$("#answerDos").text("");
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); 
var comosaluda = new Array(nombre+"! En qué puedo ayudarte?","Saludos!","Hey! Hola "+nombre+"!");
var numerodecomosaluda = Math.random();

numerodecomosaluda = numerodecomosaluda * comosaluda.length;

numerodecomosaluda = Math.floor(numerodecomosaluda);
$("#answer").text(comosaluda[numerodecomosaluda]);

$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value);

	$("#buscaigual").html("");
	$("#buscaigual").text("");
	},2000)
			//Error: 

			//var cadena=quequiere.value;
		
		var txtSyst = document.getElementById("txtSyst");
var quequiere = document.getElementById("quequiere");
var ok =document.getElementById("ok");
		//var hayespacios=true;

		var quequiere=document.getElementById(quequiere);

		var txtSyst=document.getElementById(txtSyst);

	$("#buscaigual").html("");
	$("#buscaigual").text("");

$("#elementos").addClass("seesconde");
$("#elementos").html("");
$("#elementos").text("");
$("answerDos").html("");
$("answerDos").text("");
$("#answer").text("");
$("#answer").html("");
$("answerDosDiv").html("");
$("answerDosDiv").text("");
$("#answerDiv").text("");
$("#answerDiv").html("");
$("#quequiere").text("");
$("#quequiere").html("");
$("#txtSyst").text("");
$("#txtSyst").html("");
$("#campobusqueda").text("");
$("#campobusqueda").html("");
$("#Audio").text("");
$("#Audio").html("");
$("#linktxtprogram").text("");
$("#linktxtprogram").html("");
$("#bajoElementos").text("");
$("#bajoElementos").html("");
	
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
			$("#buscaigual").html("");
	$("#buscaigual").text("");
	$("answerDos").html("");
$("answerDos").text("");
$("#answer").text("");
$("#answer").html("");
$("answerDosDiv").html("");
$("answerDosDiv").text("");
$("#answerDiv").text("");
$("#answerDiv").html("");
$("answerDos").html("");
$("answerDos").text("");
$("#elementos").addClass("seesconde");
$("#elementos").html("");
$("#elementos").text("");
$("#answer").text("");
$("#answer").html("");
$("#quequiere").text("");
$("#quequiere").html("");
$("#txtSyst").text("");
$("#txtSyst").html("");
$("#campobusqueda").text("");
$("#campobusqueda").html("");
$("#Audio").text("");
$("#Audio").html("");
$("#linktxtprogram").text("");
$("#linktxtprogram").html("");
$("#bajoElementos").text("");
$("#bajoElementos").html("");
		purificar();
		
	}
	function purificar(){
		var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
		$("answerDos").html("");
$("answerDos").text("");
$("#answer").text("");
$("#answer").html("");
$("answerDosDiv").html("");
$("answerDosDiv").text("");
$("#answerDiv").text("");
$("#answerDiv").html("");
			$("#buscaigual").html("");
	$("#buscaigual").text("");
$("answerDos").html("");
$("answerDos").text("");
$("#elementos").addClass("seesconde");
$("#elementos").html("");
$("#elementos").text("");
$("#answer").text("");
$("#answer").html("");
$("#quequiere").text("");
$("#quequiere").html("");
$("#txtSyst").text("");
$("#txtSyst").html("");
$("#campobusqueda").text("");
$("#campobusqueda").html("");
$("#Audio").text("");
$("#Audio").html("");
$("#linktxtprogram").text("");
$("#linktxtprogram").html("");
$("#bajoElementos").text("");
$("#bajoElementos").html("");
		
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
		cadena=cadena.toLowerCase();

/*if(txtSyst.value==="solarium"){
		cadena=cadena.replace(solarium,'solarium');	
		}else{
			cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");
			cadena=cadena.replace(solarium,'');	

		}*/

cadena=cadena.replace("solarium",'&$Solarium');

cadena=cadena.replace("solarium",'&$Solarium');
cadena=cadena.replace("solarium",'&$Solarium');
cadena=cadena.replace("solarium",'&$Solarium');
cadena=cadena.replace("solarium",'&$Solarium');
cadena=cadena.replace("solarium",'&$Solarium');
cadena=cadena.replace("solarium",'&$Solarium');
cadena=cadena.replace("solarium",'&$Solarium');
cadena=cadena.replace("solarium",'&$Solarium');
		cadena=cadena.replace("'","\'");

			cadena=cadena.replace('?','');
				cadena=cadena.replace('!','');
		cadena=cadena.replace('ñ','n');
		cadena=cadena.replace(aUno,'a');
cadena=cadena.replace(eUno,'e');
cadena=cadena.replace(iUno,'i');
cadena=cadena.replace(oUno,'o');
cadena=cadena.replace(uUno,'u');
cadena=cadena.replace("porfavor",'');
cadena=cadena.replace("'","\'");
			cadena=cadena.replace('?','');
				cadena=cadena.replace('!','');
		cadena=cadena.replace('ñ','n');
		cadena=cadena.replace(aUno,'a');
cadena=cadena.replace(eUno,'e');
cadena=cadena.replace(iUno,'i');
cadena=cadena.replace(oUno,'o');
cadena=cadena.replace(uUno,'u');
cadena=cadena.replace("porfavor",'');
cadena=cadena.replace("'","\'");
			cadena=cadena.replace('?','');
				cadena=cadena.replace('!','');
		cadena=cadena.replace('ñ','n');
		cadena=cadena.replace(aUno,'a');
cadena=cadena.replace(eUno,'e');
cadena=cadena.replace(iUno,'i');
cadena=cadena.replace(oUno,'o');
cadena=cadena.replace(uUno,'u');
cadena=cadena.replace("porfavor",'');
cadena=cadena.replace("'","\'");
			cadena=cadena.replace('?','');
				cadena=cadena.replace('!','');
		cadena=cadena.replace('ñ','n');
		cadena=cadena.replace(aUno,'a');
cadena=cadena.replace(eUno,'e');
cadena=cadena.replace(iUno,'i');
cadena=cadena.replace(oUno,'o');
cadena=cadena.replace(uUno,'u');
cadena=cadena.replace("porfavor",'');
cadena=cadena.replace("'","\'");
			cadena=cadena.replace('?','');
				cadena=cadena.replace('!','');
		cadena=cadena.replace('ñ','n');
		cadena=cadena.replace(aUno,'a');
cadena=cadena.replace(eUno,'e');
cadena=cadena.replace(iUno,'i');
cadena=cadena.replace(oUno,'o');
cadena=cadena.replace(uUno,'u');
cadena=cadena.replace("porfavor",'');
cadena=cadena.replace("'","\'");
			cadena=cadena.replace('?','');
				cadena=cadena.replace('!','');
		cadena=cadena.replace('ñ','n');
		cadena=cadena.replace(aUno,'a');
cadena=cadena.replace(eUno,'e');
cadena=cadena.replace(iUno,'i');
cadena=cadena.replace(oUno,'o');
cadena=cadena.replace(uUno,'u');
cadena=cadena.replace("porfavor",'');
cadena=cadena.replace("'","\'");
			cadena=cadena.replace('?','');
				cadena=cadena.replace('!','');
		cadena=cadena.replace('ñ','n');
		cadena=cadena.replace(aUno,'a');
cadena=cadena.replace(eUno,'e');
cadena=cadena.replace(iUno,'i');
cadena=cadena.replace(oUno,'o');
cadena=cadena.replace(uUno,'u');
cadena=cadena.replace("porfavor",'');
cadena=cadena.replace("'","\'");
			cadena=cadena.replace('?','');
				cadena=cadena.replace('!','');
		cadena=cadena.replace('ñ','n');
		cadena=cadena.replace(aUno,'a');
cadena=cadena.replace(eUno,'e');
cadena=cadena.replace(iUno,'i');
cadena=cadena.replace(oUno,'o');
cadena=cadena.replace(uUno,'u');
cadena=cadena.replace("porfavor",'');

/*Sacar espacios*/
cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');cadena=cadena.replace(espacio,'');
/*Fin sacar espacios*/
cadena=cadena.replace("novia",'pareja');
	cadena=cadena.replace("novio",'pareja');
	cadena=cadena.replace("unpareja",'unapareja');
cadena=cadena.replace("unapareja",'pareja');
cadena=cadena.replace("cuentame",'cuenta');
cadena=cadena.replace("cuentanos",'cuenta');

cadena=cadena.replace("tenes",'tienes');
cadena=cadena.replace("sos",'eres');
cadena=cadena.replace("sosun",'un');
cadena=cadena.replace("sosuna",'una');

cadena=cadena.replace("eres",'un');
cadena=cadena.replace("eresun",'un');
cadena=cadena.replace("eresuna",'una');
cadena=cadena.replace("ununa",'un');


cadena=cadena.replace("idiota",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("unidiota",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("unaidiota",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("imbecil",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("unimbecil",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("unaimbecil",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("tarado",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("untarado",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("tarada",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("unatarada",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("unretrasado",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("retrasado",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("retrasada",'insultohaciatiexpersamentesolarium');
cadena=cadena.replace("unaretrasada",'insultohaciatiexpersamentesolarium');

cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');cadena=cadena.replace('.','');
cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');cadena=cadena.replace(',','');
cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');cadena=cadena.replace(':','');
cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');cadena=cadena.replace(';','');

cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");cadena=cadena.replace("¡","");
			cadena=cadena.replace("¿","");
cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");cadena=cadena.replace("!","");
			cadena=cadena.replace("?","");
	/**/
	cadena=cadena.replace("tuvida","ti");
	cadena=cadena.replace("tuexistencia","ti");
	cadena=cadena.replace("queesdetuvida","deti");
	cadena=cadena.replace("queesdetuexistencia","deti");


			cadena=cadena.replace("sinonimos",'sinonimo');

	cadena=cadena.replace("sinonimopara",'sinonimo');
		cadena=cadena.replace("sinonimode",'sinonimo');
			cadena=cadena.replace("sinonimolapalabra",'sinonimo');
						cadena=cadena.replace("sinonimolapalabra",'sinonimo');
									cadena=cadena.replace("unsionmo",'sinonimo');
												cadena=cadena.replace("unossinonimo",'sinonimo');
cadena=cadena.replace("sinonimo",'buscasinonimo');
			cadena=cadena.replace("buscabuscasinonimo",'buscasinonimo');
			cadena=cadena.replace("buscaunbuscasinonimo",'buscasinonimo');
			cadena=cadena.replace("buscaunosbuscasinonimo",'buscasinonimo');





/*cadena=cadena.replace(comilla,'');*/
$("#txtSyst").text(cadena);

$("#aroUno").addClass("giracuadrado");
		$("#aroDos").addClass("giracirculo");
	var quequieredos=document.getElementById("quequiere");
		$("#answer").text("");
		setTimeout(function(){$("#answerDiv").text("."); queDecirSolarium();},500);


		setTimeout(function(){$("#answerDiv").text(". ."); queDecirSolarium();},1000);


		setTimeout(function(){$("#answerDiv").text(". . ."); queDecirSolarium();},1500);


		setTimeout(function(){$("#aroUno").removeClass("giracuadrado");
		$("#aroDos").removeClass("giracirculo"); $("#buscaigual").html("<a href='#' onclick='BusquedaFuncion();' class='letraclaro'>Buscar '"+quequieredos.value+"' en DuckDuckGo</a>"); verificacero();},2000);


	
	}
	function verificacero(){
var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
		if(txtSyst.value==="&$Solarium"){
$("#dichounoantes").html(""); $("#dichounoantes").text("");

		$("#answer").text("Sí?");
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
		}else{


saltoconversacion();	
}
	}
function saltoconversacion(){
	var dichounoantes=document.getElementById("dichounoantes");
var answer=document.getElementById("answer");
if (dichounoantes.value==="porquedelmapa" && (txtSyst.value==="porque" || txtSyst.value==="peroporque") ) {

	$("#answer").html("No lo sé, solo se  que no quiere mostrarse. No sé cual es el motivo.");
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
}else{verificaUno();	}
}
	function verificaUno(){
$("#dichounoantes").html(""); $("#dichounoantes").text("");
var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
$("answerDos").html("");
$("answerDos").text("");
$("#elementos").addClass("seesconde");
$("#elementos").html("");
$("#elementos").text("");

$("#Audio").text("");
$("#Audio").html("");

		//var cadena=quequiere.value;
		//alert("Verificando");
	 if(txtSyst.value==="" || txtSyst.value==="." || txtSyst.value===".."){
			
			$("#answer").text("...");
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
		}else  if(txtSyst.value==="hola" || txtSyst.value==="buenosdias"|| txtSyst.value==="buenastardes" || txtSyst.value==="buenasnoches" || txtSyst.value==="muybuenas" || txtSyst.value==="saludos"){
			var comosaludaDos = new Array(nombre+"! En qué puedo ayudarte?","Saludos!","Hey! Hola "+nombre+"!");
var numerodecomosaludaDos = Math.random();

numerodecomosaludaDos = numerodecomosaludaDos * comosaludaDos.length;

numerodecomosaludaDos = Math.floor(numerodecomosaludaDos);
$("#answer").text(comosaludaDos[numerodecomosaludaDos]);

$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value);
queDecirSolarium();
		}else 

		if(txtSyst.value==="adios" || txtSyst.value==="hastaluego" || txtSyst.value==="hastapronto"|| txtSyst.value==="hastaprontoespero" || txtSyst.value==="esperoquehastapronto" || txtSyst.value==="chau" || txtSyst.value==="chaus" || txtSyst.value==="chauchas" || txtSyst.value==="ciao"){
			$("#answer").text("Hasta Luego.");
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
		}else{gracias();}
	}

function gracias(){
	var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
if(txtSyst.value==="gracias" || txtSyst.value==="gracias&$Solarium" || txtSyst.value==="muchasgracias" || txtSyst.value==="milgracias" || txtSyst.value==="muchisimasgracias" || txtSyst.value==="unmillondegracias"){

		$("#answer").text("Es un honor");
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
		}else{
perdon();
		}

}

function perdon(){
var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
var string = txtSyst.value;
substring = "perdon";
if (string.indexOf(substring) ==0) {
$("#answer").text("Disculpas aceptadas");
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else{
disculpa();
}

}

function disculpa(){
var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");

var string = txtSyst.value;
substring = "disculpa";
if (string.indexOf(substring) ==0) {
$("#answer").text("No pasa nada.");

$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
}else{mapa();}

}
function variossinonmos(){

}

function buscasinonimos(){
	var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");

var string = txtSyst.value;

substring = "buscasinonimo";
if (string.indexOf(substring) ==0) {
/**/
string=string.replace("buscasinonimo","");
$("#answer").text("Buscando sinonimos de: "+string);

$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
var marcosinonimo ="<div  class='cierraduck'onclick='cerrarpato();'>Cerar Motor de Búsqueda.</div><iframe onload='' width='100%' height='500'src='http://www.wordreference.com/sinonimos/'"+string+"'  title='Busca de sinonimos' id='pato'></iframe>";

$("#elementos").removeClass("seesconde");

$("#elementos").html(marcosinonimo);

}else{mapa();}
}
//function canta(){
/*var string = txtSyst.value;
substring = "canta";
if (string.indexOf(substring) > -1) {
$("#Audio").html('<iframe class="fondoclaro bordeclaro sombraclaro"  width="0" height="0" src="Documents_and_settings/MediaPlayer/Audio/J.D - Annies Song.mp3" frameborder="0" allowfullscreen></iframe>');**/
//<iframe width='110' height='100' src='https://www.youtube.com/embed/iIj07LL57RA' frameborder='0' allowfullscreen></iframe>
/*}else{BusquedaFuncion();}
}*/


function mapa(){
var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
var dichounoantes=document.getElementById("dichounoantes");
var answer=document.getElementById("answer");
if (dichounoantes.value==="porquedelmapa" && (txtSyst.value==="porque" || txtSyst.value==="peroporque") ) {

	$("#answer").html("No lo sé, solo se  que no quiere mostrarse. No sé cual es el motivo.");
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
}else if(txtSyst.value==="muestraelmapa"){
	$("#answer").html("En este momento Google maps y yo no estamos llegando a un acuerdo. Estamos peleados (él empezó!!!).");
/*$("#elementos").html('<div  class="cierraduck"onclick="cerrarpato();">Cerar Google Maps.</div><iframe id="Gmps" onload="cargadomapa();"src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6222941.253190838!2d-3.713378999999999!3d40.396764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1484864665016" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>');*/
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
$("#dichounoantes").html("porquedelmapa");
/*var Gmps=document.getElementById("Gmps");
Gmps.setAttribute("height","500px");
Gmps.setAttribute("width","100%");*/
}else{adaptapreguntas();
$("#dichounoantes").html("");
$("#dichounoantes").text("");
}

}

function BusquedaFuncion(){
	var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
	$("#buscaigual").html("");
	$("#buscaigual").text("");
	var quequiere=document.getElementById("quequiere")
	var cadena=quequiere.value;
	var campobusqueda=document.getElementById("campobusqueda");
var busquedaTXT=campobusqueda.value;	
$("#campobusqueda").text(cadena);
/*
busquedaTXT=busquedaTXT.replace("quees",'');
busquedaTXT=busquedaTXT.replace("quienes",'');
	busquedaTXT=busquedaTXT.replace("quees ",'');
busquedaTXT=busquedaTXT.replace("quienes ",'');
	busquedaTXT=busquedaTXT.replace("Quees",'');
busquedaTXT=busquedaTXT.replace("Quienes",'');
	busquedaTXT=busquedaTXT.replace("Quees ",'');
busquedaTXT=busquedaTXT.replace("Quienes ",'');

	busquedaTXT=busquedaTXT.replace("busca",'');
busquedaTXT=busquedaTXT.replace("busca ",'');
	busquedaTXT=busquedaTXT.replace("Busca",'');
busquedaTXT=busquedaTXT.replace("Busca ",'');
*/

$("#answer").text("");
$("#answer").html("");
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
/*$("#answerDos").html("<p>He hecho esta busqueda: <a href='https://search.yahoo.com/yhs/search?hspart=avg&hsimp=yhs-fh_lsonswrow&type=ff.49.w81.nt.04-01.es.avg._._&param1=jZLJTsMwEIZfhUt8w_KSOMnBB7ZKSIAQFPWIHC9tgSzYSVrennFCEXAApMgznoxnfn8evTUSGUnTVJQ8F0VJCEEmSDWuw16hF9WspfOohjTLS0FtznipXWFywRgRPMst13nGc16iDpJ2_YBGmWKKU1ymBTobvLdNf6vW9uHuSm76vku4SpiDr34LVnm9wdAM67aGUAd5AezhR-j2CXe6htIJNwkTr2A27QtUqLTy0RgLSzWFRFBQ3TQ9uFE5-M6DX0-n_9IPifrQZgTzeQnYmwCBmUncwYbShGVskU8rIzQDFVOMn5BiNlCxur2G_M7DgaF5btpdE1U2scCmmwU_Kh1Fk9i-11P7Kp6ZpADOmBVvgu6tH62_PJfLU3a8vFkerxYXpEB31llg7A94w298e1UBzy-Y_NjHy_xo-Mnh3-S-A_qJ7-tjTDA-IM7cXOTmyISSMA76gSAsse7wIeQwAmjbSSpynAlMS4IZjFgb5GrbmHYXjgpMUSUXW29du0cVDGKJCdJWLv1g0VOYnXc1&param2=new_tab_search&param3=ff.49.w81.nt.04-01.es.avg._._&p="+campobusqueda.value+"' title='Buscar en Google: "+campobusqueda.value+"'>"+campobusqueda.value+"</a></p>");*/
$("#answer").text("Buscando Informacion sobre: "+campobusqueda.value+".");

$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
$("#answer").html("Cargando Resultados de Búsqueda");

$("#elementos").html("<div  class='cierraduck'onclick='cerrarpato();'>Cerar Motor de Búsqueda.</div><iframe onload='muestraiframe();' width='100%' height='500'src='https://duckduckgo.com/?q="+campobusqueda.value+"&t=ffnt&ia=web'  title='Buscar en duckduckgo: "+campobusqueda.value+"' id='pato'></iframe>");



//$("#elementos").html("<h2>Hola cara de bola</h2>");
//https://www.google.com.uy/search?safe=active&site=&source=hp&q="+campobusqueda.value+"
/*$("#linktxtprogram").text("<html><head><title>Crgando resultado de busqueda</title><script>window.onload=function(){location.href='https://www.google.com.uy/search?safe=active&site=&source=hp&q="+campobusqueda.value+"';}</scr"+"ipt></head></html>");
abrelink(document.getElementById('linktxtprogram').value)*/

}
function muestraiframe(){
	var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
$("#answer").html("He buscado: "+campobusqueda.value+" en DuckDuckGo.");
	$("#elementos").removeClass("seesconde");
	$("#answerDiv").html(answer.value);
var pato=document.getElementById("pato");
pato.onload=function(){

}

$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
$("#answerDiv").html("He buscado: "+campobusqueda.value+" en <span title='DukDuckGo es un navegador seguro que no rastrea a sus usuarios'>DuckDuckGo</span>.");
}
function mustrasinonimos(){
	var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
$("#answer").html("He buscado sinónimos en Wordreference.");
	$("#elementos").removeClass("seesconde");
	$("#answerDiv").html("He buscado sinónimos en Wórdreference.");
var pato=document.getElementById("pato");
pato.onload=function(){

}

$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}
function cargadomapa(){
	var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
$("#answer").html("Aqui tienes el mapa.");
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
	$("#elementos").removeClass("seesconde");

}

function abrelink(linkprogram){
    var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
    var linkWindow = window.open("", "", "width=1200, height=500");
    linkWindow.document.write(linkprogram);
  }
  function cerrarpato(){
  	var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
	$("#elementos").html("");
	$("#elementos").text("");
	$("#elementos").addClass("seesconde");
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
<div id="ojo" >
<div id="aroUno" class="letraclaro"><div id="aroDos" class="letraobscuro"></div></div><br>
</div>
<div id="respuesta" class="letraclaro">
<h2 id="answerDiv"></h2>
<div id="answerDosDiv"></div>
</div>
<div id="buscaigual"></div>
</div>
<div id="caja"  class="seesconde">

<br><br><input type="text" id="quequiere" spellcheck="true" autofocus placeholder="Pídeme lo que quieras" autocomplete="off"/><button class="BotonSolarium" id="ok">OK</button><button class="seesconde">SO</button><div id="micro" class="seesconde" >

	<img src="../../Documents_and_settings/visible/Windows10/microOn.ico" height="30px" width="30px" class="micro" id="btn">
</div>
</div>
</header>
<!--style="display:none !important;"-->
<textarea id="interimResult"></textarea>
<div id="systema"  class="  seesconde displaynone" >
<textarea id="paradecir" class=" ">

</textarea>
<textarea id="txtSyst" class=" ">

</textarea>
<textarea id="campobusqueda" class=" ">

</textarea>

<textarea id="answer"  class="txt" class=" ">

</textarea>
<textarea id="answerDos"   class=" ">

</textarea>

<textarea id="campobusqueda" class=" ">

</textarea>
<textarea id="dichounoantes" class=" ">

</textarea>
</div>
<div id="elementos" class=" letraclaro"></div>
<div id="bajoElementos"></div>
<!--<iframe width='100%' height='400' src='https://www.youtube.com' frameborder='0' allowfullscreen></iframe>-->
</center>
<div id="Audio">

</div>

</body>
<textarea id="linktxtprogram" class="seesconde">
                        




                
                          

                    </textarea>
                    <div class="seesconde">
                    <div class="seesconde">
      <label for="rate">Rate</label><input min="0.5" max="2" value="1" step="0.1" id="rate" wtx-context="E7B12928-3172-4C92-9574-A2CB47272514" type="range">
      <div class="rate-value">1</div>
      <div class="clearfix"></div>
    </div>
    <div>
      <label for="pitch">Pitch</label><input min="0" max="2" value="1" step="0.1" id="pitch" wtx-context="3B9F890A-4497-4C24-884E-F8A5A40EE459" type="range">
      <div class="pitch-value">1</div>
      <div class="clearfix"></div>
    </div>
    <select wtx-context="A9463055-D2E1-4EEC-B6AB-1F2D189F7328"><option data-lang="es-ES" data-name="Microsoft Helena Desktop - Spanish (Spain)">Microsoft Helena Desktop - Spanish (Spain) (es-ES)</option></select>
    </div>
    <script src="script.js"></script>
</html>