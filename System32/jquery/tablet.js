function VerTareas(){
  

$("#menuInicio").hide();
        //alert("abreprogama");
        //$("#Botoninicio").hide();
    $("#DesktopContent").removeClass("seesconde");
    document.getElementById("DesktopProgramas").removeAttribute("class");
    document.getElementById("DesktopProgramas").removeAttribute("style");
        escondeMenuInicio();
$("#DesktopContent").show();
    /*$("#logo").html('<center><strong><h2><img id="CerrarProgramasLogo" onclick="forzardetencionprogramas();" src="../Documents_and_settings/visible/Windows10/SeguridadDenegado.ico"  title="Forzar detención de todos los programas" alt="X" ></h2></strong></center>');*/
    $(".programa").addClass("seesconde");
    $("#DesktopNoProgramas").addClass("seesconde");

    /*document.getElementById("DesktopProgramas").removeAttribute("class");
    document.getElementById("cargandoprograma").removeAttribute("class");
    document.getElementById("programaabierto").setAttribute("class","seesconde");*/

    $("#DesktopProgramas").removeClass("seesconde");
    $("#cargandoprograma").addClass("seesconde");
    $("#programaabierto").addClass("seesconde");
     $("#listaprogramas").removeClass("seesconde");

$("#DesktopContent").removeClass("seesconde");



  
}

function OcultarTareas(){
      $("#botones").addClass("seesconde"); 

$("#menuInicio").show();
        //alert("abreprogama");
        //$("#Botoninicio").hide();
    $("#DesktopContent").removeClass("seesconde");
  /*  document.getElementById("DesktopProgramas").removeAttribute("class");
    document.getElementById("DesktopProgramas").removeAttribute("style");*/
    $("#DesktopProgramas").addClass("seesconde");
gotoMenuInicio();
$("#DesktopContent").show();
    /*$("#logo").html('<center><strong><h2><img id="CerrarProgramasLogo" onclick="forzardetencionprogramas();" src="../Documents_and_settings/visible/Windows10/SeguridadDenegado.ico"  title="Forzar detención de todos los programas" alt="X" ></h2></strong></center>');*/
   $(".programa").addClass("seesconde");
    $("#DesktopNoProgramas").removeClass("seesconde");

    /*document.getElementById("DesktopProgramas").removeAttribute("class");
    document.getElementById("cargandoprograma").removeAttribute("class");
    document.getElementById("programaabierto").setAttribute("class","seesconde");*/

    $("#DesktopProgramas").addClass("seesconde");
    $("#cargandoprograma").addClass("seesconde");
    $("#programaabierto").addClass("seesconde");
     $("#listaprogramas").addClass("seesconde");

$("#DesktopContent").removeClass("seesconde");



  $(".SeleccionaEstePrograma").addClass("seesconde");
//$("#arrastrable").removeClass("seesconde");
}


function VerEstePrograma(){
   /* var Asrc=$(this).attr("src");
var Aclass=$(this).attr("class");
var Atitle=$(this).attr("title");*/
var AprogramDos=$(this).attr("data-program");
$("#programaabierto").addClass("seesconde");
 $("[data-noMore='"+AprogramDos+"']").removeClass("seesconde");
 //$("#listaprogramas").hide();
 $("#programaabierto").removeClass("seesconde");
  $("#listaprogramas").removeClass("seesconde");
}


 window.onload=function(){
        /*if(navigator.onLine){
alert('Online');
} else {
alert('Offline')
}*/
        pruebaFunctionf();
    //  $(".borrar").dblclick(function(){
imprimeBody();
setTimeout(function(){
     var TareasCuadrado=document.getElementById("TareasCuadrado")
        TareasCuadrado.onclick=function(){
            VerTareas();
        }
    },5600);
   
//      });
$(".SeleccionaEstePrograma").dblclick(function(event){
var noMas=$(this).attr("data-program");
    $("[data-noMore='"+noMas+"']").removeClass("seesconde");
    gotoDesktop();
      /*  $("#botones").addClass("seesconde"); 

      x = event.pageX;
      y = event.pageY;
      $("#botones").removeClass("seesconde");
      $("#botones").animate({left:x, top:y},1000);
  var programaParaSeleccionar="";
        var programaParaSeleccionar=$(this).attr("data-program");
         $("#PensandoEnCerrarTextarea").text("");
         $("#PensandoEnCerrarTextarea").html("");
        $("#PensandoEnCerrarTextarea").text(programaParaSeleccionar);

         $("#queprograma").text("");
        $("#queprograma").text(programaParaSeleccionar);

         $("#srcTextarea").text("");
        $("#srcTextarea").text(programaParaSeleccionar);
         var textoDis="";
        var textoDis=document.getElementById("PensandoEnCerrarTextarea");
        //alert("Hola: "+textoDis.value);
       // alert("Programa: "+programaParaSeleccionar);
     $(this).attr("data-esconde",PensandoEnCerrarTextarea.value);
           elegirsiverocerrar();*/
        
    });
/*$(".SeleccionaEstePrograma").dblclick(cierraProgramaSeleccionado);*/



/*
        document.getElementById("NotepadListTigger").click();
        document.getElementById("MediaPlayerListTigger").click();*/
        //setTimeout(function(){VerTareas();},2000);
        
      

       /* $(".BarraInfImg").dblclick(function(){$("app").tigger("click");});  
$(".BarraInfImgUno").dblclick(function(){document.getElementById("NotepadListTigger").click();});
*/
/*
$(".BarraInfImgTres").dblclick(function(){document.getElementById("MediaPlayerListTigger").click();});
$(".BarraInfImgCuatro").dblclick(function(){document.getElementById("modernizacionListTigger").click();});
$(".BarraInfImgCinco").dblclick(function(){document.getElementById("GamesListTigger").click();});
$(".BarraInfImgSeis").dblclick(function(){document.getElementById("browserListTigger").click();});
$(".BarraInfImgSiete").dblclick(function(){document.getElementById("calculadoraListTigger").click();})
*/$(".BarraIzqImg").click(abreprogama);
$(".MenuImg").dblclick(abreprogama);
    }

function elegirsiverocerrar(){
   
    var PensandoEnCerrarTextarea="";
    var noMas="";
var PensandoEnCerrarTextarea=document.getElementById("PensandoEnCerrarTextarea");
   var noMas= PensandoEnCerrarTextarea.value
  // alert("Nomas: "+noMas);

$("#CerrarProgramaButton").click(function(){
$("[data-noMore='"+noMas+"']").remove();
$("[data-esconde='"+noMas+"']").hide();
$("[data-esconde='"+noMas+"']").removeAttr("data-hide");
$("#botones").addClass("seesconde");
   $("#SolariumIframe").attr("data-queiframeterminardraganddrop","../Documents_and_settings/visible/Windows10/solarium.ico");
//$(this).hide();
});
$("#VerProgramaButton").click(function(){
   $("#SolariumIframe").attr("data-queiframeterminardraganddrop","../Documents_and_settings/visible/Windows10/solarium.ico");
$("programaabierto").addClass("seesconde");
$("#programaabierto>iframe").addClass("seesconde");
 $("[data-noMore='"+noMas+"']").removeClass("seesconde");
 //$("#listaprogramas").hide();
 $("#programaabierto").removeClass("seesconde");
  $("#listaprogramas").addClass("seesconde");
$("#botones").addClass("seesconde");


});
}
function cierraProgramaSeleccionado(){



}





    function abreprogama(){
      $("#botones").addClass("seesconde"); 

         $("#programaabierto").addClass("seesconde");
 $("#cargandoprograma").removeClass("seesconde");
        $("#menuInicio").hide();
        //alert("abreprogama");
        ////$("#Botoninicio").hide();
    $("#DesktopContent").removeClass("seesconde");
    document.getElementById("DesktopProgramas").removeAttribute("class");
    document.getElementById("DesktopProgramas").removeAttribute("style");
        escondeMenuInicio();
$("#DesktopContent").show();

var title=$(this).attr("title");
var iconoPrograma=$(this).attr("src")
var program=$(this).attr("data-program");

$("#srcTextarea").text(iconoPrograma);

$("[data-noMore='"+program+"'").remove();
/*var CuantosProgramasAbiertosTextarea=document.getElementById("CuantosProgramasAbiertosTextarea");



if (CuantosProgramasAbiertosTextarea.value=="") {

    $("#CuantosProgramasAbiertosTextarea").html(title);}else{$("#CuantosProgramasAbiertosTextarea").html(CuantosProgramasAbiertosTextarea.value+", "+title);

}*/
var listaprogramas=document.getElementById("listaprogramas");
$("[data-program='"+program+"']").removeClass("seesconde");
$("[data-program='"+program+"']").show();
/*listaprogramas.innerHTML+='  <img height="250px" width="170px"  class="SeleccionaEstePrograma" ondblclick="cierraProgramaSeleccionado();"  src="'+iconoPrograma+'"  data-program="'+program+'"  />';*/




    $("#logo").html('<center><strong><h2><img  onclick="forzardetencionprogramas();" src="../Documents_and_settings/visible/Windows10/SeguridadDenegado.ico"  title="Forzar detención de todos los programas?" alt="X" ></h2></strong></center>');
    $(".programa").addClass("seesconde");
    $("#DesktopNoProgramas").addClass("seesconde");

    /*document.getElementById("DesktopProgramas").removeAttribute("class");
    document.getElementById("cargandoprograma").removeAttribute("class");
    document.getElementById("programaabierto").setAttribute("class","seesconde");*/

    $("#DesktopProgramas").removeClass("seesconde");
    $("#cargandoprograma").removeClass("seesconde");
    $("#programaabierto").addClass("seesconde");
//var src=$(this).attr("src");

$("#cargandoprograma").html('<br><br><br><br><center style="color:white !important;"><h1>Cargando '+title+'</h1><br><br><h2><img src="../Documents_and_settings/visible/Windows10/loading.gif" height="250px" width="250px" onload="imprimeprograma();"  title="cargando..." alt="Cargando.." ></h2><br><h3>Cargando '+title+'...</h3></center>');
$("#cargandoprograma").removeClass("seesconde");
$("#queprograma").text(program);

    }
    





function imprimeprograma(){
     $("#programaabierto").addClass("seesconde");
    $("#cargandoprograma").html("");
       $("#DesktopContent").removeClass("seesconde");
    var programaabierto=document.getElementById('programaabierto');
    var queprograma=document.getElementById('queprograma');
var srcTextarea=document.getElementById("srcTextarea");

    /*programaabierto.innerHTML+='<iframe class="programa" data-queiframeterminardraganddrop="'+srcTextarea.value+'" onload="terminaCargarPrograma();" height="100%" width="100%;" src="'+queprograma.value+'" data-noMore="'+queprograma.value+'"  frameborder="0" allowfullscreen></iframe>'*/
    $("#programaabierto").append('<iframe class="programa" data-queiframeterminardraganddrop="'+srcTextarea.value+'" onload="terminaCargarPrograma();" height="100%" width="100%;" src="'+queprograma.value+'" data-noMore="'+queprograma.value+'"  frameborder="0" allowfullscreen></iframe>');

}
function terminaCargarPrograma(){
     $("#programaabierto").addClass("seesconde");
    $("#DesktopContent").removeClass("seesconde");
    //var queprogramaNombre
    
    $("#programaabierto").removeClass("seesconde");
$("#cargandoprograma").html();
    $("#cargandoprograma").addClass("seesconde");
}


function abreprogamaSolarium(){
      $("#botones").addClass("seesconde"); 
         $("#programaabierto").addClass("seesconde");
 $("#cargandoprograma").removeClass("seesconde");
        $("#menuInicio").hide();
        //alert("abreprogama");
        ////$("#Botoninicio").hide();
    $("#DesktopContent").removeClass("seesconde");
    document.getElementById("DesktopProgramas").removeAttribute("class");
    document.getElementById("DesktopProgramas").removeAttribute("style");
        escondeMenuInicio();
$("#DesktopContent").show();

var title="Solarium";
var iconoPrograma="../Documents_and_settings/visible/Windows10/solarium.ico"
var program="../System/Solarium/Solarium.php";



$("[data-noMore='"+program+"'").remove();
//var CuantosProgramasAbiertosTextarea=document.getElementById("CuantosProgramasAbiertosTextarea");



/*if (CuantosProgramasAbiertosTextarea.value=="") {

   $("#CuantosProgramasAbiertosTextarea").html(title);}else{$("#CuantosProgramasAbiertosTextarea").html(CuantosProgramasAbiertosTextarea.value+", "+title);

}*/
var listaprogramas=document.getElementById("listaprogramas");
$("[data-program='"+program+"']").removeClass("seesconde");
$("[data-program='"+program+"']").show();
/*listaprogramas.innerHTML+='  <img height="250px" width="170px"  class="SeleccionaEstePrograma" ondblclick="cierraProgramaSeleccionado();"  src="'+iconoPrograma+'"  data-program="'+program+'"  />';*/




    $("#logo").html('<center><strong><h2><img  onclick="forzardetencionprogramas();" src="../Documents_and_settings/visible/Windows10/SeguridadDenegado.ico"  title="Forzar detención de todos los programas?" alt="X" ></h2></strong></center>');
    $(".programa").addClass("seesconde");
    $("#DesktopNoProgramas").addClass("seesconde");

    /*document.getElementById("DesktopProgramas").removeAttribute("class");
    document.getElementById("cargandoprograma").removeAttribute("class");
    document.getElementById("programaabierto").setAttribute("class","seesconde");*/

    $("#DesktopProgramas").removeClass("seesconde");
    $("#cargandoprograma").removeClass("seesconde");
    $("#programaabierto").addClass("seesconde");
//var src=$(this).attr("src");

$("#cargandoprograma").html('<br><br><br><br><center style="color:white !important;"><h1>Cargando...</h1><br><br><h2><img src="../Documents_and_settings/visible/Windows10/loading.gif" height="250px" width="250px" onload="imprimeprograma();"  title="cargando..." alt="Cargando.." ></h2><br><h3>Cargando...</h3></center>');
$("#cargandoprograma").removeClass("seesconde");
$("#queprograma").text(program);

    }
    





function imprimeprogramaSolarium(){
     $("#programaabierto").addClass("seesconde");
    $("#cargandoprograma").html("");
       $("#DesktopContent").removeClass("seesconde");
    var programaabierto=document.getElementById('programaabierto');
   /* var queprograma=document.getElementById('queprograma');*/
var srcTextarea=document.getElementById("srcTextarea");

   /* programaabierto.innerHTML+='<iframe id="SolariumIframe" class="programa" data-queiframeterminardraganddrop="../Documents_and_settings/visible/Windows10/solarium.ico" onload="terminaCargarProgramaSolarium();" height="100%" width="100%;" src="../System/Solarium/Solarium.php" data-noMore="../System/Solarium/Solarium.php"  frameborder="0" allowfullscreen></iframe>'*/

   $('#programaabierto').append('<iframe id="SolariumIframe" class="programa" data-queiframeterminardraganddrop="../Documents_and_settings/visible/Windows10/solarium.ico" onload="terminaCargarProgramaSolarium();" height="100%" width="100%;" src="../System/Solarium/Solarium.php" data-noMore="../System/Solarium/Solarium.php"  frameborder="0" allowfullscreen></iframe>');

}
function terminaCargarProgramaSolarium(){
     $("#programaabierto").addClass("seesconde");
    $("#DesktopContent").removeClass("seesconde");
    //var queprogramaNombre
    
    $("#programaabierto").removeClass("seesconde");
$("#cargandoprograma").html();
    $("#cargandoprograma").addClass("seesconde");
var SolariumIframe=document.getElementById("SolariumIframe"); SolariumIframe.setAttribute("data-queiframeterminardraganddrop","../Documents_and_settings/visible/Windows10/solarium.ico");    
}


function corrigeLogo(){

    $('#logo').html('<center ><img src="../Documents_and_settings/visible/logo.ico" /></center>');
}
function forzardetencionprogramas(){
        VerTareas();
          VerTareas();
 $("#programaabierto").addClass("seesconde");
//var CuantosProgramasAbiertosTextarea=document.getElementById("CuantosProgramasAbiertosTextarea");
    var txt;
    var r = confirm("En verdad desea terminar bruscamente la acción de todos los programas abiertos ?");
    if (r == true) {
  

    document.getElementById("cargandoprograma").innerHTML="";
   // document.getElementById("listaprogramas").innerHTML="";
    document.getElementById("programaabierto").innerHTML="";
    $("#cargandoprograma").html();
    $("#cargandoprograma").text();
   /* $("#listaprogramas").html();
    $("#listaprogramas").text();*/
   $("#listaprogramas>img").addClass("seesconde");
    $("#arrastrable").removeClass("seesconde");
    $("#programaabierto").html();
    $("#programaabierto").text();

    $("#cargandoprograma").addClass("seesconde");
  //  $("#listaprogramas").addClass("seesconde");
    $("#programaabierto").addClass("seesconde");
    $("#logo").html('<center ><img src="../Documents_and_settings/visible/logo.ico" /></center>');
    $(".SeleccionaEstePrograma").addClass("seesconde");
//$("#arrastrable").removeClass("seesconde");
OcultarTareas();
     gotoMenuInicio();
    } 
  //$("#Botoninicio").show();
   
}
function gotoDesktop(){

    $("#DesktopProgramas").show();
    $("#programaabierto").show();
 $("#listaprogramas").addClass("seesconde");
     $("#programaabierto").removeClass("seesconde");
    $("#DesktopNoProgramas").hide();
    $("#DesktopNoProgramas").addClass("seesconde");
 $("#DesktopProgramas").removeClass("seesconde");
    $("#menuInicio").hide();
    $("#DesktopContent").removeClass("seesconde");
    $("#Botoninicio").attr("data-action","open");
}
function gotoTotalDesktop(){
//$("#Botoninicio").addClass("siStart");
$("#DesktopProgramas").hide();
    $("#DesktopNoProgramas").show();
    $("#DesktopNoProgramas").addClass("seesconde");

    $("#menuInicio").show();
    $("#DesktopContent").addClass("seesconde");
    $("#Botoninicio").attr("data-action","open");
}
function escondeMenuInicio(){
//$("#Botoninicio").addClass("siStart");
    $("#DesktopContent").addClass("seesconde");
    $("#Botoninicio").attr("data-action","open");
}
function gotoMenuInicio(){
     $("#programaabierto").addClass("seesconde");
//$("#Botoninicio").addClass("siStart");
    $("#DesktopProgramas").hide();
    $("#DesktopNoProgramas").show();
    $("#DesktopNoProgramas").removeClass("seesconde");
    $("#DesktopContent").removeClass("seesconde");
    $("#menuInicio").show();
    $("#Botoninicio").attr("data-action","close");


}
function escondeMenuInicio(){

    $("#DesktopProgramas").show();
    $("#DesktopNoProgramas").hide();
    $("#DesktopNoProgramas").addClass("seesconde");
    $("#DesktopContent").addClass("seesconde");
    $("#menuInicio").hide();
    $("#Botoninicio").attr("data-action","open");
}



   function apagar(){
        $("textarea").hide();
setTimeout(function(){
$("#BarraCentral").hide();
},500);
setTimeout(function(){
$("#Barra").hide();
},700);
setTimeout(function(){
$(".roundabout-moveable-item roundabout-in-focus").hide();
},1000);
setTimeout(function(){
$("img").hide();
},1500);
setTimeout(function(){
$(".nav_menu").hide();
},1700);
setTimeout(function(){
$("header").hide();
},2000);
setTimeout(function(){
$("#BarraIzqImg").hide();
},2500);
setTimeout(function(){
$("html").addClass("seesconde");
 $("body").addClass("seesconde");
},3100);
   
    $("#ddosconsola").hide();
        document.getElementById("audioEnd").play();
       setTimeout(function(){
        location.href="../apagado/apagando.php";


    },3200);
    }

    
    function reiniciar(){
         $("textarea").hide();
setTimeout(function(){
$("#BarraCentral").hide();
},500);
setTimeout(function(){
$("#Barra").hide();
},700);
setTimeout(function(){
$(".roundabout-moveable-item roundabout-in-focus").hide();
},1000);
setTimeout(function(){
$("img").hide();
},1500);
setTimeout(function(){
$(".nav_menu").hide();
},1700);
setTimeout(function(){
$("header").hide();
},2000);
setTimeout(function(){
$("#BarraIzqImg").hide();
},2500);
setTimeout(function(){
$("html").addClass("seesconde");
 $("body").addClass("seesconde");
},3100);
    $("#ddosconsola").hide();
        document.getElementById("audioEnd").play();
     setTimeout(function(){
        location.href="../apagado/reiniciando.php";

    },3500);
    }
    
    function bloquear(){
        $("textareas").hide();
$("#ddosconsola").hide();
    $("#menuchico").hide();
    $("#menuiniciogrande").hide();
    $("#noinicio").hide();
    $("body").addClass("seesconde");
    $("#ddosconsola").hide();
        location.href="../apagado/bloqueo.php";
    }
    function suspender(){
        $("textareas").hide();
$("#ddosconsola").hide();
    $("#menuchico").hide();
    $("#menuiniciogrande").hide();
    $("#noinicio").hide();
    $("body").addClass("seesconde");
    $("#ddosconsola").hide();
        location.href="../apagado/suspenso.php";
    }


     function  imprimeBody(){
/*
setTimeout(function(){
$("#Botoninicio").removeClass("StartInicio");
$("#Botoninicio").addClass("siStart");
 $("img").removeClass("StartInicio");
    },4200);
   
    setTimeout(function(){
$("html").removeClass("CursorNone");
$("html").addClass("CursorWait");
    },1000);
    setTimeout(function(){
$("html").removeClass("CursorWait");
$("html").addClass("CursorProgress");
    },2000);
setTimeout(function(){
    $("html").removeClass("CursorProgress");
    $("html").addClass("CursorDefault");

$("#barra").hide();
$("#barra").show();

    $("img").addClass("StartInicio");

$("#Botoninicio").removeClass("StartInicio");
$("#Botoninicio").addClass("siStart");
var BarraCentral=document.getElementById("BarraCentral");
BarraCentral.innerHTML+="";

var Botoninicio=document.getElementById("Botoninicio");
Botoninicio.setAttribute("class","StartInicio");
$("#contenido").removeClass("seesconde");
$("#MientrasCargaBody").addClass("displaynone");
$("#MientrasCargaBody").html("");
document.getElementById("audioStart").play();

},3000);*/
$("html").removeClass("CursorNone");
    $("html").addClass("CursorDefault");
var Botoninicio=document.getElementById("Botoninicio");
Botoninicio.setAttribute("class","StartInicio");
$("#contenido").removeClass("seesconde");
$("#MientrasCargaBody").addClass("displaynone");
$("#MientrasCargaBody").html("");
document.getElementById("audioStart").play();
}
function versimuestraoescondemenuchicof(){
var atributo= $("#Botoninicio").attr("data-action");
//alert("atributo: "+atributo);

if(atributo=="open"){
    gotoMenuInicio();



//inicio.setAttribute("class","siStart");

}
else if(atributo=="close"){
    escondeMenuInicio();

 
  var Botoninicio=document.getElementById("Botoninicio");
  
//inicio.setAttribute("class","siStart");

}
else{alert("Error, el sistema no encuentra la accion en que correspone de este boton.");}

}




 

/*
function abrenotas(){
     var notasprogram=document.getElementById("notasprogram");
var notas =notasprogram.value;
    var tynotas = window.open("", "", "width=1200, height=500");
    tynotas.document.write(notas);
  }

   function abrecpanel(){
    
    var cpanelprogram=document.getElementById("cpanelprogram");
var cpanel =cpanelprogram.value;
    var tycpanel = window.open("", "", "width=1200, height=500");
    tycpanel.document.write(cpanel);
  }

 function abreavg(){
     var avgprogram=document.getElementById("avgprogram");
var avg =avgprogram.value;
    var tyavg = window.open("", "", "width=1200, height=500");
    tyavg.document.write(avg);
  }

*/


/**//**/





$(document).ready(function(e) {
    $("#datos .item").each(function(){
        $("#carrusel").append($(this).find(".foto").html());
    });
    $(".nav_menu > ul").dropmenu({
        effect: "slide",
        speed:250,
        timeout: 0,
        nbsp: false
    });
    crearCarrucel();
    despliegaTexto();
});
function crearCarrucel(){
    $('#carrusel').roundabout({
        startingChild: window.startingItem,
        childSelector: 'img',
        tilt: -5,
        minOpacity:.75,
        minScale: .75,
        duration: 1200,
        clickToFocus: true,
        clickToFocusCallback: despliegaTexto
    });
}
function despliegaTexto(){
    var childInFocus =  $('#carrusel').data('roundabout').childInFocus;
    var setCaption = $('#datos .item .texto:eq('+childInFocus+')').html();
    $('#descripcion').html(setCaption);

}







/*draggable(
    {cursor:"move",
    cursorAt:{top:100, left:100},
    containment:"#contenedor"});*/
$(function(){
 $(".SeleccionaSolarium").draggable({
    revert: "valid",   
cursor:"move",
    cursorAt:{top:50, left:40},
    containment:"#listaprogramas"});

    $(".SeleccionaEstePrograma").draggable({revert: "valid",   
cursor:"move",
    cursorAt:{top:50, left:40},
    containment:"#listaprogramas"    });
    /*revert tenemos los valores, valir e invalid*/
    $("#arrastrable").droppable({
        // accept: ".SeleccionaEstePrograma",

         drop: function( event, ui){

var Asrc=ui.draggable.attr("src");
var Aclass=ui.draggable.attr("class");
var Atitle=ui.draggable.attr("title");
var Aprogram=ui.draggable.attr("data-program");
var Astyle=ui.draggable.attr("style");
 $("[data-noMore='"+Aprogram+"']").remove();
/*alert("Asrc: "+Asrc+", "+"Aclass: "+Aclass+", "+"Atitle: "+Atitle+", "+"Aprogram: "+Aprogram+", "+"Astyle: "+Astyle+", ");*/
ui.draggable.hide();
/*var listaprogramasInside=document.getElementById("listaprogramasInside");
listaprogramasInside.innerHTML+=' <img class="'+Aclass+'" ondblclick="cierraProgramaSeleccionado();" src="'+Asrc+'" title="'+Atitle+'"  data-program="'+Aprogram+'" style="'+Astyle+'"  height="250px" width="170px">';*/

//ui.draggable.attr("class","SeleccionaEstePrograma seesconde");
//alert("Es: "+queEs);
 //$(".SeleccionaEstePrograma").draggable();
 $("#arrastrable").removeClass("BasuraVacia");
  $("#arrastrable").addClass("BasuraLlena");
$("#arrastrable").html("<center><br><br><h2>.</h2></center>");
setTimeout(function(){
$("#arrastrable").html("<center><br><br><h2>..</h2></center>");

},500);
setTimeout(function(){
$("#arrastrable").html("<center><br><br><h2>...</h2></center>");

},1000);
setTimeout(function(){
$("#arrastrable").html("");
$("#arrastrable").addClass("BasuraVacia");
  $("#arrastrable").removeClass("BasuraLlena");
},1200);
 var programaabierto=document.getElementById("programaabierto");
 var programaabiertocontent=programaabierto.innerHTML;
 //alert("Programas: "+programaabiertocontent);

var string = programaabiertocontent;
substring = "<iframe";
if (string.indexOf(substring) > -1) {
 //alert("Programas: "+programaabiertocontent);
}else{
   corrigeLogo();
   //alert("Tdodos los Programas se han cerrado");
   gotoMenuInicio();
}
         }
    });
    
  
});
function SueltaPrograma(){

}
/*function onSueltaDiosa(){
  var prueba=$(this).attr("src");
  var arrastrable=document.getElementById("arrastrable");
var dentro=arrastrable.innerHTML;
    $("[data-queiframeterminardraganddrop='"+prueba+"']").remove();
   alert("inside: "+dentro);
}*/
