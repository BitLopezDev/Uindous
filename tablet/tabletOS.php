

<?php

session_start();
if ($_SESSION['acceso']!="1")
{
    header("Location:../apagado/bloqueo.php");
    exit;
}
$archivoRestartCount =fopen("../apagado/BootCount/RestartCount.inf","w+");
   $lineaRestartCount=fgets($archivoRestartCount);
   
    fwrite($archivoRestartCount,"");
   
fclose($archivoRestartCount);

$archivollendoasesionCount =fopen("../apagado/BootCount/llendoasesionCount.inf","w+");
   $lineallendoasesionCount=fgets($archivollendoasesionCount);
   
    fwrite($archivollendoasesionCount,"");
   
fclose($archivollendoasesionCount);

$archivoSystemBootCount =fopen("../apagado/BootCount/SystemBootCount.inf","w+");
   $lineaSystemBootCount=fgets($archivoSystemBootCount);
   
    fwrite($archivoSystemBootCount,"");
   
fclose($archivoSystemBootCount);


$archivoBSCount =fopen("../apagado/BootCount/BSCount.inf","w+");
   $lineaBSCount=fgets($archivoBSCount);
   
    fwrite($archivoBSCount,"");
   
fclose($archivoBSCount);
?>
<!DOCTYPE html>
<html class="CursorNone fondoclaro fondodefecto">
<head>
<meta charset="UTF-8"/>
    <title>Uindous</title>
    
  
    <style type="text/css">
  

/**//**/
    </style>
    <style type="text/css">
    

    </style>
<script src="../System32/jquery/$definicion/js/jquery-1.9.1.min.js"></script>
<!--<script src="../System32/jquery/$definicion/js/jquery-1.6.min.js"></script>-->
<script src="https://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript" language="javascript"></script>



<script src="../System32/jquery/$definicion/js/jquery-ui-1.10.1.custom.min.js"></script>
<script src="../System32/jquery/$definicion/js/jquery.dropmenu-1.1.4.js" type="text/javascript" language="javascript"></script>
  <link href="../System32/css/personalizacion.css" rel="stylesheet"/><link href="../System32/css/imageres.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../System32/jquery/$definicion/css/ui-lightness/jquery-ui-1.10.1.custom.min.css" />


<script src="../System32/jquery/tablet.js"></script>
<script src="../System32/js/programas.js"></script>
 <link href="../System32/css/tablet.css" rel="stylesheet"/>

<script type="text/javascript"></script>

<style>
#arrastrable{
    width:125px;
    height:125px;
    margin:10px;
   position: absolute;
   bottom:20px;
   right:20px;
   /*background-color:red;*/
  
}
.BasuraVacia{
     background-image: url(../Documents_and_settings/visible/Windows10/BasuraVacia.ico);
            background-repeat: no-repeat;
       
            background-position: center;
            background-size:100% 100% !important;
}
.BasuraLlena{
     background-image: url(../Documents_and_settings/visible/Windows10/BasuraLlena.ico);
            background-repeat: no-repeat;
       
            background-position: center;
            background-size:100% 100% !important;
}
#zona{

width:100px;
    height:100px;
    padding:5px;

    background-color:green;
       position: absolute;

    /**/
   
 /**/
.Selecciona{}

</style>
<script>

</script>

<script type="text/javascript">

</script>
<style type="text/css">

</style>

<script type="text/javascript">
window.onerror = function (msg, url, lineNo, columnNo, error) {
     var message = [
            'Message: ' + msg,
            'URL: ' + url,
            'Line: ' + lineNo,
            'Column: ' + columnNo,
            'Error object: ' + JSON.stringify(error)
        ].join(' - ');

       
   alert("Error"+message);
   

    return false;
};

    </script>


<script>

</script>
<script type="text/javascript">
       
</script>
<script type="text/javascript">
    
  
</script>
<style type="text/css">
  
</style>
</head>
<body onresize="pruebaFunctionf()">
<script type="text/javascript">
 function pruebaFunctionf(){
    
    //alert("Llamada la funcion");
  var wWindowSize = window.outerWidth;
    var hWindowSize = window.outerHeight;
    var txtWindowSize = "Window size: width=" + wWindowSize + ", height=" + hWindowSize;
if (hWindowSize<420|| wWindowSize<330) {
$("#contenido").addClass("displaynone");

alert("Su pantalla es demasiado pequeña. Su pantalla tiene que ser de por lo menos 420px de alto, y 330px de ancho. Actualmente, su pantalla es de: "+wWindowSize+"px de alto y "+hWindowSize+"px de alto.");
/*$("#MientrasCargaBody").html("<center><br><br><h1 style='color:white !important;'>Su pantalla es demasiado pequeña. Su pantalla tiene que ser de por lo menos 420px de alto, y 330px de ancho. Actualmente, su pantalla es de: "+wWindowSize+"px de alto y "+hWindowSize+"px de alto.</h1></center><");*/

 }else if (hWindowSize<585 || wWindowSize<790) {
    $("#contenido").removeClass("displaynone");
$("#IraComputadora").addClass("seesconde");
$("#contenedor").addClass("seesconde");
//alert(txtWindowSize+"Muy chico");
 }else if (wWindowSize>1066 || hWindowSize>585) {
    $("#contenido").removeClass("displaynone");
 // alert(txtWindowSize+"Esta bien");
$("#contenedor").removeClass("seesconde");
$("#IraComputadora").removeClass("seesconde");

} else if (hWindowSize>585 || wWindowSize>730) {
$("#contenido").removeClass("displaynone");
$("#IraComputadora").removeClass("seesconde");
//alert(txtWindowSize+"Muy chico");
 }
   //alert(txtWindowSize);
 
  }
  
</script>
<script type="text/javascript">
 
</script>
<div id="MientrasCargaBody" class="MientrasCargaBody">
    <br><br><center style=" color:white !important;"><h1></h1><br><br><h2><img src="../Documents_and_settings/visible/Windows10/loading.gif" height="250px" width="250px"  title="cargando..." alt="Cargando.." ></h2><br><h3></h3></center>


</div>
<div id="contenido" class="seesconde" >
<header>

<div id="superior"><div id="cierre"><center>
<nav class="nav_menu"><ul class="dropmenu">

       
        <li class="menusup"><a href="#">Opciones de apagado</a>
            <ul class="menusup">
                <li class="menusup"><a onclick="apagar()">Apagar</a></li>
                <li class="menusup"><a onclick="reiniciar()">Reiniciar</a></li>
                <li class="menusup"><a onclick="suspender()">Suspender</a></li>
                <li class="menusup"><a onclick="bloquear()">Bloquear</a></li>
                
            </ul>
        </li>  



        <li id="IraComputadora" class="menusup seesconde"><a href="../uindous.php">Modo ordenador.</a>
            <ul class="menusup">
               
        </li> 
       
    </ul>
   
</nav></center></div><div id="logo"><center ><img src="../Documents_and_settings/visible/logo.ico" /></center></div></div>



</header>
<div id="desktop" class=" ">
<div id="DesktopContent">
<div id="DesktopProgramas" class="seesconde">
    <div id="cargandoprograma" class="completeDesktop seesconde" style="background-color:
    #222222 !important;   ">
        

    </div>
    <div id="listaprogramas" class="completeDesktop seesconde fondodefecto" >
          <div id="arrastrable" class="arrastrable BasuraVacia" ></div>
 <div id="botones" class=" fondoclaro seesconde">
     <button id="CerrarProgramaButton">Cerrar este programa.</button><br>
     <button id="VerProgramaButton">Ver este programa.</button><br>
     <button onclick='$("#botones").addClass("seesconde");
'>Cancelar</button>
 </div>
<div id="listaprogramasInside">
  
      <?php

$dir = opendir("../System/paginas/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($programaDos  = readdir($dir))){
    if($programaDos  != "." && $programaDos  != ".." && $programaDos  != "img" && $programaDos  != "inf" && $programaDos  != "Notepad" && $programaDos !="SYSREG_SystDir.true" ){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
      //../System/paginas/index/
          $programaDos = $programaDos.str_replace('', '.php', '');
         $iconoDos = '
                <img class="SeleccionaEstePrograma seesconde" ondblclick="cierraProgramaSeleccionado();"   src="../System/paginas/index/img/'.$programaDos.'.ico" title="'.$programaDos.'"   data-program="../System/paginas/'.$programaDos.'.php" height="125px" width="85px"  >
           ';


     
      print $iconoDos;
     
    }
    
  }
  print '<script src="../System32/jquery/$definicion/js/jquery.roundabout.js" type="text/javascript" ></script>
';
} else {
  print "<h1>Error al listar los programas.</h1>";
}
?>

 <?php

$dir = opendir("../Programs/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($programa  = readdir($dir))){
    if($programa  != "." && $programa  != ".." && $programa !="SYSREG_SystDir.true" && $programa  != "img" && $programa  != "inf" ){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
          $programa = $programa.str_replace('', '.php', '');
     $icono = '
                <img class="SeleccionaEstePrograma seesconde" ondblclick="cierraProgramaSeleccionado();"   src="../Programs/index/img/'.$programa.'.ico" title="'.$programa.'"   data-program="../Programs/'.$programa.'.php" height="125px" width="85px"  >
           ';


     
      print $icono;
     
    }
    
  }
  
} else {
  print "<h1>Error al listar los programas.</h1>";
}
?>
   <img class="SeleccionaEstePrograma seesconde " ondblclick="cierraProgramaSeleccionado();" src="../Documents_and_settings/visible/Windows10/Musica.ico" title="MediaPlayer"  data-program="../System/Paginas/mediaplayer/Mediaplay.php"  height="125px" width="85px">

<img class="SeleccionaEstePrograma seesconde " ondblclick="cierraProgramaSeleccionado();" src="../Documents_and_settings/visible/Windows10/solarium.ico" title="Solarium"  data-program="../System/Solarium/Solarium.php"  height="125px" width="85px">
<img class="SeleccionaEstePrograma seesconde " ondblclick="cierraProgramaSeleccionado();" src="../Documents_and_settings/visible/Windows10/juegos.ico" title="Games"   data-program="../System/Paginas/games/Juegos.php"  height="125px" width="85px">
    </div></div>
    <div id="programaabierto" class=" completeDesktop seesconde" style="display:inline-block;">
        

    </div>
    </div>
    <div id="DesktopNoProgramas" class="completeDesktop">
    <!--<iframe id="menuInicio" src="menuinicio.php" width="100%;" frameborder="0" allowfullscreen class=""></iframe>
-->

<div  id="menuInicio" width="100%" class="">
<center>
<div id="contenedor"> 
    <div id="contenedorCarrusel" class="">
        <div id="carrusel"></div>
    </div>
    <div id="contenedorTexto">
        <div id="descripcion" ></div>
    </div>
    <!-- datos -->
    <div id="datos">
   
        <!--<div class="item">
            <div class="foto">
                <img src="../Documents_and_settings/visible/Windows10/Escritorio.ico" alt="Escritorios"  width="100px" height="66px"/>
            </div>
            <div class="texto">
                <h2>Escritorio</h2>
                <p>Regrese al escritorio ocultando el menu de inicio.</p><button onclick="escondeMenuInicio();">Volver al escritorio</button>
            </div>
        </div>-->
        
        <div class="item">
            <div class="foto">
               <img  class="" data-program="../System/Paginas/Notepad.php" title="Notepad"  src="../Documents_and_settings/visible/Windows10/BlockNotas.ico" alt="Block de notas" ondblclick="abrenotas();" width="100px" height="66px" />
            </div>
            <div class="texto">
                
            </div>
        </div>
    
       <!-- <div class="item">
            <div class="foto">
                <img  class="BarraInfImgDos" src="../Documents_and_settings/visible/Windows10/DOS.ico" alt="TY-DOS" title="Consola de Mandos" width="100px" height="66px"/>
            </div>
            <div class="texto">
                
            </div>
        </div>
        -->
        <div class="item">
            <div class="foto">
                <img class="BarraInfImgTres"  src="../Documents_and_settings/visible/Windows10/Musica.ico" alt="MediaPlayer" title="MediaPlayer" width="100px" height="66px"/>
            </div>
            <div class="texto">
               
            </div>
        </div>
        
    
        <div class="item">
            <div class="foto">
                <img class="BarraInfImgCinco"  src="../Documents_and_settings/visible/Windows10/juegos.ico" alt="TY-Games" width="100px" height="66px"/>
            </div>
            <div class="texto">
                
                             
            </div>
        </div>
        <?php

$dir = opendir("../System/paginas/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($programaDos  = readdir($dir))){
    if($programaDos  != "." && $programaDos  != ".." && $programaDos  != "img" && $programaDos  != "inf" && $programaDos  != "Notepad" && $programaDos !="SYSREG_SystDir.true" ){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
          $programaDos = $programaDos.str_replace('', '.php', '');
      $iconoDos = '<div class="item">
            <div class="foto">
              <img class="MenuImg" id="'.$programaDos.'ListTigger" src="../System/paginas/index/img/'.$programaDos.'.ico" title="'.$programaDos.'"   data-program="../System/paginas/'.$programaDos.'.php" width="100px" height="66px" >
            </div>
            <div class="texto">
            
            </div>
        </div>';


     
      print $iconoDos;
     
    }
    
  }
  print '<script src="../System32/jquery/$definicion/js/jquery.roundabout.js" type="text/javascript" ></script>
';
} else {
  print "<h1>Error al listar los programas.</h1>";
}
?>

 <?php

$dir = opendir("../Programs/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($programa  = readdir($dir))){
    if($programa  != "." && $programa  != ".." && $programa !="SYSREG_SystDir.true" && $programa  != "img" && $programa  != "inf" ){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
          $programa = $programa.str_replace('', '.php', '');
     $icono = '<div class="item">
            <div class="foto">
                <img class="MenuImg" id="'.$programa.'ListTigger" src="../Programs/index/img/'.$programa.'.ico" title="'.$programa.'"   data-program="../Programs/'.$programa.'.php" width="100px" height="66px"  >
            </div>
            <div class="texto">
               
            </div>
        </div>';


     
      print $icono;
     
    }
    
  }
  
} else {
  print "<h1>Error al listar los programas.</h1>";
}
?>
      
       
            <!---->
        
        
    
    </div>
</div>
<!--Fin de carrusel-->
</center>
</div>


        </div>
    </div>
</div>

<div id="barraizq">







<img class="BarraIzqImg" id="MediaPlayerListTigger" src="../Documents_and_settings/visible/Windows10/Musica.ico" title="MediaPlayer"  data-program="../System/Paginas/mediaplayer/Mediaplay.php"  >


<img class="BarraIzqImg" id="GamesListTigger" src="../Documents_and_settings/visible/Windows10/juegos.ico" title="Games"   data-program="../System/Paginas/games/Juegos.php"  >
 


<?php

$dir = opendir("../System/paginas/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($programaDos  = readdir($dir))){
    if($programaDos  != "." && $programaDos  != ".." && $programaDos  != "img" && $programaDos  != "inf" && $programaDos  != "Notepad" && $programaDos !="SYSREG_SystDir.true" ){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
      $programaDos = $programaDos.str_replace('', '.php', '');
     
      $iconoDos = '<img class="BarraIzqImg" id="'.$programaDos.'ListTigger" src="../System/paginas/index/img/'.$programaDos.'.ico" title="'.$programaDos.'"   data-program="../System/paginas/'.$programaDos.'.php"  >';

      print $iconoDos;
     
    }
    
  }
  
} else {
  print "<h1>Error al listar los programaDoss.</h1>";
}
?>

 <?php

$dir = opendir("../Programs/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($programaDos  = readdir($dir))){
    if($programaDos  != "." && $programaDos  != ".." && $programaDos  != "img" && $programaDos  != "inf" && $programaDos  != "Notepad" && $programaDos !="SYSREG_SystDir.true" ){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
      $programaDos = $programaDos.str_replace('', '.php', '');
     
      $iconoDos = '<img class="BarraIzqImg" id="'.$programaDos.'ListTigger" src="../Programs/index/img/'.$programaDos.'.ico" title="'.$programaDos.'"   data-program="../Programs/'.$programaDos.'.php"  >';

      print $iconoDos;
     
    }
    
  }
  
} else {
  print "<h1>Error al listar los programaDoss.</h1>";
}
?>







<div style="position:absolute; bottom:0;"><img  onclick="apagar();" src="../Documents_and_settings/visible/Windows10/apagar.ico"></div>
</div>

<div id="menu" class="seesconde">

</div>
<div id="barra">


<center id="BarraCentral">

<img src="../Documents_and_settings/visible/Windows10/tareas.ico" height="30px" title="Mostrar tareas en ejecución." style="margin-top:5px  !important; margin-right:5px  !important; margin-left:5px  !important;" id="TareasCuadrado" width="30px">  <img class="siStart" id="Botoninicio" src="../Documents_and_settings/visible/Windows10/StartButton.ico"  title="Mostrar el Menú de Inicio." height="30px" style="margin-top:5px  !important; margin-right:5px  !important; " onclick="gotoMenuInicio();" data-action="close" width="30px"> <img onclick="abreprogamaSolarium();" src="../Documents_and_settings/visible/Windows10/solarium.ico"  data-program="../System/Solarium/Solarium.php"  height="30px"  title="Solarium" width="30px">

  
  </center>
 <!--<div id="volveraescritorio" onclick="gotoDesktop(); " title="Mostrar el escritorio"></div>-->
  </div>

<div id="sistema" class="displaynone">
    <audio id="audioStart">
        <source src="../Documents_and_settings/sounds/Startup/TabletStartup.mp3" >
    </audio>
 <audio id="audioEnd">
        <source src="../Documents_and_settings/sounds/Shutdown/TabletShutdown.mp3" >
    </audio>

</div>

  <div class="displaynone" style="display: none !important">
    <textarea id="queprograma"></textarea>

<textarea id="srcTextarea"></textarea>
<textarea id="PensandoEnCerrarTextarea"></textarea>

<!--
<textarea id="notasprogram" class="seesconde">
    </textarea>-->
 <textarea id="avgprogram" class="displaynone">
                        <html >
                        <title>Cargando TY-Web Browser, por favor espere.</title>
                <script type="text/javascript">

location.href="../System/paginas/browser.php";


                </script>
                          
</html>
                    </textarea>
 <textarea id="cpanelprogram" class="seesconde">
    <html>
    <head>
      <title>Cargando Panel de control, por favor espere.</title>
      <script type="text/javascript">
location.href = "../System/ControlPanel/Inicio/ControlPanel.php";
      </script>
    </head>
    <body>
    
    </body>
    </html>
  </textarea>

<textarea id="notasprogram" class="seesconde">
    <!DOCTYPE html>
    <html>
    <head>
      <title>Cargando TY-Notepad, por favor espere.</title>
      <script type="text/javascript">
location.href = "../System/paginas/Notepad.php";
      </script>
    </head>
    <body>
    
    </body>
    </html>
  </textarea>

  </div>
  </div>
</body>

</html>