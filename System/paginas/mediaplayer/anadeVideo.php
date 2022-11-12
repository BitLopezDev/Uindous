<?php 
session_start();
if ($_SESSION['acceso']!="1")
{
    header("Location:../../../apagado/bloqueo.php");
    exit;
}else{
    session_destroy();
    session_start();
$_SESSION['acceso']="1";
}
?>
<?php
$ruta=$_POST["ruta"];
$codigo=$_POST["codigo"];
//../../../Documents_and_settings/MadiaPlayer/jsvalue.js
/*$nombre_archivo = $ruta; 
 
    if(file_exists($nombre_archivo))
    {
        $mensaje = "El Archivo $nombre_archivo se ha modificado";
    }
 
    else
    {
        $mensaje = "El Archivo $nombre_archivo se ha creado";
    }
 */
   $archivo =fopen("anadeVideoinf.inf","a+");
   $linea=fgets($archivo);
     echo($linea.'
  
  $("#loquehay").html("'.$codigo.'");

        ');
    fwrite($archivo,$linea.'
  
  $("#loquehay").html("'.$codigo.'");

        ');


   $archivoDos =fopen("anadeVideoJS.js","w+");
  
     
    fwrite($archivoDos,$linea.'
  function videoprint(){
  $("#loquehay").html("'.$codigo.'");
}
        ');

$archivoTres =fopen("Mediaplay.php","w+");
  
     $lineaDos=fgets($archivo); 
    fwrite($archivoTres,'
  <?php
session_start();
if ($_SESSION["acceso"]!="1")
{
    header("Location:../../../System32/Nosesion.php");
    exit;
}


?>
<!DOCTYPE html>
<html class="fondoobscuro">
<head>
<meta charset="UTF-8"/>
<link href="../../../System32/css/personalizacion.css" rel="stylesheet"/><link href="../../../System32/css/imageres.css" rel="stylesheet"/>
 <link rel="icon" type="image/ico" href="../../../Documents_and_settings/visible/nota.ico" />
  <title>TY-Media Player.</title>
<script src="../../../System32/jquery/$definicion/js/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>



<!--<script src="Js/anadeVideoJS.js" type="text/javascript" language="javascript"></script>-->
<script src="Js/script.js" type="text/javascript" language="javascript"></script>



  <style type="text/css">
 
  html a {color:white;
    font-size:1.3em;}
 .displaynone{display: none;}
 .semuestra{display:inline;}





    #audio{
    float: left;
    padding-top: 0px;
    padding-left: 0px;

    color: white;
    width: 15%;
    height: 100%;
    
    border-top: 5px solid black;
    border-right: 5px solid black;
    border-bottom: 5px solid black;

    position: absolute;
    top: 30px;
    bottom: 0;
    left: 0;
}
#video{
    
    float: right;
    padding-top: 0px;
    padding-right: 0px;

    color: white;
    width: 15%;
    height: 100%;
    border-top: 5px solid black;
    border-left: 5px solid black;
    border-bottom: 5px solid black;
    position: absolute;
    top: 30px;
    bottom: 0;
    right: 0;
}
.seesconde{display: none;}



iframe{

        background-image: url(../../../Documents_and_settings/visible/Pentagrama.jpg);
            background-repeat: no-repeat;
         
            background-position: left;
            background-size:100% 480px !important;
            height:480px;
    
            border:5px solid white;
        margin-top: 50px;
            
        border:5px solid !important;
        

 
    
}
#VandAdisplay{

}
  </style>
  <style>
  #logo{
    position: absolute;
    top:0;
    right: 0;
    height: 30px;
    width: 100px;
    background-color: black;        
    
        
       }
       #logo img{
        height:28;
        width:20px; 
        float:center;  
        margin-top:1px;
        padding-top:1px;
       }
       header{
        position:absolute;
        height:30px;
        width:100%;
        top:0;
        left:0;
        right:0;
    
         
    border-bottom: 1px solid black;
        font-family:Vivaldi;
        color:white;
        padding:0;
        margin:0;
        border-bottom:5px solid black;
          
      }

  </style>

  <script type="text/javascript">

 
  </script>
  <script type="text/javascript">

    </script>
</head>
<body>
<header class="fondoclaro">

<div id="superior">Ty-Media player<div id="cierre"></div><div id="logo"><center><img src="../../../Documents_and_settings/visible/logo.ico" /></center></div></div>



</header>

<div id="audio" class="fondoclaro">
<center><p><strong>Audios.</strong></p></center>



<div id="paescuchar" class="">
<?php
function validaaudio($audio){
    $bandera = false;
    if(preg_match("/[Mm][Pp][33]$/",$audio)) $bandera = true;   
    if(preg_match("/[Ww][Aa][Vv]$/",$audio)) $bandera = true;   
    if(preg_match("/[Oo][Gg][Gg]$/",$audio)) $bandera = true;   
    return $bandera;
}
$dir = opendir("../../../Documents_and_settings/MediaPlayer/Audio");
$numRen = 1;
if($dir){

    $i = 0;
    while(false !=($audio = readdir($dir))){
        if($audio != "." && $audio != ".." && validaaudio($audio)){
            if($i==$numRen){
                $i=0;
                print "<br>";
                
            }
            $i++;
            $archivo = "../../../Documents_and_settings/MediaPlayer/Audio/".$audio;
            $info = getimagesize($archivo);
        
            print "<button class=\'paraAudio\' data-file=\'".$audio."\'>".$audio."</button>";
    
            
            
        }
        
    }

    
    
} else {
    print "Error al abrir el directorio.";
}

?>

</div>







</div>
<div id="video" class="fondoclaro">
<center><p><strong>Videos.</strong></p></center>








<input id="verificanombre" class="seesconde" />
    


<div id="loquehay" class="">
'.$lineaDos.''.$codigo.'
</div>
<br><hr><h4>Videos temporales de YouTube:</h4><br>
<div id="listatemporal"></div>
<hr>
<button onclick="agregaVideosPanelMuestra();">+Videos de YouTube</button>
<div id="agregaVideosPanel" class="">
    <div id="caja" class="">
<br><br><input type="text" id="quequiere" autofocus placeholder="Pídeme lo que quieras que haga" autocomplete="off"/><button  id="ok">OK</button>
</div>
</header>
<div id="systema"  class=" ">
<form method="post" action="anadeVideo.php">
<input type="text" id="txtSyst" class="" name="ruta"/>


<textarea id="campoRAM" class=" " name="codigo"></textarea>
<textarea>  </textarea>
<input type="submit" value="guardar">
</form>
</textarea><br>
<button onclick="agregaVideosPanelEsconde();">Ocultar</button>



<!--<textarea id="DelListNombre" class=" ">

</textarea>
<textarea id="DelListVideo" class=" ">

</textarea>
<textarea id="ejecutar" class=" ">

</textarea>-->

</div>


</div></div>
<center id="VandAdisplay" class="fondoobscuro">
<!--
<br><br><br><br><br><br><br><br><br><br><br>
<audio conrols="" autoplay="" width="100px" height="50px"> <source src="../../../Documents_and_settings/MediaPlayer/Audio/J.D - Annies Song.mp3.mp3">Tu navegador no soporta audio en HTML5, por favor actualizalo, o descarga uno de los principales, como Mozzilla Firefox 3.5 o superior.</audio><p>Hola</p>-->

</center>

</body>

</html>
        ');





fclose($archivo);
fclose($archivoDos);
//fclose($archivoTres);
?>