<?php
session_start();
if ($_SESSION['acceso']!="1")
{
    header("Location:apagado/bloqueo.php");
    exit;
}

?>

<!DOCTYPE html>
<html class="fondoclaro">

<head>
<link href="System32/css/personalizacion.css" rel="stylesheet"/><link href="System32/css/imageres.css" rel="stylesheet"/>
<link rel="prefetch" href="uindous.php">
<link rel="icon" type="image/ico" href="Documents_and_settings/visible/logo.ico" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
<meta charset="utf-8">
<title>Uindous</title>
<style>

@charset "utf-8";

@keyframes inicio {
      from { opacity:0; }
      to { opacity:1; }
}
@-webkit-keyframes inicio {
      from { opacity:0; }
      to { opacity:1; }
}
@-moz-keyframes inicio {
      from { opacity:0; }
      to { opacity:1; }
}
/*** ********
Transforms 3D
 ************/
@-webkit-keyframes rotando {
  from { -webkit-transform: rotateZ(0deg);    }
  to   { -webkit-transform: rotateZ(360deg); }
}
@-moz-keyframes rotando {
  from { -moz-transform: rotateZ(0deg);    }
  to   { -moz-transform: rotateZ(360deg); }
}

@-webkit-keyframes girando {
  from { -webkit-transform: rotateY(0deg);    }
  to   { -webkit-transform: rotateY(-360deg); }
}
@-moz-keyframes girando {
  from { -moz-transform: rotateY(0deg);    }
  to   { -moz-transform: rotateY(-360deg); }
}

@-webkit-keyframes girandoZ {
  from { -webkit-transform: rotateZ(0deg);    }
  to   { -webkit-transform: rotateZ(-360deg); }
}
@-moz-keyframes girandoZ {
  from { -moz-transform: rotateZ(0deg);    }
  to   { -moz-transform: rotateZ(-360deg); }
}


/*Manejo UI*/
.seesconde{
display:none;
    width:0;
    height:0;
    color:transparent;
    background-color:transparent;
    font-size:0;

    
    
    
}
.displaynone{
display:none;
    width:0;
    height:0;
    color:transparent;
    background-color:transparent;
    font-size:0;

    
    
    
}
/*Etiquetas estructurales */

html{
cursor:default; 
    
}
img{
     border-radius:10%;
    
}
#menuiniciogrande img{
    /*box-shadow:10px 10px 10px;*/
   
    -moz-transition:width 2s, height 2s, -moz-transform 2s !important;
    -webkit-transition:width 2s, height 2s, -webkit-transform 2s !important;
    -o-transition:width 2s, height 2s, -o-transform 2s !important;

}

#menuiniciogrande img:hover{
    border:2px solid black;
    box-shadow:6px 6px 15px black;
    transform:scale(1.1, 1.1) rotate(360deg);
    -moz-transform:scale(1.1, 1.1) rotate(360deg);
    -webkit-transform:scale(1.1, 1.1) rotate(360deg);
    -o-transform:scale(1.1, 1.1) rotate(360deg);
    -ms-transform:scale(1.1, 1.1) rotate(360deg);
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
    

/*Body*/



/*clases*/
.menusup{
    display:inline;
}





.menugrande{
    /*background-color:#09F !important;*/
    
}

.subrayado{
text-decoration:underline;  
    
    
}
.giraimg img{
    /*box-shadow:10px 10px 10px;*/
   
    -moz-transition:width 2s, height 2s, -moz-transform 2s !important;
    -webkit-transition:width 2s, height 2s, -webkit-transform 2s !important;
    -o-transition:width 2s, height 2s, -o-transform 2s !important;

}

.giraimg:hover{
    border:2px solid black;
    box-shadow:6px 6px 15px black;
    transform:scale(1.1, 1.1) rotate(360deg);
    -moz-transform:scale(1.1, 1.1) rotate(360deg);
    -webkit-transform:scale(1.1, 1.1) rotate(360deg);
    -o-transform:scale(1.1, 1.1) rotate(360deg);
    -ms-transform:scale(1.1, 1.1) rotate(360deg);}
/*Gatitos*/



    



#menuiniciogrande{
width:100%;
height:100%;
top:0;
bottom:0;
left:0;
right:0;
position:absolute;
    /*background-color:#09F;*/
    color:white;
    
    
}
/*Barra lateral*/

#barrader{
    /*width:250px;*/
    position:absolute;
height:100%;
right:0;
top:0;
bottom:0;
background-color:black;
color:white;

    border-radius:25% 0% 0 25%;

}
#barrader button{
/*right:0 !important;
float:right !important;*/
display:block !important;   
    
}

#barrader img{
right:0 !important;
float:right !important;
/*display:block !important;*/   
margin:50px;
    
}

#barraderactiva{
    
    position:absolute;
height:100%;
right:0;
top:0;
bottom:0;

/*background-color:green;*/
    
    
    
}

#barraizq{
   
    position:absolute;
height:100%;
left:0;
top:0;
bottom:0;
background-color:black;
color:white;

        border-radius: 0 25% 25% 0 ;
    
    
}

</style>

<!--jQuery
<link href="System32/jquery/$definicion/css/ui-lightness/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>-->
<script src="System32/jquery/$definicion/js/jquery.js" type="text/javascript" language="javascript"></script>
<!--<script src="System32/jquery/$definicion/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript" language="javascript"></script>-->

<!--Online
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"type="text/javascript" language="javascript"></script>-->
<!--<script src="https://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>-->



<!--Sistema-->
<script src="System32/jquery/$definicion/js/jquery-1.6.min.js"></script>
<script src="System32/jquery/$definicion/js/jquery.roundabout.min.js" type="text/javascript" ></script>
<!--JavaScript-->
 <script src="System32/js/programas.js" language="JavaScript" type="text/javascript"></script>

<!--Cascading StyleSheets (CSS)-->
<link href="System32/css/jQueryStyle.css" rel="stylesheet"/>
<link href="System32/css/style.css" rel="stylesheet"/>








    
    <script>
$(document).ready(function(e) {
      pruebaFunctionf();  
    $("#datos .item").each(function(){
        $("#carrusel").append($(this).find(".foto").html());
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
window.onload=function(){
    if (top != self) {$("body").html("");$("body").text("");location.href="System32/nomarco.php";}
  /*/  $("#barrader").hide();
var barraderactiva=document.getElementById("barraderactiva");
        var barrader=document.getElementById("barrader");
        barraderactiva.onmouseover=function(){
        $("#barrader").show();  
        $("#barraderactiva").css("background-color", "red");    
            
        }
        $
        barrader.onmouseout=function(){
        $("#barrader").hide();  
            $("#barraderactiva").css("background-color", "transparent");
        }*/



}
    function escondemenugrandef(){
        /*$("#barra").show();
        $("#barra").removeClass("seesconde");
    $("#barra").addClass("barra");
    $("header").show();
    $("#noinicio").hide();
    $("#inicio").show();
    $("#menuiniciogrande").hide();
    $("html").addClass("html");
    $("html").removeClass("menugrande");*/
    location.href="uindous.php";        
        }
    </script>
</head>


<body  onresize="pruebaFunctionf()">

<script type="text/javascript">

  function pruebaFunctionf(){
  var wWindowSize = window.outerWidth;
    var hWindowSize = window.outerHeight;
    var txtWindowSize = "Window size: width=" + wWindowSize + ", height=" + hWindowSize;
 if (wWindowSize<1066 || hWindowSize<585) {
    //alert(txtWindowSize+"Muy chico");

location.href="tablet/tabletOS.php";

}   else{}
 
  }
</script>
<div id="menuiniciogrande" class="fondoclaro">
<!--Barra izquierda-->
<div id="barraizq">

<span class="subrayado"><h2>    Sugerencias    </h2></span>
 <img src="Documents_and_settings/visible/Windows10/Escritorio.ico" alt="Escritorios" onclick="escondemenugrandef()" width="150px" height="100px"/>

 <img src="Documents_and_settings/visible/Windows10/Musica.ico" alt="TY-Media player" width="150px" height="100px" id="vermp" onclick="abremp();" title="Abre TY-Media Player"/>
<img src="Documents_and_settings/visible/Windows10/juegos.ico" alt="TY-Games" width="150px" height="100px" onclick="abregames();" title="Abre TY-games"/>



</div>
<!--Fin de la barra izquierda del menu de inicio grande-->
<!--Comienzo del contenedor, y pàr lo tanto del carrusel-->
<center>
<div id="contenedor" class="fondoclaro">
    <div id="contenedorCarrusel">
        <div id="carrusel"></div>
    </div>
    <div id="contenedorTexto">
        <div id="descripcion"></div>
    </div>
    <!-- datos -->
    <div id="datos">
       <center>
             <div class="item">
            <div class="foto">
                <img src="Documents_and_settings/visible/Windows10/Escritorio.ico" alt="Escritorios"  width="150px" height="100px"/>
            </div>
            <div class="texto">
                <h2>Escritorio</h2>
                <p>Regrese al escritorio ocultando el menu de inicio.</p><button onclick="escondemenugrandef();">Volver al escritorio</button>
            </div>
        </div>
        
        <div class="item">
            <div class="foto">
                <img src="Documents_and_settings/visible/Windows10/Musica.ico" alt="TY-Media player" width="150px" height="100px"/>
            </div>
            <div class="texto">
                <h2>Media Player</h2>
                <p>Abre Media Player.</p><button id="vermp" onclick="abremp();" title="Abre Media Player">TY-Media Player.</button><br>
            </div>
        </div>

<div class="item">
            <div class="foto">
                <img src="Documents_and_settings/visible/Windows10/PanelDeControl.ico" alt="Panel de control" width="150px" height="100px"/>
            </div>
            <div class="texto">
                <h2>Panel de control</h2>
                <p>El panel de control le permite gestionar el sistema by tener un facil acceso todas las herramientas del sistema &nbsp;.&nbsp;&nbsp; &nbsp;&nbsp;<center><button id="cpanel" onclick="abrecpanel();" title="Abre Panel de control"> <img src="Documents_and_settings/visible/Windows10/PanelDeControl.ico"  height="15px" width="15px"> &nbsp;Panel de control.</button></center></p>
            </div>
        </div>
        <div class="item">
            <div class="foto">
                <img src="Documents_and_settings/visible/Windows10/juegos.ico" alt="TY-Games" width="150px" height="100px"/>
            </div>
            <div class="texto">
                <h2>Juegos</h2>
                <p>Abre Juegos.</p><button id="vergames" onclick="abregames();" title="Abre Juegos">Juegos.</button>
                             
            </div>
        </div>



 <?php

$dir = opendir("System/paginas/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($programaDos  = readdir($dir))){
    if($programaDos  != "." && $programaDos  != ".." && $programaDos  != "img" && $programaDos  != "inf" && $programaDos !="SYSREG_SystDir.true" ){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
      $iconoDos = '<div class="item">
            <div class="foto">
                <img src="System/paginas/index/img/'.$programaDos.'.ico" alt="'.$programaDos.'" width="140px" height="100px"/>
            </div>
            <div class="texto">
                <h2>'.$programaDos.'</h2>
                <p><button id="" onclick="abre'.$programaDos.'();" title="Abre '.$programaDos.'"><img src="System/paginas/index/img/'.$programaDos.'.ico" width="15px" height="15px"/> &nbsp;Abre '.$programaDos.'.</button>
                           
            </div>
        </div>';


     $ProgramDosscript ='<script type="text/javascript">  
    function abre'.$programaDos.'(){
    
    var '.$programaDos.'program=document.getElementById("'.$programaDos.'program");
var '.$programaDos.' ='.$programaDos.'program.value;
    var ty'.$programaDos.' = window.open("", "", "width=1200, height=500");
    ty'.$programaDos.'.document.write('.$programaDos.');
  }</script> ';


      $ProgramDosTextarea=' <textarea id="'.$programaDos.'program" class="seesconde displaynone "style="display:none !important;">
    <html>
    <head>
      <title>Cargando Panel de control, por favor espere.</title>
      <script type="text/javascript">
location.href = "System/paginas/'.$programaDos.'.php";
      </script>
    </head>
    <body>
    
    </body>
    </html>
  </textarea>';

  print $ProgramDosTextarea;
  print $ProgramDosscript;
      print $iconoDos;
     
    }
    
  }
  
} else {
  print "<h1>Error al listar los programaDoss.</h1>";
}
?>

 <?php

$dir = opendir("Programs/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($programa  = readdir($dir))){
    if($programa  != "." && $programa  != ".." && $programa !="SYSREG_SystDir.true" && $programa  != "img" && $programa  != "inf" ){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
     $icono = '<div class="item">
            <div class="foto">
                <img src="Programs/index/img/'.$programa.'.ico" alt="'.$programa.'" width="140px" height="100px"/>
            </div>
            <div class="texto">
                <h2>'.$programa.'</h2>
                <p><button id="" onclick="abre'.$programa.'();" title="Abre '.$programa.'"><img src="Programs/index/img/'.$programa.'.ico" width="15px" height="15px"/> &nbsp;Abre '.$programa.'.</button>
                           
            </div>
        </div>';


     $Programscript ='<script type="text/javascript">  
    function abre'.$programa.'(){
    
    var '.$programa.'program=document.getElementById("'.$programa.'program");
var '.$programa.' ='.$programa.'program.value;
    var ty'.$programa.' = window.open("", "", "width=1200, height=500");
    ty'.$programa.'.document.write('.$programa.');
  }</script> ';


      $ProgramTextarea=' <textarea id="'.$programa.'program" class="seesconde displaynone "style="display:none !important;">
    <html>
    <head>
      <title>Cargando Panel de control, por favor espere.</title>
      <script type="text/javascript">
location.href = "Programs/'.$programa.'.php";
      </script>
    </head>
    <body>
    
    </body>
    </html>
  </textarea>';

  print $ProgramTextarea;
  print $Programscript;
      print $icono;
     
    }
    
  }
  
} else {
  print "<h1>Error al listar los programas.</h1>";
}
?>






       </center>
            <!---->
        
        
    
    </div>
</div>

</div>
<!--Fin del carrusel-->
<!--Bara derecha y sus complementos-->
<!--<div id="barraderactiva" width="150px">

<div id="barrader" style="display: none;" width="125px">
<img src="Documents_and_settings/visible/Lupa.png" id="Busquedainteligente" width="150px" height="100px"/><br>
<center>
<br>

        
        </center>               
</div>
-->

</div>
</body>
<div id="textareas" class="seesconde">
<textarea id="cpanelprogram" class="seesconde">
    <html>
    <head>
      <title>Cargando Panel de control, por favor espere.</title>
      <script type="text/javascript">
location.href = "System/ControlPanel/Inicio/ControlPanel.php";
      </script>
    </head>
    <body>
    
    </body>
    </html>
  </textarea>

<textarea id="mpprogram" class="displaynone">
                        <html >
                        <title>Cargando TY-Media Player, por favor espere.</title>
                <script type="text/javascript">

location.href="System/paginas/mediaplayer/Mediaplay.php";


                </script>
                          
</html>
                    </textarea>
                    <textarea id="gamesprogram" class="displaynone">
                        <html >
                        <title>Cargando TY-Games, por favor espere.</title>
                <script type="text/javascript">

location.href="System/paginas/games/Juegos.php";


                </script>
                          
</html>
                    </textarea>
                <div id="escritorio" class="fondodefecto">

                    <div id="fijocomoconcreto">
                       

                       
</div>
</html>