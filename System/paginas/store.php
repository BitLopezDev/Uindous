<?php
session_start();
if ($_SESSION['acceso']!="1")
{
  header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/paginas/modernizacion.php&hacia=Software Update");
  exit;
}


?>
<!DOCTYPE html>
<html class="fondoobscuro fondologin">
<head>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<meta charset="UTF-8"/>
 <link rel="icon" type="image/PNG" href="../../Documents_and_settings/visible/Windows10/descargaverde.ico" />
    <link href="../../System32/css/personalizacion.css" rel="stylesheet"/><link href="../../System32/css/imageres.css" rel="stylesheet"/>

    <title>TY-Store</title>
    <style type="text/css">
html{
  
            overflow-x:hidden !important;
   
            width: 100%;
            /*Width=1323px;*/
            height: 720px;
color:white;}
    .semuestra{display:block;}
    .seesconde{display:none;}

      
     
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

alert(message);
           




   

};

window.onload=function(){
  $(".Actualizar").click(function(){
var file=$(this).attr("data-actu");
location.href=file;
  });
/*  var centro=document.getElementById('centro');
  var centroInside=centro.innerHTML;
if (centroInside!='<table class="fondoclaro" border="5px solid white"><tbody><tr><th>Imagen</th><th>Actualización</th><th>Tamaño (bytes)</th></tr><tr></tr><tr><th>Imagen</th><th>Actualización</th><th>Tamaño (bytes)</th></tr><tr></tr></tbody></table>') {

  centro.innerHTML="<div class='fondoclaro'><p>No hay actualizaciones pendientes</p></div>";
}else{
  alert(centroInside+" Prueba");
}*/
}


</script>
</head>
<body>
<br><br>
<center id="centro">
  <?php
function validaProductos($producto){
  $bandera = false;
  if(preg_match("/[Pp][Hh][Pp]$/",$producto)) $bandera = true;  

  return $bandera;
}
$dir = opendir("productos");
$numRen = 1;
if($dir){
  print '<table class="fondoclaro" border="5px solid white">';
  print "<tr>";
  print "<th>Imagen</th>";
  print "<th>Instalador</th>";

  print "<th>Tamaño (bytes)</th>";
 
  print "</tr>";
  print '<tr>';
  $i = 0;
  while(false !=($producto = readdir($dir))){
    if($producto != "." && $producto != ".." && validaProductos($producto)){
      if($i==$numRen){
        $i=0;
        print "</tr>";
        print "<tr>";
      }
      $i++;
      $archivo = 'productos/'.$producto;
      print "<td>";
      print '<img src="../../Documents_and_settings/visible/Windows10/descargaverde.ico" class="Actualizar" data-actu="'.$archivo.'" width="60px" height="60px">';
      print "</td>";
      print "<td>";
      print "<a href='productos/".$producto."'>".$producto."</a>";
      print "</td>";
     
      print "<td>";
      print filesize($archivo);
      print "</td>";
    
    }
    
  }
  print '</tr>';

  print "<tr>";
  print "<th>Imagen</th>";
  print "<th>Instalador</th>";

  print "<th>Tamaño (bytes)</th>";
  
  print "</tr>";
  print '<tr>';
  print '</table>';
  
  
} else {
  print "Error 0x90070053900. No hemos podido acceder a la lista de productos.";
}

?></center>
</body>





</html>