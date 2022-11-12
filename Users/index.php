<?php
$retroceso="../";
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8"/>
<link href="../System32/css/personalizacion.css" rel="stylesheet"/>

<link href="../System32/css/imageres.css" rel="stylesheet"/><link rel="icon" type="image/ico" href="../Documents_and_settings/visible/games.ico" />

<link href="../System/paginas/explorador/UI/style.css" rel="stylesheet"/>

<script src="../System/paginas/explorador/UI/javascript.js" type="text/javascript" language="javascript">
	
</script><script src="../System32/jquery/$definicion/js/jquery-1.9.1.js" type="text/javascript" language="javascript"></script>

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

<div id="superior"><h3><img src="../Documents_and_settings/visible/Windows10/carpetaatras.ico" onclick="location.href='../';" height="30px" width="30px"></h3><div id="cierre"></div><div id="logo"><center><img src="../Documents_and_settings/visible/logo.ico" /></center></div></div>
</header>

<div id="audio" class="fondoclaro">


<div id="infarchivo"></div>
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

