// JavaScript Document

window.onload=function(){
 // imprimebarranormal();
       //  alert("VrificandoPHP");
                var verificaphp=document.getElementById('verificaphp');
                var phpenabled="phpEnabledTrueConfirmed";
var verificaphpvalor =verificaphp.value;
pruebaFunctionf();
                /*do{var ClaveDO=prompt("Servidor php deshabilitado o con fallas técnicas. Introduzca su clave de inicio de sesión."+verificaphp.value)}while(ClaveDO!=003 && verificaphp == true);*/
          /*if(verificaphp.value == phpenabled){}else{do{var ClaveDO=prompt("Servidor php deshabilitado o con fallas técnicas. Introduzca su clave de inicio de sesión."+verificaphp.value)}while(ClaveDO!=003);*/
                      /*No se porque, funciona al reves ({===} funciona enves de {!=})    
                }*/ 
  if (jQuery.browser.msie) {//Si el navegador es IE
  alert("los navegadores Microsoft Internet Explorer y Microsoft Edge no soportan este sistema.")
        } 
        if (top != self) {$("body").html("");$("body").text("");location.href="System32/nomarco.php";}else{

/*$("#alerta").html("<h1>ATENCION</h1><br><h2>Tu computadora esta infectada con el sinfrome de la cava loca.</h2<br><p>Reiniciiala para solucionar la incidencia</p>");
alerta();*/
inicioVerificadoPHP();
}
/**/
/*                    */
/**/
}
/*
function mostrarhora(){
var f=new Date();
cad=f.getHours()+":"+f.getMinutes();
window.status =cad;
 $("#hora").text(f);
}   */ /*
 function include(archivo)
    {
        if (jQuery.browser.msie) {//Si el navegador es IE
           alert("los navegadores Microsoft Internet Explorer y Microsoft Edge no soportan este sistema.")
        } else {//Para el  resto
            var oHead = document.getElementsByTagName('head')[0];
            var oScript = document.createElement('script');
            oScript.type = 'text/javascript';
            oScript.charset = 'utf-8';
            oScript.src = archivo;
            oHead.appendChild(oScript);        
        }
    }*/
function inicioVerificadoPHP(){
$("#lastthinglog").html("inicioVerificadoPHP");
$("#log").append("inicioVerificadoPHP");


//$("#apelaciones").html('<link href="System32/jquery/$definicion/css/ui-lightness/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>');
  $("#barrader").hide();
$("#textareas").hide();
$("#textareas>textarea").hide();
$("#ddosconsola").hide();
  $("#menuchico").hide();
  $("#menuiniciogrande").hide();
  $("#noinicio").hide();
  $("html").addClass("fondoclaro");
  $("html").addClass("fondodefecto");
  $("#antecarga").hide();
  
imprime();
/*var inicio=document.getElementById("inicio");
$("#inicio").attr("data-action","open");
inicio.onmouseover=function(){
  var atributoInicio=$("#inicio").attr("data-animation");
  if(atributoInicio=="animate"){
    $("#inicio").addClass("siStart");
    setTimeout(function(){
      $("#inicio").removeClass("siStart");
    },1000)
  }*/
  var inicio=document.getElementById("inicio");
  //inicio.removeAttribute("class");
inicio.setAttribute("class","siStart");
$("#inicio").attr("data-action","open");
$("#inicio").attr("data-animation","animate");
$("button").addClass("StartInicio");
 setTimeout(function(){
  $("button").removeClass("StartInicio");
 },1500);
 //$("#inicio").addClass("siStart");

/*inicio.onmouseover=function(){
  var atributoInicio=$("#inicio").attr("data-animation");
  if(atributoInicio=="animate"){
 $("#inicio").addClass("siStart");
setTimeout(function(){
      $("#inicio").removeClass("siStart");
    },1000);
}
}*/





  //Minutos

  //Segundos

  //include("../../System/ControlPanel/Personalizacion/archivos/jsvalue.js")
//$("#imprimefotousuario").html('<img src="'+usuario+'" alt="Bloquee el equipo" id="usuariofotooiniciochico" width="50px" height="50px"');
  //$("#hora").text(Date);
$("#body").removeClass("seesconde");
StartJingle();
$("#lastthinglog").html("FKBootEnd");
$("#log").append("FKBootEnd");

  /**/

/**//**/
//Fin de Function
/**/
  /**/

$("#BusquedaOEMDIV").keyup(function(e){
var code = (e.keyCode ? e.keyCode : e.which);
 if ($("#BusquedaOEM").is(":focus") && (e.keyCode == 13)) {
SolariumOEMWEB();
    }
});


}
