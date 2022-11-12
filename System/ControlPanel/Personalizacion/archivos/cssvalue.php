<?php

$claro="#09F";
$oscuro="#00F";
$css='<textarea  id="datos" name="datos">
$claro="#09F";
$oscuro="#00F";


</textarea>';

$script='<script type="text/javascript">
window.onload=function(){

	$("#color").click(function(){
			$("#fondospersonales").addClass("seesconde");
			$("#OtrosOtras").removeClass("seesconde");
		$("#iframe>div").addClass("seesconde");
		$("#cambiacolores").removeClass("seesconde");
	});

	$("#fondo").click(function(){
			$("#fondospersonales").addClass("seesconde");
			$("#OtrosOtras").removeClass("seesconde");
		$("#iframe>div").addClass("seesconde");
		$("#cambiafondo").removeClass("seesconde");
	});

$("#ampliacambiafondo").click(function(){
		$("#fondospersonales").removeClass("seesconde");
			$("#OtrosOtras").addClass("seesconde");

		$("#ampliacambiafondo").addClass("seesconde");
	});

$("#achicacambiafondo").click(function(){
		$("#fondospersonales").addClass("seesconde");
			$("#OtrosOtras").removeClass("seesconde");
		$("#ampliacambiafondo").removeClass("seesconde");
	});

$("#usuario").click(function(){
			$("#usuariospersonales").addClass("seesconde");
			$("#OtrosOtras").removeClass("seesconde");
		$("#iframe>div").addClass("seesconde");
		$("#cambiausuario").removeClass("seesconde");
	});

$("#ampliacambiausuario").click(function(){
		$("#usuariospersonales").removeClass("seesconde");
			$("#OtrosOtras").addClass("seesconde");

		$("#ampliacambiausuario").addClass("seesconde");
	});

$("#achicacambiausuario").click(function(){
		$("#usuariospersonales").addClass("seesconde");
			$("#OtrosOtras").removeClass("seesconde");
		$("#ampliacambiausuario").removeClass("seesconde");
	});
$("#bloqueo").click(function(){
			$("#bloqueospersonales").addClass("seesconde");
			$("#OtrosOtras").removeClass("seesconde");
		$("#iframe>div").addClass("seesconde");
		$("#cambiabloqueo").removeClass("seesconde");
	});

$("#ampliacambiabloqueo").click(function(){
		$("#bloqueospersonales").removeClass("seesconde");
			$("#OtrosOtras").addClass("seesconde");

		$("#ampliacambiabloqueo").addClass("seesconde");
	});

$("#achicacambiabloqueo").click(function(){
		$("#bloqueospersonales").addClass("seesconde");
			$("#OtrosOtras").removeClass("seesconde");
		$("#ampliacambiabloqueo").removeClass("seesconde");
	});


	}
		function guardarcoloreshexa(){
		var datos= document.getElementById("datos");
		var cadena=datos.value;

		var colorClaroHEX =document.getElementById("colorClaroHEX");
	var valorClaroHEX=colorClaroHEX.value;

	var colorOscuroHEX =document.getElementById("colorOscuroHEX");
	var valorOscuroHEX=colorOscuroHEX.value;
/**/
	/*var colorClaroHEX =document.getElementById("colorClaroHEX");
	var valorClaroHEX=colorClaroHEX.value;

	var colorOscuroHEX =document.getElementById("colorOscuroHEX");
	var valorOscuroHEX=colorOscuroHEX.value;*/
/**/
cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);
cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);cadena=cadena.replace("'.$claro.'",valorClaroHEX);cadena=cadena.replace("'.$oscuro.'",valorOscuroHEX);
alert(cadena);

	}

	function guardarcolores(){
		var datos= document.getElementById("datos");
		var cadena=datos.value;

		var colorCLaro =document.getElementById("colorCLaro");
	var valorClaro=colorCLaro.value;

	var colorOscuro =document.getElementById("colorOscuro");
	var valorOscuro=colorOscuro.value;
/**/
	var colorClaroHEX =document.getElementById("colorClaroHEX");
	var valorClaroHEX=colorClaroHEX.value;

	var colorOscuroHEX =document.getElementById("colorOscuroHEX");
	var valorOscuroHEX=colorOscuroHEX.value;
/**/
cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);cadena=cadena.replace("'.$claro.'",valorClaro);cadena=cadena.replace("'.$oscuro.'",valorOscuro);	
$("#datos").html(cadena);
alert(cadena);

	}

	
	function muestrahexacolor(){
		$("#menucolor").addClass("seesconde");
		$("#hexacolor").addClass("seesconde");

	}
	function escondehexacolor(){
		$("#hexacolor").addClass("seesconde");

		$("#menucolor").removeClass("seesconde");
			}
</script>';

?>