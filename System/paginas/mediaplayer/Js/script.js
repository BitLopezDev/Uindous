$(document).ready(function(){


 		$("#ejecutar").text("false");
 	$("#ok").click(purificar);
 	$(".paraAudio").click(function(){
 		var queImprimir=$(this).attr("data-file");
 		var verificanombre=document.getElementById("verificanombre");
 		verificanombre.value=queImprimir;
 		//<iframe width="854" height="480" src="https://www.youtube.com/embed/W3Gt2qlLllM" frameborder="0" allowfullscreen></iframe>

 		$("#VandAdisplay").html('<iframe class="fondoclaro bordeclaro sombraclaro"  width="70%" height="480" src="../../../Documents_and_settings/MediaPlayer/Audio/'+queImprimir+'" frameborder="0" allowfullscreen></iframe>');
 	/*$("#VandAdisplay").html('<div id="prueba"><iframe width="854" height="480" frameborder="0" allowfullscreen> <audio conrols autoplay width="100p" height="50px" style="position:absolute;"> <source src="../../../Documents_and_settings/MediaPlayer/Audio/'+queImprimir+'">Tu navegador no soporta audio en HTML5, por favor actualizalo, o descarga uno de los principales, como Mozzilla Firefox 3.5 o superior.</audio></iframe></div>');*/
 
 		
 		
	
	/*$("#VandAdisplay").html('<div id="prueba"><iframe width="854" height="480" src="../../../Documents_and_settings/MediaPlayer/Audio/'+queImprimir+'" frameborder="0" allowfullscreen></iframe></div>');*/
});


 	 	$(".paraVideo").click(function(){
 		var queImprimir=$(this).attr("data-file");
 		var verificanombre=document.getElementById("verificanombre");
 		verificanombre.value=queImprimir;
 		//<iframe width="854" height="480" src="https://www.youtube.com/embed/W3Gt2qlLllM" frameborder="0" allowfullscreen></iframe>

 		$("#VandAdisplay").html('<iframe class="fondoclaro bordeclaro sombraclaro"  width="70%" height="480" src="../../../Documents_and_settings/MediaPlayer/Video/'+queImprimir+'" frameborder="0" allowfullscreen></iframe>');
 	/*$("#VandAdisplay").html('<div id="prueba"><iframe width="854" height="480" frameborder="0" allowfullscreen> <audio conrols autoplay width="100p" height="50px" style="position:absolute;"> <source src="../../../Documents_and_settings/MediaPlayer/Audio/'+queImprimir+'">Tu navegador no soporta audio en HTML5, por favor actualizalo, o descarga uno de los principales, como Mozzilla Firefox 3.5 o superior.</audio></iframe></div>');*/
 
 		
 		
	
	/*$("#VandAdisplay").html('<div id="prueba"><iframe width="854" height="480" src="../../../Documents_and_settings/MediaPlayer/Audio/'+queImprimir+'" frameborder="0" allowfullscreen></iframe></div>');*/
});
$(".paraVideoYOU").click(function(){
 		var queImprimir=$(this).attr("data-video");
 		var verificanombre=document.getElementById("verificanombre");
 		verificanombre.value=queImprimir;
 		/*
		var aUno="<iframe width='854' height='480' src='";
		var eUno="' frameborder='0' allowfullscreen></iframe>";*/

 		$("#VandAdisplay").html("<iframe width='70%' height='480' src='"+queImprimir+"' frameborder='0' allowfullscreen></iframe>");

});
 });








function piensa(){
	$("#ejecutar").text("false");
	purificar();
}

	function purificar(){

	

		
		var cadena=quequiere.value;
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");
		cadena=cadena.replace('"',"\'");

		var aUno="<iframe width='854' height='480' src='";
		var eUno="' frameborder='0' allowfullscreen></iframe>";
		
	
		
		//cadena=cadena.toLowerCase();


			//cadena=cadena.replace("NaN",'');
		cadena=cadena.replace(aUno,'');
cadena=cadena.replace(eUno,'');

		/*

cadena=cadena.replace('e"','"');*/
//cadena=cadena.replace("ahttps",'https');




	







var ejecutar=document.getElementById("ejecutar");
//if (ejecutar.value=="true") {
			//cadena=cadena.replace("NaN",'');
	$("#campoRAM").html(listaRAMimprimir);
		$("#listatemporal").html(listaRAMimprimir);
	

//}else if(ejecutar.value=="false"){
	//cadena=cadena.replace("NaN",'');
$("#txtSyst").attr("value",cadena);
		//alert(listaRAMimpresa);
		//$("#listatemporal").html(listaRAMimpresa);	
		var nombre="";
var nombre=prompt("Determine un nombre para el video:"+cadena)
var listatemporal=document.getElementById("listatemporal");

	var campoRAM=document.getElementById("campoRAM");
	var listaRAM="";
		var listaRAM="<button class=\'paraVideoYOU\' data-video=\'"+cadena+"\' data-nombre=\'"+nombre+"\'>"+nombre+"</button><br>";
		var listaRAMimpresa=campoRAM.value;
		var listaRAMimprimir=listaRAMimpresa+listaRAM;
		//$("#campoRAM").html(listaRAMimprimir);
		//$("#listatemporal").html(listaRAMimprimir);
		document.getElementById("campoRAM").innerHTML=listaRAMimprimir;
		document.getElementById("listatemporal").innerHTML=listaRAMimprimir;

$(".paraVideoYOU").click(function(){
 		var queImprimir=$(this).attr("data-video");
 		var verificanombre=document.getElementById("verificanombre");
 		verificanombre.value=queImprimir;
 		/*
		var aUno="<iframe width='854' height='480' src='";
		var eUno="' frameborder='0' allowfullscreen></iframe>";*/

 		$("#VandAdisplay").html("<iframe width='854' height='480' src='"+queImprimir+"' frameborder='0' allowfullscreen></iframe>");

});

	//}
}
/*function borraestevideo(){

	var queBorrarVideo=document.getElementById("DelListVideo").value;
	var queBorrarNombre=document.getElementById("DelListNombre").value;
	var confirmarBorrar=confirm("De verdad quieres borrar de la lista de videos para agregar el video: "+queBorrarNombre+" ?");
var queBorrar="<button onclick='$(\"#DelListNombre\").text($(this).attr(\"data-nombre\")); $(\"#DelListVideo\").text($(this).attr(\"data-video\")); borraestevideo();'data-video='"+queBorrarVideo+"' data-nombre='"+queBorrarNombre+"'>"+queBorrarNombre+"</button><br>";
if (confirmarBorrar) {
alert(queBorrar);
		var campoRAM=document.getElementById("campoRAM");
		var cadena=campoRAM.value;*/
		/*var aUno='<iframe width="854" height="480" src="';
		var eUno='" frameborder="0" allowfullscreen></iframe>';*/
		
	
		
		//cadena=cadena.toLowerCase();


			
		/*cadena=cadena.replace(queBorrar,'');*/


/*var campoRAM=document.getElementById("campoRAM");
	var listaRAM="";*/
		/*var listaRAM="<button onclick='$(\"#DelListNombre\").text($(this).attr(\"data-nombre\")); $(\"#DelListVideo\").text($(this).attr(\"data-video\")); borraestevideo();'data-video='"+cadena+"' data-nombre='"+nombre+"'>"+nombre+"</button><br>";*/
		/*var listaRAMimpresa=campoRAM.value;
		var listaRAMimprimir=listaRAMimpresa-queBorrar;*/
//cadena=cadena.replace("Na",'');
//var listaRAMimprimir=listaRAMimpresa-"Na";
		//alert(listaRAMimpresa);
		//$("#listatemporal").html(listaRAMimpresa);	
		/*$("#campoRAM").html(listaRAMimprimir);
			$("#listatemporal").html(listaRAMimprimir);
			$("#ejecutar").text("true")
		}
}*/
function agregaVideosPanelMuestra(){
	$("#agregaVideosPanel").removeClass("seescode");
}

function agregaVideosPanelEsconde(){
	$("#agregaVideosPanel").addClass("seescode");
}