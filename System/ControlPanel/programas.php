<?php
session_start();
if ($_SESSION['acceso']!="1")
{
  header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/ControlPanel/programas.php&hacia=Panel de control>Programas");
  exit;
}


?>
<!DOCTYPE html>
<html class="fondoobscuro">
<head>
<meta charset="UTF-8"/>
<link href="../../System32/css/personalizacion.css" rel="stylesheet"/>
<script src="../../System32/jquery/$definicion/js/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>

<link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/Windows10/programas.ico" />
    <title>Programas y características.</title>
      <style type="text/css">
  html{
    color:white;
  }
  html a {color:white;
    font-size:1.3em;}
 .displaynone{display:none;
  width:0;
  height:0;
  color:transparent;
  background-color:transparent;
  font-size:0;}
 .semuestra{display:inline;

 
} 



#audio{
  float: left;
  padding-top: 0px;
  padding-left: 0px;
 
  color: white;
  width: 300px;
  height: 100%;
  
  border: 5px solid black;
  
  position: absolute;
  top: 30px;
  bottom: 0;
  left: 0;
}

.seesconde{display:none;
  width:0;
  height:0;
  color:transparent;
  background-color:transparent;
  font-size:0;}


#colornegro{color: black;}
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
   
    border-bottom:1px solid black;
    
    color:white;
    padding:0;
    margin:0;
    border-bottom:5px solid black;

      
    }
header h1,h2,h3,h4,h5,h6{
        margin:0;
        padding:0;
        
      }
      #contenido{
        float: center;
        padding-top:50px;
        padding-right:50px;
        padding-left: 350px;
      }
.scroll{
  overflow:scroll !important;
        overflow-y:scroll !important;
            overflow-x:scroll !important;
}
  </style>
  <script type="text/javascript">
window.onload=function(){
  /*<img src="../../Programs/index/img/explorador.ico" width="180px" height="180px"><br>
  <iframe width="280" height="300" src="../../Programs/index/inf/explorador.html" frameborder="0" allowfullscreen></iframe>
*/
  $(".imagen").click(function(){
var identificador=$(this).attr("id");
$("#programInfo").html('<img src="../../Programs/index/img/'+identificador+'.ico" width="180px" height="180px"><br><iframe width="280" height="300" src="../../Programs/index/inf/'+identificador+'.html" frameborder="0" allowfullscreen></iframe><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>');
  });
    $(".imagenSistema").click(function(){
var identificador=$(this).attr("id");
$("#programInfo").html('<img src="../paginas/index/img/'+identificador+'.ico" width="180px" height="180px"><br><iframe width="280" height="300" src="../paginas/index/inf/'+identificador+'.html" frameborder="0" allowfullscreen></iframe><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>');
  });
}





  </script>
</head>

<body>
<header class="fondoclaro">

<div id="superior"><h3>Panel de control>Programas y características.>Lista de programas, apps y complementos.</h3><div id="cierre"></div><div id="logo"><center><img src="../../Documents_and_settings/visible/logo.ico" /></center></div></div>



</header>
<div id="contenido">
<hr><center><h2>Sistema</h2></center>
<div id="sistema">
<?php

$dir = opendir("../paginas/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($foto = readdir($dir))){
    if($foto != "." && $foto != ".." && $foto != "img" && $foto != "inf" && $foto != "SYSREG_SystDir.true" ){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
      $archivo = "<img src='../paginas/index/img/".$foto.".ico' class='imagenSistema' width='60px' height='60px' id='".$foto."'>";
     
      
      print $archivo;
     
    }
    
  }
  
} else {
  print "<h1>Error al listar los programas.</h1>";
}
?>
</div>
<br><br><hr><center><h2>Programas instalados</h2></center>
<div id="programas">
  <?php

$dir = opendir("../../Programs/index/");
$numRen = 1;
if($dir){

  $i = 0;
  while(false !=($foto = readdir($dir))){
    if($foto != "." && $foto != ".." && $foto != "img" && $foto != "inf" && $foto != "SYSREG_SystDir.true"){
      if($i==$numRen){
        $i=0;
       
      }
      $i++;
      $archivo = "<img src='../../Programs/index/img/".$foto.".ico' class='imagen' width='60px' height='60px' id='".$foto."'>";
     
      
      print $archivo;
     
    }
    
  }
  
} else {
  print "<h1>Error al listar los programas.</h1>";
}
?>
</div>


</div>
  <div id="audio" class="fondoclaro">
<img src="../../Documents_and_settings/visible/Windows10/Seguridad.ico" width="15px" height="15px">
<a  onclick="alert('Esta característica aún no está disponible.');">Remover programas forzosamente.</a>
<br><br><hr>
<div id="programInfo">
  
</div>

</div>











</div>

<center>

</center>
</body>

</html>

