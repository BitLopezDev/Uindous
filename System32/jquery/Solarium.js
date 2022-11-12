/*var id;
$(window).resize(function() {
    clearTimeout(id);
    id = setTimeout(doneResizing, 500);

});
*/


    /*window.onload=function(){*/
/*
var verddos= document.getElementById("verddos");
verddos.onclick=function(){
$("#ddosconsola").removeClass("seesconde");

    
    }*/
    
/*
var miinput=document.getElementById("miinput");
var escrito =miinput.value;
$("#confirmar").click(function(escrito){
    //alert("Su mensaje es" +miinput.value);});
$("#unaDivCualquiera").php("<"+"script> function ejecutable(){"+miinput.value+"}</"+"script>");});
//$("textarea").text(escrito);});
//$('#ejecutar').click(ejecutable);
}*/
/*
function abrelocal(){
    $("#local").removeClass("seesconde");
    $("#local").dialog({
        show:{effect:"blind", duration:1000},
        hide:{effect:"explode", duration:1000},
        buttons:{
            "Continuar":function(){$(this).dialog("close")},
            "Cancelar":function(){$(this).dialog("close")},
            Ok:function(){$(this).dialog("close")}
        },
        width:"500px",
        modal:true
    });
    */
/*}*/
function solarium(){
    $("#lastthinglog").html("solarium");
$("#log").append("solarium");
$("#menus").addClass("seesconde");
//
$("#solar").html("<center><iframe id='iframeDeBusqueda' class='iframeChico' src='System/Solarium/Solarium.php'></iframe></center><div id='pienavegador' class='pienavegadorchico'><button onclick='sacasolarium();'>Cerrar</button>&nbsp;<button id='AgrandaSolarium'  onclick='agrandasolarium();'>Agrandar</button>&nbsp;<button id='AchicaSolarium' class='seesconde' onclick='achicasolarium();'>Achicar</button><div id='masbusquedaOEM' class='seesconde'><button id='IrASolarium' onclick='IrASolarium();''>Ir a la pagina de Solarium</button></div></div>");
//<button id='AchicaSolarium' class='seesconde' onclick='achicasolarium'>Achicar</button>
//<button id='AgrandaSolarium'  onclick='agrandasolarium'>Agrandar</button>
$("#solar").removeClass("seesconde");
$("#menuchico").removeClass("menuchico");          
$("#menuchico").removeClass("fondoclaro");
$("#menuchico").addClass("menuchicoDos");
muestramenuchicof();
/*$("#menuchico").show();
        $("#noinicio").show();
        $("#inicio").hide();*/
}
function sacasolarium(){
    $("#lastthinglog").html("sacasolarium");
$("#log").append("sacasolarium");
achicasolariumOEM();
    achicasolarium();
    $("#menuchico").removeClass("iframeChico");
    $("#menuchico").removeClass("menuchicoDos");
   $("#menuchico").addClass("menuchico");                                   
   $("#menuchico").removeClass("fondoclaro");

$("#solar").html("");

$("#solar").addClass("seesconde");
 $("#menus").removeClass("seesconde");
 escondemenuchicof();

}
function agrandasolarium(){
    $("#lastthinglog").html("agrandasolarium");
$("#log").append("agrandasolarium");
    $("#barra").hide();
    $("#barraderactiva").hide();

   
   // $("header").hide();
   $("#pienavegador").removeClass("pienavegadorchico");
   $("#pienavegador").addClass("pienavegadorGrande");
$("#solar").removeClass("iframeChico");
$("#solar").addClass("iframeGrandeD");
$("#iframeDeBusqueda").removeClass("iframeChico");
$("#iframeDeBusqueda").removeClass("iframeChicoOEM");
$("#iframeDeBusqueda").addClass("iframeGrande");
$("#iframeDeBusquedaDos").removeClass("iframeChico");
$("#iframeDeBusquedaDos").removeClass("iframeChicoOEM");
$("#iframeDeBusquedaDos").addClass("iframeGrande");
$("#abcdefg").removeClass("iframeChico");
$("#abcdefg").addClass("iframeGrandeD");
$("#AgrandaSolarium").addClass("seesconde");
$("#AchicaSolarium").removeClass("seesconde");
$("#AchicaSolariumOEM").removeClass("seesconde");
$("#menuchico").removeClass("menuchico");                                  
 $("#menuchico").removeClass("fondoclaro");
$("#menuchico").addClass("menuchicoTres");
$("#masbusquedaOEM").removeClass("seesconde");
}
function achicasolarium(){
    $("#lastthinglog").html("achicasolarium");
$("#log").append("achicasolarium");
    $("#barra").show();
    $("#barraderactiva").show();
$("#pienavegador").removeClass("pienavegadorGrande");
$("#pienavegador").addClass("pienavegadorchico");
   // $("header").show();
$("#solar").addClass("iframeChico");
$("#solar").removeClass("iframeGrandeD");
$("#iframeDeBusqueda").addClass("iframeChico");
$("#iframeDeBusqueda").removeClass("iframeGrande");
$("#abcdefg").addClass("iframeChico");
$("#abcdefg").removeClass("iframeGrandeD");
$("#AchicaSolarium").addClass("seesconde");
$("#AchicaSolariumOEM").addClass("seesconde");
$("#AgrandaSolarium").removeClass("seesconde");
$("#menuchico").removeClass("menuchico");                                   
$("#menuchico").removeClass("fondoclaro");
$("#menuchico").removeClass("menuchicoTres");
$("#menuchico").addClass("menuchicoDos");
$("#masbusquedaOEM").addClass("seesconde");
}
function achicasolariumOEM(){
    $("#lastthinglog").html("achicasolariumOEM");
$("#log").append("achicasolariumOEM");
     $("#barra").show();
    $("#barraderactiva").show();
    $("#pienavegador").addClass("pienavegadorchico");
$("#pienavegador").removeClass("pienavegadorGrande");
$("#solar").addClass("iframeChico");
$("#solar").removeClass("iframeGrandeD");
$("#iframeDeBusqueda").removeClass("iframeGrande");
$("#iframeDeBusqueda").addClass("iframeChicoOEM");
$("#abcdefg").addClass("iframeChico");
$("#abcdefg").removeClass("iframeGrandeD");
$("#AchicaSolarium").addClass("seesconde");
$("#AchicaSolariumOEM").addClass("seesconde");
$("#AgrandaSolarium").removeClass("seesconde");
$("#menuchico").removeClass("menuchico");                                   
$("#menuchico").removeClass("fondoclaro");
$("#menuchico").removeClass("menuchicoTres");
$("#menuchico").addClass("menuchicoDos");
    $("#masbusquedaOEM").addClass("seesconde");

/*$("#solar").addClass("iframeChico");
$("#solar").removeClass("iframeGrandeD");
$("#iframeDeBusquedaDos").removeClass("iframeGrande");
$("#iframeDeBusquedaDos").addClass("iframeChicoOEM");

$("#abcdefg").addClass("iframeChico");
$("#abcdefg").removeClass("iframeGrandeD");
$("#AchicaSolariumOEM").addClass("seesconde");

$("#AchicaSolarium").addClass("seesconde");
$("#AgrandaSolarium").removeClass("seesconde");
$("#menuchico").removeClass("menuchico");                                   
$("#menuchico").removeClass("fondoclaro");
$("#menuchico").removeClass("menuchicoTres");
$("#menuchico").addClass("menuchicoDos");*/

}
function SolariumOEM(){
    $("#lastthinglog").html("SolariumOEM");
$("#log").append("SolariumOEM");
    achicasolariumOEM();
    achicasolarium();
    $("#menuchico").removeClass("iframeChico");
var tipoBusquedaOEM =document.getElementById("tipoBusquedaOEM");

    $("#menus").addClass("seesconde");
    $("#solar").html('<style>#abcdefg{background-color:black; border-radius:0 0 0 0 !important;}</style><center><div id="abcdefg" class="iframeChico"><ifr'+'a'+'me id="iframeDeBusqueda" class="iframeChicoOEM" src="https://duckduckgo.com/?q='+BusquedaOEM.value+'&t=ffnt&ia='+tipoBusquedaOEM.value+'"  ></ifr'+'am'+'e></div></center><div id="pienavegador" class="pienavegadorchico"><button onclick="sacasolarium();">Cerrar</button>&nbsp;<button id="AgrandaSolarium"  onclick="agrandasolarium();">Agrandar</button>&nbsp;<button id="AchicaSolariumOEM" class="seesconde" onclick="achicasolarium();">Achicar</button><div id="masbusquedaOEM" class="seesconde"><button onclick="WindowBusquedaOEM();">Mostrar como ventana emergente.</button><button id="IrABusquedaOEM" onclick="IrABusquedaOEM();">Redirigir segun terminos de Busqueda</button><button id="volverBusquedaOEM" onclick="volverBusquedaOEM();">Reiniciar</button></div></div>');
/**/$("#solar").removeClass("seesconde");
$("#menuchico").removeClass("menuchico");                                   
$("#menuchico").removeClass("fondoclaro");
$("#menuchico").removeClass("menuchicoTres");
$("#menuchico").addClass("menuchicoDos");
muestramenuchicof();
//<button id="AchicaSolarium" class="seesconde" onclick="achicasolariumOEM">Achicar</button>
//class='iframeChico' class="iframeChicoOEM" class="IframeGrande"
//<button id="AgrandaSolarium"  onclick="agrandasolarium">Agrandar</button>
}
function volverBusquedaOEM(){
    $("#lastthinglog").html("volverBusquedaOEM");
$("#log").append("volverBusquedaOEM");
 $("#solar").html('<style>#abcdefg{background-color:black; border-radius:0 0 0 0 !important;}</style><center><div id="abcdefg" class="iframeGrandeD"><iframe id="iframeDeBusqueda" class="iframeGrande" src="https://duckduckgo.com/?q='+BusquedaOEM.value+'&amp;t=ffnt&amp;ia='+tipoBusquedaOEM.value+'"></iframe></div></center><div id="pienavegador" class="pienavegadorGrande"><button onclick="sacasolarium();">Cerrar</button>&nbsp;<button id="AgrandaSolarium" onclick="agrandasolarium();" class="seesconde">Agrandar</button>&nbsp;<button id="AchicaSolariumOEM" class="" onclick="achicasolarium();">Achicar</button><div id="masbusquedaOEM" class=""><button onclick="WindowBusquedaOEM();">Mostrar como ventana emergente.</button><button id="IrABusquedaOEM" onclick="IrABusquedaOEM();">Redirigir segun terminos de Busqueda</button><button id="volverBusquedaOEM" onclick="volverBusquedaOEM();">Reiniciar</button></div></div>');   
}
function WindowBusquedaOEM(){
    $("#lastthinglog").html("WindowBusquedaOEM");
$("#log").append("WindowBusquedaOEM");
    $("#WindowBusquedaOEMprogram").text('<!DOCTYPE html><html><head><title>Cargando Resultado de Busqueda...</title><scr'+'ipt type="text/javascr'+'ipt">location.href = "https://duckduckgo.com/?q='+BusquedaOEM.value+'&t=ffnt&ia='+tipoBusquedaOEM.value+'";</scr'+'ipt></head><body></body></html>');
abreWindowBusquedaOEM('WindowBusquedaOEMtxtprogram'.value);
}
function IrABusquedaOEM(){
    $("#lastthinglog").html("IrABusquedaOEM");
$("#log").append("IrABusquedaOEM");
    location.href="https://duckduckgo.com/?q="+BusquedaOEM.value+"&t=ffnt&ia="+tipoBusquedaOEM.value;
}

function IrASolarium(){
    $("#lastthinglog").html("IrASolarium");
$("#log").append("IrASolarium");
    location.href="System/Solarium/Solarium.php";
}
/*function muestraBusquedaOEM(){
    $("#BusquedaOEMDIV").removeClass("seesconede");
    $("#lupaContenedor").html('<img src="Documents_and_settings/visible/Lupa.png" onclick="escondeBusquedaOEM();"id="Busquedainteligente" width="150px" height="100px"/>');
}
function escondeBusquedaOEM(){
    $("#BusquedaOEMDIV").addClass("seesconede");
    $("#lupaContenedor").html('<img src="Documents_and_settings/visible/Lupa.png" onclick="muestraBusquedaOEM();"id="Busquedainteligente" width="150px" height="100px"/>');
}*/

 function SolariumOEMWEB(){
        $("#lastthinglog").html("SolariumOEMWEB");
$("#log").append("SolariumOEMWEB");
$("#tipoBusquedaOEM").text("web");
SolariumOEM();
    }
    function SolariumOEMIMG(){
         $("#lastthinglog").html("SolariumOEMIMG");
$("#log").append("SolariumOEMIMG");
$("#tipoBusquedaOEM").text("images");
SolariumOEM();

    }
    function SolariumOEMVIDEOS(){
         $("#lastthinglog").html("SolariumOEMVIDEOS");
$("#log").append("SolariumOEMVIDEOS");
$("#tipoBusquedaOEM").text("videos");
SolariumOEM();

    }
    function SolariumOEMNEWS(){
         $("#lastthinglog").html("SolariumOEMNEWS");
$("#log").append("SolariumOEMNEWS");
$("#tipoBusquedaOEM").text("news");
SolariumOEM();

    }
    function SolariumOEMURL(){
         $("#lastthinglog").html("SolariumOEMURL");
$("#log").append("SolariumOEMURL");
var BusquedaOEM=document.getElementById("BusquedaOEM");
var BusquedaOEMvalor= BusquedaOEM.value;

 achicasolariumOEM();
    achicasolarium();
    $("#menuchico").removeClass("iframeChico");
var tipoBusquedaOEM =document.getElementById("tipoBusquedaOEM");

    $("#menus").addClass("seesconde");
    $("#solar").html('<style>#abcdefg{background-color:black; border-radius:0 0 0 0 !important;}</style><center><div id="abcdefg" class="iframeChico"><ifr'+'a'+'me id="iframeDeBusqueda" class="iframeChicoOEM" src="'+BusquedaOEMvalor+'"  ></ifr'+'am'+'e></div></center><div id="pienavegador" class="pienavegadorchico"><button onclick="sacasolarium();">Cerrar</button>&nbsp;<button id="AgrandaSolarium"  onclick="agrandasolarium();">Agrandar</button>&nbsp;<button id="AchicaSolariumOEM" class="seesconde" onclick="achicasolarium();">Achicar</button><div id="masbusquedaOEM" class="seesconde"><button onclick="WindowBusquedaOEM();">Mostrar como ventana emergente.</button><button id="IrABusquedaOEM" onclick="IrABusquedaOEM();">Redirigir segun terminos de Busqueda</button><button id="volverBusquedaOEM" onclick="volverBusquedaOEM();">Reiniciar</button></div></div>');
/**/$("#solar").removeClass("seesconde");
$("#menuchico").removeClass("menuchico");                                   
$("#menuchico").removeClass("fondoclaro");
$("#menuchico").removeClass("menuchicoTres");
$("#menuchico").addClass("menuchicoDos");
muestramenuchicof();
   }



