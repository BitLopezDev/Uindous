/**/
function abreWindowBusquedaOEM(){
     $("#lastthinglog").html("abreWindowBusquedaOEM");
$("#log").append("abreWindowBusquedaOEM");
    var WindowBusquedaOEMprogram=document.getElementById("WindowBusquedaOEMprogram");
var WindowBusquedaOEM =WindowBusquedaOEMprogram.value;
    var tyWindowBusquedaOEM = window.open("", "", "width=1200, height=500");
    tyWindowBusquedaOEM.document.write(WindowBusquedaOEM);
  }
  /**/

   function abregames(){
     $("#lastthinglog").html("abregames");
$("#log").append("abregames");
    var gamesprogram=document.getElementById("gamesprogram");
var games =gamesprogram.value;
    var tygames = window.open("", "", "width=1200, height=500");
    tygames.document.write(games);
  }
  
  function abrecpanel(){
     $("#lastthinglog").html("abrecpanel");
$("#log").append("abrecpanel");
    var cpanelprogram=document.getElementById("cpanelprogram");
var cpanel =cpanelprogram.value;
    var tycpanel = window.open("", "", "width=1200, height=500");
    tycpanel.document.write(cpanel);
  }
  /**/
function abremp(){
   $("#lastthinglog").html("abremp");
$("#log").append("abremp");
    var mpprogram=document.getElementById("mpprogram");
var mp =mpprogram.value;
    var tymp = window.open("", "", "width=1200, height=1200");
    tymp.document.write(mp);
  }



 function abreavg(){
   $("#lastthinglog").html("abreavg");
$("#log").append("abreavg");
     var avgprogram=document.getElementById("avgprogram");
var avg =avgprogram.value;
    var tyavg = window.open("", "", "width=1200, height=500");
    tyavg.document.write(avg);
  }


 function abrecalc(){
   $("#lastthinglog").html("abrecalc");
$("#log").append("abrecalc");
     var calcprogram=document.getElementById("calcprogram");
var calc =calcprogram.value;
    var tycalc = window.open("", "", "width=1200, height=500");
    tycalc.document.write(calc);
  }


  
function abrenotas(){
   $("#lastthinglog").html("abrenotas");
$("#log").append("abrenotas");
     var notasprogram=document.getElementById("notasprogram");
var notas =notasprogram.value;
    var tynotas = window.open("", "", "width=1200, height=500");
    tynotas.document.write(notas);
  }



function abrestore(){
   $("#lastthinglog").html("abrestore");
$("#log").append("abrestore");
     var storeprogram=document.getElementById("storeprogram");
var store =storeprogram.value;
    var tystore = window.open("", "", "width=1200, height=500");
    tystore.document.write(store);
  }

/*
 function abreVentana(codigo){
   
    var myWindow = window.open("", "", "width=1200, height=100");
    myWindow.document.write(codigo);
  }*/
   function abredos(){
     $("#lastthinglog").html("abredos");
$("#log").append("abredos");
     var dosprogram=document.getElementById("dosprogram");
var dos =dosprogram.value;
    var tydos = window.open("", "", "width=1200, height=500");
    tydos.document.write(dos);
  }

   function abresoporte(){
     $("#lastthinglog").html("abresoporte");
$("#log").append("abresoporte");
     var soporteprogram=document.getElementById("soporteprogram");
var soporte=soporteprogram.value;
    var tysoporte = window.open("", "", "width=1200, height=500");
    tysoporte.document.write(soporte);
  }

function abrecreditos(){
   $("#lastthinglog").html("abrecreditos");
$("#log").append("abrecreditos");
   var creditosprogram=document.getElementById("creditosprogram");
var creditos =creditosprogram.value;
    var tycreditos = window.open("", "", "width=1200, height=500");
    tycreditos.document.write(creditos);
  }



//<html><script>widnow.onload=function(){location.href='../../System/paginas/browser.php'}</script></html>

   /*function abrecreditos(creditosprogram){
    var tycreditos = window.open("", "", "width=1200, height=500");
    tycreditos.document.write(creditosprogram);
  }*/
/*function abredos(cmdprogram){
    
    var tydos = window.open("", "", "width=1200, height=500");
    tydos.document.write(cmdprogram);
  }*/
/*  var t;
var f=1;
var bandera = false;
$(document).ready(inicio);
function inicio(){
	var h = $(".caja").height();
	$(".caja").hover(
	function(){
		$(this).children(".tooltip").animate({top:(h-50)+"px"},500);
	},
	function(){
		$(this).children(".tooltip").animate({top:(h+1)+"px"},500);
	});	
	//
	$("#foto").mouseover(function(){
		if(bandera==false){
			bandera = true;
			t = setTimeout(cambiaFoto, 1000);
		}
	});
	$("#foto").mouseout(function(){
		if(bandera==true){
			clearTimeout(t);
			bandera = false;
		}
	});
	
}
function cambiaFoto(){
	if(bandera){
		f++;
		if(f>6) f=1;
		$("#foto").html("<img src='imagenes/fondos/fondo"+f+".jpg' width='400px' height='300px'>");
		t = setTimeout(cambiaFoto, 1000);	
	}
}*/