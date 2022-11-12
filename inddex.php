<?php
$retroceso="";

?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8"/>
<link href="System32/css/personalizacion.css" rel="stylesheet"/>

<link href="System32/css/imageres.css" rel="stylesheet"/><link rel="icon" type="image/ico" href="Documents_and_settings/visible/games.ico" />

<link href="System/paginas/explorador/UI/style.css" rel="stylesheet"/>

<script src="System/paginas/explorador/UI/javascript.js" type="text/javascript" language="javascript">
  
</script><script src="System32/jquery/$definicion/js/jquery-1.9.1.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript">
  <?php
  
 /* print("var retroceso='".$retroceso."';");
  print("var laurl='".$_SERVER[REQUEST_URI]."';");*/
  ?>
</script>
<title>Explorador de archivos</title>
<?php

$head =fopen($retroceso."System/paginas/explorador/UI/head.html","r");
while (!feof($head)){
   $headcontent=fgets($head);
  
    echo $headcontent;
   }
fclose($head);

?>

  <style type="text/css">
    hr{
      height: 5px;
    background-color: black;
    border: none;
    }
  </style>
</head>
<body>
<header class="fondoclaro">

<div id="superior"><h3><img src="Documents_and_settings/visible/Windows10/Equipo.ico"  height="30px" width="30px"></h3><div id="cierre"></div><div id="logo"><center><img src="Documents_and_settings/visible/logo.ico" /></center></div></div>
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



<center id="contenido" style="padding-top:50px;">
<h1>Carpetas</h1>
<ul><li class="fondoobscuro fondoclaroAobscuro"><div data-location="Users/admin/Documentos" class="folder" data-type="folder"><img src="Documents_and_settings/visible/Windows10/DocumentosDIR.ico" width="40px'" height="40px'"><br>Documentos<br></div></li>

<li class="fondoobscuro fondoclaroAobscuro"><div data-location="Users/admin/Escritorio" class="folder" data-type="folder"><img src="Documents_and_settings/visible/Windows10/EscritorioDIR.ico" width="40px'" height="40px'"><br>Escritorio<br></div></li>

<li class="fondoobscuro fondoclaroAobscuro"><div data-location="Users/admin/Imagenes" class="folder" data-type="folder"><img src="Documents_and_settings/visible/Windows10/ImagenesDIR.ico" width="40px'" height="40px'"><br>Imagenes<br></div></li>

<li class="fondoobscuro fondoclaroAobscuro"><div data-location="Users/admin/Musica" class="folder" data-type="folder"><img src="Documents_and_settings/visible/Windows10/MusicaDIR.ico" width="40px'" height="40px'"><br>Musica<br></div></li>

<li class="fondoobscuro fondoclaroAobscuro"><div data-location="Users/admin/Videos" class="folder" data-type="folder"><img src="Documents_and_settings/visible/Windows10/VideosDIR.ico" width="40px'" height="40px'"><br>Videos<br></div></li>

</ul>


<br><hr>
<h1>Particiones y Unidades virtuales</h1>
<ul>
<li class="fondoobscuro fondoclaroAobscuro"><div data-location="Part/C" class="folder" data-type="folder"><img src="Documents_and_settings/visible/Windows10/OSunsafe.ico" width="40px'" height="40px'"><br>C:<br></div></li>
<li class="fondoobscuro fondoclaroAobscuro"><div data-location="Part/D" class="folder" data-type="folder"><img src="Documents_and_settings/visible/Windows10/datos.ico" width="40px'" height="40px'"><br>D:<br></div></li>
<li class="fondoobscuro fondoclaroAobscuro"><div data-location="Part/B" class="folder" data-type="folder"><img src="Documents_and_settings/visible/Windows10/BackUp.ico" width="40px'" height="40px'"><br>BackUp (B:)<br></div></li>
<li class="fondoobscuro fondoclaroAobscuro"><div data-location="Part/S" class="folder" data-type="folder"><img src="Documents_and_settings/visible/Windows10/DiscoSeguro.ico" width="40px'" height="40px'"><br>Secured data-vault (S:)<br></div></li>
</ul>

</center>



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

