 <?php

 global $retroceso;
/*session_start();
if ($_SESSION['acceso']!="1")
{
  $host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$total= "http://" . $host . $url;

  header("Location:http://localhost/SublimeText/C/OperatingSystem/1026/Nosesion.php?next=$total&hacia=Explorador de archivos");
  exit;
}*/





if (isset($_GET['abrir'])) {

if(file_exists($_GET['abrir'])){	
$abrir=$_GET['abrir'];

}else{}
       

       }


  if (file_exists("BitLocker/btlckr.php")) {


require_once("BitLocker/btlckr.php");


global $Clave_btlckr_Local;


echo("<script>

  do{
var contrasena=$Clave_btlckr_Local;
    var Clave=prompt('Intruduzca la contraseña de BitLocker');
  }while(Clave!=contrasena);
</script> <h1>Hola</h1>");
  }else{
   // echo("<h1>No hay</h1>");




  

  }


$URI = $_SERVER["REQUEST_URI"];
$Partes = Explode('/', $URI);
$Script_PHP = $Partes[count($Partes) - 1];
$carpeta = str_replace($Script_PHP, '', $URI);
$carpeta = str_replace($Script_PHP, '', $URI);
$carpeta = str_replace('SublimeText/C/OperatingSystem/', '', $URI);

echo ' <script>var laurl="..'.$carpeta.'"; var retroceso="'.$retroceso.'";</script>'; 

$nuevoretroceso="../".$retroceso;
$directorio = opendir(".");

echo "<ul>";
while($archivo = readdir($directorio) )
    {    
        if(is_dir($archivo) && $archivo!="." && $archivo !=".." && (file_exists($archivo."/SYSREG_SystDir.true")==false) )
        {

/*if(file_exists($archivo."/index.php")){}else{*/
	$elindex =fopen($archivo."/index.php","w+");
   
   
    fwrite($elindex,'<?php
$retroceso="'.$nuevoretroceso.'";
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8"/>
<link href="'.$nuevoretroceso.'System32/css/personalizacion.css" rel="stylesheet"/>

<link href="'.$nuevoretroceso.'System32/css/imageres.css" rel="stylesheet"/><link rel="icon" type="image/ico" href="../Documents_and_settings/visible/games.ico" />

<link href="'.$nuevoretroceso.'System/paginas/explorador/UI/style.css" rel="stylesheet"/>

<script src="'.$nuevoretroceso.'System/paginas/explorador/UI/javascript.js" type="text/javascript" language="javascript">
	
</script><script src="'.$nuevoretroceso.'System32/jquery/$definicion/js/jquery-1.9.1.js" type="text/javascript" language="javascript"></script>

</script>
<!--<script src="'.$nuevoretroceso.'System32/jquery/$definicion/js/jquery-ui-1.10.1.custom.js" type="text/javascript" language="javascript"></script>-->
<title>Explorador de archivos</title>

<?php

$head =fopen($retroceso."System/paginas/explorador/UI/head.html","r");
while (!feof($head)){
   $headcontent=fgets($head);
  
    echo $headcontent;
   }
fclose($head);

?>

	
</head>
<body>
<header class="fondoclaro">

<div id="superior"><h3><img src="'.$nuevoretroceso.'Documents_and_settings/visible/Windows10/carpetaatras.ico" onclick="location.href=\'../\';" height="30px" width="30px"></h3><div id="cierre"></div><div id="logo"><center><img src="'.$nuevoretroceso.'Documents_and_settings/visible/logo.ico" /></center></div></div>
</header>

<div id="audio" class="fondoclaro">


<div id="infarchivo"></div>
</div>
<div id="cuadro">
  <table>
    <thead id="theadMenuContextual"><strong id="theadStrongMenuContextual"></strong></thead>
    <tr>
      <th><!--<img src="" class="imgMenuContextualExplorador">--></th>
    </tr>
  </table>
</div>
<?php

$body =fopen($retroceso."System/paginas/explorador/UI/body.html","r");
while (!feof($body)){
   $bodycontent=fgets($body);
  
    echo $bodycontent;
   }
fclose($body);

?>

<?php

echo "<center id=\"contenido\" style=\"padding-top:50px;\">";
require_once($retroceso."System/paginas/explorador/explorer.motherboard.php");
echo "</center>";

?>

 <?php

$footer =fopen($retroceso."System/paginas/explorador/UI/footer.html","r");
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

');
   
fclose($elindex);
//}

if (file_exists($archivo."/index.ico")) {
	  echo "<li class='fondoobscuro fondoclaroAobscuro ' ><div data-location='".$archivo."' class='folder' data-type='folder'><img width=40px' height=40px' src='".$archivo."/index.ico'><br>".$archivo."<br></div></li>";
	# code...
}else{
            echo "<li class='fondoobscuro fondoclaroAobscuro' ><div data-location='".$archivo."' class='folder' data-type='folder'><img width=40px' height=40px' src='".$retroceso."Documents_and_settings/visible/Windows10/folder.ico'><br>".$archivo."<br></div></li>";
        }
    }
}

echo "</ul>";

closedir($directorio);  ?>