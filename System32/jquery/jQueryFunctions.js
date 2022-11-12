function verddosf(){
	$("#lastthinglog").html("verddosf");
$("#log").append("verddosf");
	$("#ddosconsola").show();
	$("#ddosconsola").addClass("ddosconsola");
	$("#ddosabierto").text("open");
}
/*function barraderactivaf(){
$("#barrader").show();	
}*/
/*function barraderescondef(){
	$("#barrader").hide();	
}*/
function confirmarf(){
	$("#lastthinglog").html("confirmarf");
$("#log").append("confirmarf");
	//alert("Su mensaje es: " +miinput.value);
	var confirmarconsola= confirm("Desea ejecutar este comando? " +miinput.value);
	if(confirmarconsola == true){
$('#unaDivCualquiera').html('<'+'script'+'>function ejecutable'+'('+')'+'{'+miinput.value+'}</'+'script'+'>');
ejecutable();
}else{/*miinput.value="";*/}
}
function ejecutarf(){
$("#lastthinglog").html("ejecutarf");
$("#log").append("ejecutarf");
	var string = miinput.value;
substring = "ejecutarf";
var stringDos = miinput.value;
substringDos = "confirmarf";

if (string.indexOf(substring) > -1) {
miinput.value="";
NoejecutarfConsola();
}else if (string.indexOf(substringDos) > -1) {
miinput.value="";
NoconfirmarfConsola();
}else{
	//alert("Su mensaje es: " +miinput.value);
	var confirmarfunction= confirm("Desea ejecutar esta funcion? " +miinput.value);
	if(confirmarfunction == true){
//$('#unaDivCualquiera').html('<'+'script>window.onload=function'+'('+')'+'{$("#ejecutafunct").click'+'('+miinput.value+''+')'+';}<'+'/'+'script>');
$('#unaDivCualquiera').html('<'+'script>function ejecutarfunctf'+'('+')'+'{'+miinput.value+'}<'+'/'+'script>');
ejecutarfunctf();
}else{/*miinput.value="";*/}
}
}
function abrelocal(){
	$("#lastthinglog").html("abrelocal");
$("#log").append("abrelocal");
	$("#local").removeClass("seesconde");
	
	verddosf();
	}
function versimuestraoescondemenuchicof(){
	$("#lastthinglog").html("versimuestraoescondemenuchicof");
$("#log").append("versimuestraoescondemenuchicof");
var atributo= $("#inicio").attr("data-action");
//alert("atributo: "+atributo);
if(atributo=="open"){
	muestramenuchicof();

 $("#inicio").removeClass("siStart");

//inicio.setAttribute("class","siStart");

}
else if(atributo=="close"){
	escondemenuchicof();

 $("#inicio").removeClass("siStart");
  var inicio=document.getElementById("inicio");
  
//inicio.setAttribute("class","siStart");

}
else{alert("Error, el sistema no encuentra la accion en que correspone de este boton.");}
}

		function muestramenugrandef(){
			$("#lastthinglog").html("muestramenugrandef");
$("#log").append("muestramenugrandef");
		//$("#menuchico").show();
		/*$("#ddosconsola").hide();
		$("#barrader").hide();
	$("#menuchico").hide();
	$("#barra").hide();
	$("#barra").removeClass("barra");
	$("#barra").addClass("seesconde");
	$("header").hide();
	$("#noinicio").hide();
	$("#menuiniciogrande").show();
	$("html").removeClass("html");
	$("html").addClass("menugrande");*/
	location.href="menuinicio.php";	
		}
		function escondemenuchicof(){
			$("#lastthinglog").html("escondemenuchicof");
$("#log").append("escondemenuchicof");
$("#inicio").attr("data-animation","nop");
 $("#inicio").removeClass("siStart");
  var inicio=document.getElementById("inicio");
  inicio.removeAttribute("class");
//inicio.setAttribute("class","siStart");
			//var atributoInicioAdios=$("#inicio").attr("data-animation");
			
			//alert("Attr: "+$(this).attr("data-animation"));
			//alert("attr none");
		//$("#menuchico").show();
		$("#menuchico").hide();
		//$("#noinicio").hide();
		//$("#inicio").show();
		$("#inicio").attr("data-action","open");
		$("#inicio").removeClass("siStart");
		inicio.removeAttribute("class");
		//$("#inicio").addClass("noStart");
		inicio.setAttribute("class","noStart");

		setTimeout(function(){
inicio.removeAttribute("class");
		inicio.setAttribute("class","siStart");
		},1000);
		
		/*var cuerpo=document.getElementById("cuerpo");
			cuerpo.onmouseover=function(){
				//var atributoInicioAdios=$("#inicio").attr("data-animation");
				$("#inicio").attr("data-animation","animate");
				//alert("attr true");
			}*/
		}
		function muestramenuchicof(){
			$("#lastthinglog").html("muestramenuchicof");
$("#log").append("muestramenuchicof");
$("button").addClass("StartInicio");
 setTimeout(function(){
  $("button").removeClass("StartInicio");
 },1500);
 $("#usuariofotooiniciochico").addClass("noStart");
 setTimeout(function(){
  $("#usuariofotooiniciochico").removeClass("noStart");
 },1500);
			$("#inicio").attr("data-animation","nop");
 var inicio=document.getElementById("inicio");
  inicio.removeAttribute("class");
  inicio.setAttribute("class","startenMenu");
  setTimeout(function(){
  	 var inicio=document.getElementById("inicio");
  inicio.removeAttribute("class");

  },1000);
//inicio.setAttribute("class","siStart");
	 $("#inicio").removeClass("siStart");
	  $("#inicio").removeClass("siStart");
	   $("#inicio").removeClass("siStart");
			//$("#menuchico").show();
		$("#menuchico").show();
		//$("#noinicio").show();
		//$("#inicio").hide();
		$("#inicio").attr("data-action","close");
		
		}
		function escondemenugrandef(){
			$("#lastthinglog").html("escondemenugrandef");
$("#log").append("escondemenugrandef");
		/*$("#barra").show();
		$("#barra").removeClass("seesconde");
	$("#barra").addClass("barra");
	$("header").show();
	$("#noinicio").hide();
	$("#inicio").show();
	$("#menuiniciogrande").hide();
	$("html").addClass("html");
	$("html").removeClass("menugrande");*/
	location.href="menuinicio.php";		
		}
	function apagar(){
		$("#lastthinglog").html("apagar");
$("#log").append("apagar");
		$("textareas").addClass("displaynone");
$("#ddosconsola").addClass("displaynone");
	
	setTimeout(function(){
escondemenuchicof();
},500);

	
	
	setTimeout(function(){
$("iframe").addClass("displaynone");
},700);

setTimeout(function(){
$("#Barra").addClass("displaynone");
},1000);
setTimeout(function(){
$(".nav_menu").addClass("displaynone");
},1500);
setTimeout(function(){
$("header").addClass("displaynone");
},2000);
setTimeout(function(){
$("#logo").addClass("displaynone");
},2500);



	setTimeout(function(){
$("html").addClass("seesconde");
 $("body").addClass("seesconde");
},3100);
	$("#ddosconsola").hide();
	document.getElementById("audioEnd").play();
	setTimeout(function(){
location.href="apagado/apagando.php";

	},3200);
		
	}
	function cerrarddosf(){
		$("#lastthinglog").html("cerrarddosf");
$("#log").append("cerrarddosf");
		$("#ddosconsola").hide();
	$("#ddosabierto").text("close");
	}
	
	function reiniciar(){
		$("#lastthinglog").html("reiniciar");
$("#log").append("reiniciar");
				$("textareas").addClass("displaynone");
$("#ddosconsola").addClass("displaynone");
	
	setTimeout(function(){
$("#menuchico").addClass("displaynone");
},500);

	
	
	setTimeout(function(){
$("iframe").addClass("displaynone");
},700);

setTimeout(function(){
$("#Barra").addClass("displaynone");
},1000);
setTimeout(function(){
$(".nav_menu").addClass("displaynone");
},1500);
setTimeout(function(){
$("header").addClass("displaynone");
},2000);
setTimeout(function(){
$("#logo").addClass("displaynone");
},2500);



	setTimeout(function(){
$("html").addClass("seesconde");
 $("body").addClass("seesconde");
},3100);
	$("#ddosconsola").hide();
	document.getElementById("audioEnd").play();
	setTimeout(function(){
location.href="apagado/reiniciando.php";

	},3200);
		
	}
	
	function bloquear(){
		$("#lastthinglog").html("bloquear");
$("#log").append("bloquear");
		$("textareas").hide();
$("#ddosconsola").hide();
	$("#menuchico").hide();
	$("#menuiniciogrande").hide();
	$("#noinicio").hide();
	$("body").addClass("seesconde");
	$("#ddosconsola").hide();
		location.href="apagado/bloqueo.php";
	}
	function suspender(){
		$("#lastthinglog").html("suspender");
$("#log").append("suspender");
		$("textareas").hide();
$("#ddosconsola").hide();
	$("#menuchico").hide();
	$("#menuiniciogrande").hide();
	$("#noinicio").hide();
	$("body").addClass("seesconde");
	$("#ddosconsola").hide();
		location.href="apagado/suspenso.php";
	}
	function reloadHTML(){
		$("#lastthinglog").html("reloadHTML");
$("#log").append("reloadHTML");
	location.reload();	
	}
	function alerta(){
		$("#lastthinglog").html("alerta");
$("#log").append("alerta");
		escondemenuchicof();
		$("#alertaCartel").removeClass("seesconde");
		$("#alertaCartel").addClass("alerta");
		$("#barraderactiva").hide();
		$("#noinicio").attr("disabled", "disabled");
		$("#inicio").attr("disabled", "disabled");
		$("header").attr("disabled", "disabled");

	}
	function cerraralerta(){
		$("#lastthinglog").html("cerraralerta");
$("#log").append("cerraralerta");
		$("#alertaCartel").addClass("seesconde");
		$("#alertaCartel").removeClass("alerta");

		$("#barraderactiva").show();
$("header").removeAttr("disabled", "disabled");
		$("#noinicio").removeAttr("disabled", "disabled");
		$("#inicio").removeAttr("disabled", "disabled");
	}