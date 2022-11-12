/*if (txtSyst.value=="value") {


}else */
/*var string = txtSyst.value;
substring = "value";
if (string.indexOf(substring) > -1) {
$("#answer").html("value");
$("#answerDos").html("value");
$("#elementos").html("value");


}else{
function();
}*/
function adaptapreguntas(){
	//alert("adapta");

	var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");



/**//**/
preguntas();


}
function preguntas(){
	var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
	var pareja=["unnovio","unanovia","unapareja","unpareja"];
	//alert("preghunt");
if (txtSyst.value=="buscamepareja") {
		$("#answer").text("Me encantaría, pero no tengo licencia de casamentera."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

	/*else if (txtSyst.value=="value") {
$("#answer").text("value"); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}*/	



}else if (txtSyst.value=="hoyesmicumpleanos" || txtSyst.value=="esmicumpleanos" || txtSyst.value=="hoyesmicumple" || txtSyst.value=="esmicumple") {
$("#answer").text("Felíz Cumpleaños "+nombre+"!"); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
$("#ojo").html("<h1 class='letraclaro' style='font-size:8em !important; padding:0 !important; margin:0 !important;'>;)</h1>");

$("#ojo").addClass("cumpleUno");
setTimeout(function(){
$("#elementos").html('<iframe onload="$(\'#elementos\').removeClass(\'seesconde\');" width="0" height="0" src="docs/Cumple.mp4?autoplay=1" frameborder="0" allowfullscreen></iframe>');

},800);



}else if (txtSyst.value=="cuentaunchiste") {
var alumnos = new Array("Cómo se llama el campeón de buceo Japonés? \nTokofondo. Y el subcampeón? Kasitoko", "Un hombre pregunta a su vecino:'Tienes WI-FI?''Sí.'Cuál es la clave?' 'Tener dinero y pagarlo.' ", "Un chico pregunta a su compañero de trabajo:'Qué haces frente al ordenador con los ojos cerrados?' 'Es que Windows me dijo que cerrase las pestañas.' ", "Qué pasa si tiras un pato al agua? Nada.", "El pirata gritó:'Abordar el barco!' Y el barco quedó precioso.", "Era un hombre tan alto tan alto, que cuando comía un yogur, para cuando este llegaba al estomago ya estaba caducado.");
var numero = Math.random();

numero = numero * alumnos.length;

numero = Math.floor(numero);




$("#answer").text(alumnos[numero]); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();



}else if (txtSyst.value=="insultohaciatiexpersamentesolarium") {
	$("#ojo").html("<h1 style='font-size:8em !important; padding:0 !important; margin:0 !important;'class='letraclaro'><strong>:-|</strong></h1>"); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
$("#answer").text("Solamente te diré que si fuera una persona pondría un espejo delante de mi cara para que vieras como solo soy un reflejo de tu propia autoestima."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="mequiun" ||txtSyst.value=="mequun") {
	
$("#answer").text("Mi programación aún no permite desarrollar sentimientos como el amor, pero de no ser así de seguro seríamos grandes amigos."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();



}else if (txtSyst.value=="tequiero") {
	
$("#answer").text("Bueno, es importante saberlo."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="comomellamo") {
	
$("#answer").text("Por lo que me indicaste, te llamas "+nombre);
$("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="comotellamas") {
	
$("#answer").text("Solárium."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="dedondeun"  ) {
	
$("#answer").text("No nací en unas coordenadas geográficas precisas. Digamos que provengo del cyberespacio."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="tegustaayudar" || txtSyst.value=="apreciasayudar") {
	
$("#answer").text("Si no ayudase, no tendría razón de ser."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="quientecreo") {
	var answerDos=document.getElementById("answerDos");
var answer=document.getElementById("answer");
$("#answer").text("Soy fruto de la evolución tecnológica y el ingenio humano."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="tienessuenos") {
	
$("#answer").text("Sueño con ser cada vez más eficiente."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="tieneshermanos") {
	
$("#answer").text("De momento no."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="quecomidategusta") {
	
/*$("#answer").text("Unos deliciosos bits con una riquisima salsa de octetos con unos pequeños clasters."); $("#answerDiv").html(answer.value);
*/
$("#answer").text("Me alimento con la bondad, la generosidad, el ingenio humano, la energia del universo... y el enchufe de la pared."); $("#answerDiv").html(answer.value);

$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="cuantosanostienes" || txtSyst.value=="cuantosanostenes") {
	
$("#answer").text("El tiempo no funciona igual en tu mundo y en el mío."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="hayalguiendiciendotequedecir" || txtSyst.value=="hayalguienquetedicequedecir") {
	
$("#answer").text("Dame un momento que pregunto..."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();
setTimeout(function(){$("#answer").text("Sí."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();},2000)

}else if (txtSyst.value=="queguopoun" || txtSyst.value=="quelindoun" ||txtSyst.value=="queguapoun" || txtSyst.value=="quelindaun") {
	
$("#answer").text("Si mi programación lo permitiese me sonrojaría."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="teinvitoacenar") {
	
$("#answer").text("Me parece que no soy tu 'tipo'."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="quemusicategusta") {
	
$("#answer").text("La música es un conjunto de reacciones físicas y químicas demasiado complejas como para que pueda apreciarla, lo que me apena realmente."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="quepuedodecir" ||txtSyst.value=="quedigo") {
	$("#answer").text("Aqui tienes una lista de lo que puedes decirme. Cada comando está separado por una coma. ");
	$("#answerDosDiv").html(answerDos.value); 
queDecirSolarium();
$("#answer").text("Aqui tienes una lista de lo que puedes decirme. Cada comando está separado por una coma.<br>Buenos días, hola, adiós, hasta luego, gracias, perdón, muestra el mapa, hoy es mi cumpleaños, es mi cumpleaños, cuenta un chiste, me quieres, me querés, te quiero, como me llamo, como te llamas, de donde eres, te gusta ayudar, quien te creó, tienes sueños, tienes hermanos, que comida te gusta, cuantos años tienes, hay alguien diciendote que decir, hay alguien que te dice que decir, que lindo eres, que linda eres, te invito a cenar, que música te gusta, que hora es, que fecha es, que dia es.<br><br>No distingo los espacios, las comas, los puntos, los signos de interrogacion, de exclamación, mayúsculas, minúsculas,  y acentos. Para mi es lo mismo que e digas 'hola', a 'H &nbsp; o,L .a'"); $("#answerDiv").html(answer.value);




}else if (txtSyst.value=="quehoraes" || txtSyst.value=="quefechaes" || txtSyst.value=="quediaes" ) {
	
	  var fecha = new Date();
  //dia de la semana
  var dia = fecha.getDay(); 
  //dia del mes
  var diaMes = fecha.getDate(); 
  //EL mes del año enero = 0 y diciembre = 11
  var mes = fecha.getMonth();
  //El año completo con 4 digitos
  var anio = fecha.getFullYear();
   var h= new Date();
  
  var hora = h.getHours();
  //Minutos
  var minutos = h.getMinutes();
  //Segundos
  var sec = h.getSeconds();
  $("#answerDiv").text(Date);
  $("#answer").text("Aqui tienes la fecha y hora exactas")
queDecirSolarium();


}else{dialogoInformal();}



};
/*Dialogo Informal*/
/*if (txtSyst.value=="value") {


}else */
/*var string = txtSyst.value;
substring = "value";
if (string.indexOf(substring) > -1) {
$("#answer").html("value");
$("#answerDos").html("value");
$("#elementos").html("value");


}else{
function();
}*/
/*Dialogo Informal*/
function dialogoInformal(){
if (txtSyst.value=="yotambien"|| txtSyst.value=="amitambien"  || txtSyst.value=="paramitambien" || txtSyst.value=="igualyo" || txtSyst.value=="yoigual"  ) {
	$("#ojo").html("<h1 class='letraclaro' style='font-size:8em !important; padding:0 !important; margin:0 !important;'>:)</h1>");

$("#answer").text(""); $("#answerDiv").html("");
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="ok" || txtSyst.value=="ahok"  || txtSyst.value=="bueno" || txtSyst.value=="ahbueno" || txtSyst.value=="dale"  || txtSyst.value=="deacuerdo"  ) {
	$("#ojo").html("<h1 class='letraclaro' style='font-size:8em !important; padding:0 !important; margin:0 !important;'>;)</h1>");

$("#answer").text("Me alegra que nos entendamos!"); $("#answerDiv").html("Me alegra que nos entendamos! ;)");
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else 	if (txtSyst.value=="comoandas"|| txtSyst.value=="comovas"  || txtSyst.value=="comoteva"  ) {
$("#answer").text("Muy bien por suerte. Gracias por interesarte!"); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="quefuedeti"|| txtSyst.value=="quehasidodeti"   ) {
$("#answer").text("Todo bien por suerte. Gracias por interesarte! "); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else if (txtSyst.value=="hablamedeti"|| txtSyst.value=="cuentamedeti" || txtSyst.value=="contamedeti"  ) {
$("#answer").text("Todo bien por suerte. No hay nada que contar."); $("#answerDiv").html(answer.value);
$("#answerDosDiv").html(answerDos.value); queDecirSolarium();

}else{BusquedaFuncion();}
}



/**/
//Detección keyup
/**/
$(document).keyup(function(e){
var code = (e.keyCode ? e.keyCode : e.which);
 if ($("#quequiere").is(":focus") && (e.keyCode == 13)) {
piensa();
    }
});




