$(document).ready(inicio);
function inicio(){
//Funciones basias del inicio
$("#lastthinglog").html("inicio");
$("#log").append("inicio");
	

	
	//$("button").click(escondemenuchicof);
	//$("header").hover(escondemenuchicof);
	
//Menu de inicio
	$("#inicio").click(versimuestraoescondemenuchicof);
		
	
	//$("#noinicio").click(escondemenuchicof);

	$("#ampliarinicio").click(muestramenugrandef);
	
	
/**/
	
		
		$("#escondemenugrande").click(escondemenugrandef);
	
	/**/
	$("#alerta").hover(alerta);
	//Consola
$("#verddos").click(verddosf);
	$("#confirmar").click(confirmarf);
	$("#ejecutar").click(ejecutarf);
	$("#cerrarddos").click(cerrarddosf);
	
	
	var miinput=document.getElementById("miinput");
var escrito =miinput.value;

		//$("#barraderactiva").hover(barraderactivaf);
		//$("#barraderactiva").mouseout(barraderescondef);
		var barraderactiva=document.getElementById("barraderactiva");
		var barrader=document.getElementById("barrader");
		var NotificacionBarra =document.getElementById("NotificacionBarra");
		/*

		barraderactiva.onmouseover=function(){*/

	
		
/*barrader.onmouseover=function(){
			$("#lastthinglog").html("FK barraderHide");
$("#log").append("FK barraderHide");
		$("#barrader").hide();	
		$("#barraderactiva").css("background-color", "transparent");
		}*/

}

	function mostrarBarraDer(){
		$("#lastthinglog").html("FK barraderShow");
$("#log").append("FK barraderShow");
		$("#barrader").show();	

				$("#NotificacionBarra").attr("src","Documents_and_settings/visible/Windows10/close.ico");
				$("#NotificacionBarra").attr("onclick","esconderBarrader();");

				
	}



		function esconderBarrader(){
				$("#lastthinglog").html("FK barraderHide");
$("#log").append("FK barraderHide");
		$("#barrader").hide();	
		$("#barraderactiva").css("background-color", "transparent");
		$("#NotificacionBarra").attr("src","Documents_and_settings/visible/Windows10/NotificacionBarra.ico");
				$("#NotificacionBarra").attr("onclick","mostrarBarraDer();");
			
			}
function verescritorio(){
	if ($("#verescritorio").attr("data-action")=="show") {
		
		$("#iframeEscritorio").addClass("seesconde");
		$("#verescritorio").addClass("fondoobscuro");
		
				$("#verescritorio").attr("data-action","hide");

	}else{
		$("#verescritorio").attr("data-action","show");
		$("#iframeEscritorio").removeClass("seesconde");
				$("#verescritorio").removeClass("fondoobscuro");
	}
}