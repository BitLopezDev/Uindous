<!DOCTYPE html>
<html>
<head>
	<title>Iframe:BarraInf</title>
	<style type="text/css">
	.seesconde{
display:none;
    width:0;
    height:0;
    color:transparent;
    background-color:transparent;
    font-size:0;

    
    
    
}
	

		html{height:40px !important;
    overflow:hidden !important;}
		html img{
	
	overflow:hidden !important;
	display: inline !important;
	padding-right: 5px !important;
	padding-left: 5px !important;
padding-top: 0 !important;
	padding-bottom: 5px !important;
	
		margin-right: 5px !important;
	margin-left: 5px !important;
margin-top: 0 !important;
margin-bottom: 5px !important;
border-right:2px solid black;
border-left:2px solid black;
	
		}
    html img:hover{
overflow:hidden !important;
      display: inline !important;
  padding-right: 5px !important;
  padding-left: 5px !important;
padding-top: 0 !important;
  padding-bottom: 5px !important;
  
    margin-right: 5px !important;
  margin-left: 5px !important;
margin-top: 0 !important;
margin-bottom: 5px !important;
/*border-bottom:2px solid #F2F2F2;*/
border-right:2px solid #F2F2F2;
border-left:2px solid #F2F2F2;
box-shadow: inset 5px  5px 50px white;
    }
	body{
    overflow:hidden !important;
			padding-right: 5px !important;
	padding-left: 5px !important;
padding-top: 0 !important;
	padding-bottom:5px !important;

	margin-bottom:  5px !important;

		margin-right: 5px !important;
	margin-left: 5px !important;
margin-top: 0 !important;

	}
	</style>

<script src="https://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>
	<script type="text/javascript">
		  window.onload=function(){
         if (top != self){}else{$("body").html("");$("body").text("");location.href="../../System32/AccesoDenegado.php";}
      }
  function abrecpanel(){
    
    var cpanelprogram=document.getElementById("cpanelprogram");
var cpanel =cpanelprogram.value;
    var tycpanel = window.open("", "", "width=1200, height=500");
    tycpanel.document.write(cpanel);
  }
    


      function abregames(){
    
    var gamesprogram=document.getElementById("gamesprogram");
var games =gamesprogram.value;
    var tygames = window.open("", "", "width=1200, height=500");
    tygames.document.write(games);
  }
    
      function abremp(){
    
    var mpprogram=document.getElementById("mpprogram");
var mp =mpprogram.value;
    var tymp = window.open("", "", "width=1200, height=500");
    tymp.document.write(mp);
  }
	</script>
</head>
<body>

<img src="../../Documents_and_settings/visible/Windows10/PanelDeControl.ico" id="cpanel" onclick="abrecpanel();" title="Abre Panel de control" height="40px" width="40px">


<img src="../../Documents_and_settings/visible/Windows10/Musica.ico" title="Media Player" onclick="abremp();" height="40px" width="40px">


<img src="../../Documents_and_settings/visible/Windows10/juegos.ico" title="Juegos"  onclick="abregames();" height="40px" width="40px">
 <?php

$dir = opendir("../paginas/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($programaDos  = readdir($dir))){
    if($programaDos  != "." && $programaDos  != ".." && $programaDos  != "img" && $programaDos  != "inf" && $programaDos !="SYSREG_SystDir.true"){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
      $iconoDos = '<img src="../paginas/index/img/'.$programaDos.'.ico" title="'.$programaDos.'"  onclick="abre'.$programaDos.'()" height="40px" width="40px">';


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
location.href = "../paginas/'.$programaDos.'.php";
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

$dir = opendir("../../Programs/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($programa  = readdir($dir))){
    if($programa  != "." && $programa  != ".." && $programa  != "img" && $programa  != "inf" && $programa !="SYSREG_SystDir.true" ){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
      $icono = '<img src="../../Programs/index/img/'.$programa.'.ico" title="'.$programa.'"  onclick="abre'.$programa.'()" height="40px" width="40px">';


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
location.href = "../../Programs/'.$programa.'.php";
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

</body> 




<!---






-->
<div class="seesconde">
                             	 
<!---->
 <textarea id="cpanelprogram" class="seesconde">
    <html>
    <head>
      <title>Cargando Panel de control, por favor espere.</title>
      <script type="text/javascript">
location.href = "../ControlPanel/Inicio/ControlPanel.php";
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

location.href="../../System/paginas/mediaplayer/Mediaplay.php";


                </script>
                          
</html>
                    </textarea>
                    <textarea id="gamesprogram" class="displaynone">
                        <html >
                        <title>Cargando TY-Games, por favor espere.</title>
                <script type="text/javascript">

location.href="../../System/paginas/games/Juegos.php";


                </script>
                          
</html>
                    </textarea>
                <div id="escritorio" class="fondodefecto">

                    <div id="fijocomoconcreto">
                       

                       

                             </div>
</html>
</html>