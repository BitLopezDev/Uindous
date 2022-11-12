<?php
$retroceso="";

?>
<!DOCTYPE html>
<html class="fondoobscuro">
<head>
<meta charset="UTF-8"/>
<link href="../System32/css/personalizacion.css" rel="stylesheet"/>

<link href="../System32/css/imageres.css" rel="stylesheet"/><link rel="icon" type="image/ico" href="Documents_and_settings/visible/games.ico" />

<link href="../System/paginas/explorador/UI/style.css" rel="stylesheet"/>
<script src="../System/paginas/explorador/UI/javascript.js" type="text/javascript" language="javascript">
  
</script><script src="../System32/jquery/$definicion/js/jquery.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript">
 
  window.onload=function(){


    $(".noprotegido").click(function(){
var segurosi=confirm("En verdad desea proteger esta unidad?");
if (segurosi) {
  var claveDos=document.getElementById('claveDos');
var clave=document.getElementById('clave').value;

if (clave===claveDos.value &&clave!="") {
//alert($(this).attr("data-name"));
location.href="lockDisk.php?oa="+clave+"&disk="+$(this).attr("data-name");


 } else if (clave != claveDos.value && clave!="" ) {
  alert("Las claves son distintas.");
 }else if (clave=== claveDos.value && clave =="") {
    $("#clave").addClass("resaltar");
    $("#claveDos").addClass("resaltar");
  alert("Ha de introducir una clave y confirmarla!");

    setTimeout(function(){
        $("#clave").removeClass("resaltar");
    $("#claveDos").removeClass("resaltar");
    },15000);


 }
}




  });

  }
  
</script>
<title>BitLocker</title>
<?php

$head =fopen($retroceso."../System/paginas/explorador/UI/head.html","r");
while (!feof($head)){
   $headcontent=fgets($head);
  
    echo $headcontent;
   }
fclose($head);

?>

  <style type="text/css">
  .resaltar{
    color: red !important;
    background-color: black !important;
    border: 5px solid red !important;
    box-shadow:inset 2px 2px 1px red, 5px 5px 5px black !important;
  }
    hr{
      height: 5px;
    background-color: black;
    border: none;
    }
    .noprotegido{
      background-color: #FF0000;
    }
     .noprotegido:hover{
      background-color: #DF0101;
    }
     .protegido{
      background-color: #00FF00;
    }
     .protegido:hover{
      background-color: #088A08;
    }
    #infarchivo *{
      margin: 0;
      padding:0;
    }
  </style>
</head>
<body>
<header class="fondoclaro">

<div id="superior"><h3><img src="../Documents_and_settings/visible/Windows10/Equipo.ico"  height="30px" width="30px"></h3><div id="cierre"></div><div id="logo"><center><img src="../Documents_and_settings/visible/logo.ico" /></center></div></div>
</header>

<div id="audio" class="fondoclaro">


<div id="infarchivo"><p>Introduzca un password:</p>
  <input type="password" id="clave" autofocus requiered>
  <p>Confirme su password:</p>
  <input type="password" id="claveDos" autofocus requiered>


</div>
</div>
<?php

$body =fopen($retroceso."../System/paginas/explorador/UI/body.html","r");
while (!feof($body)){
   $bodycontent=fgets($body);
  
    echo $bodycontent;
   }
fclose($body);

?>



<center id="contenido" style="padding-top:50px;">
<h1>Particiones y unidades Protegidas</h1>
<?php

$directorio = opendir("../part");

echo "<ul>";
while($archivo = readdir($directorio) )
    {   
         if( $archivo!="." && $archivo !=".."  && file_exists("../part/".$archivo."/BitLocker/btlckr.js") && file_exists("../part/".$archivo."/index.php") )
        {
    echo "<li class='fondoobscuro protegido' onclick='location.href=\"../part/".$archivo."\";' ><div class='folder' data-type='folder' data-location='../part/".$archivo."' ><img width=40px' height=40px' src='../part/".$archivo."/index.ico'><br>".$archivo."<br></div></li>";


     }
}

echo "</ul>";

closedir($directorio); 

?><br><hr><h1>Particiones y unidades NO Protegidas</h1>
<?php

$directorio = opendir("../part");

echo "<ul>";
while($archivo =readdir($directorio) )
    {   

      /*&& $archivo !="index.php" && $archivo !="SYSREG_SystDir.true"*/
         if( $archivo!="." && $archivo !=".."  && (file_exists("../part/".$archivo."/BitLocker/btlckr.js")==false) && file_exists("../part/".$archivo."/index.php") )
        {

    echo "<li class='fondoobscuro noprotegido'  data-name='".$archivo."' ><div data-location='../part/".$archivo."' data-name='".$archivo."' ><img data-name='".$archivo."' width=40px' height=40px' src='../part/".$archivo."/index.ico'><br>".$archivo."<br></div></li>";

}
     }


echo "</ul>";

closedir($directorio); 

?>
</center>



 <?php

$footer =fopen($retroceso."../System/paginas/explorador/UI/footer.html","r");
while (!feof($footer)){
   $footercontent=fgets($footer);
  
    echo $footercontent;
   }
fclose($footer);
/*show_source($retroceso."System/paginas/explorador/UI/header.html");*/


//echo readlink -f "explorer.ico";

?>








</body>

</html>

