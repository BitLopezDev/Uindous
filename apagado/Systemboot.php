<?php
/*	$fileu =fopen("bloqueo.php","w");
	fwrite($fileu,'
<html>
<head>
<script>
window.onload=function(){
location.href="Systemboot.php";
}
</script>
</head>
<body>
</body>
</html>
');
fclose($fileu);*/
session_start();



	session_destroy();
	if (file_exists("SOS/BS.php")) {




if (file_exists("Systemboot.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}

if (file_exists("Restart.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}



if (file_exists("acceso.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}



if (file_exists("apagando.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}



if (file_exists("arranqueespecial.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}



if (file_exists("bloqueo.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}



if (file_exists("yendoasesion.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}




if (file_exists("reiniciando.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);

}

}else{/*echo('<script type/text="javascript" language="javascript">alert("No se encuentra BS.php");</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);*/
if (file_exists("../System/SOS/SOSBS.php")) {
echo('<script type/text="javascript" language="javascript">window.location="../System/SOS/SOSBS.php"</script>');
}else if (file_exists("../System32/SOS/SOSBSdos.php")) {
echo('<script type/text="javascript" language="javascript">window.location="../System32/SOS/SOSBSdos.php"</script>');
}else if (file_exists("SOS/BSD.php")) {
echo('<script type/text="javascript" language="javascript">window.location="../System32/SOS/SOSBSdos.php"</script>');
}else{echo('<script type/text="javascript" language="javascript"alert("Faltan archivos del sistema, y no encontramos a donde redireccionar, de modo trataremos de redireccionarle a  about:blank.");lo>cation.href="about:blank"; window.location="about:blank"; location.replace="about:blank";</script>');}




}
$archivo =fopen("BootCount/SystemBootCount.inf","a+");
   $linea=fgets($archivo);
   if($linea=="11"){echo('<script type/text="javascript" language="javascript">window.location="SOS/BSD.php"</script>');}else {
    fwrite($archivo,"1");
   }
fclose($archivo);
?>
<!DOCTYPE html>
<html>
<head>


    <link rel="icon" type="image/ico" href="../Documents_and_settings/visible/logo.ico" />

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <meta name="viewport" content "width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
    <title>Arranque de Uindous.</title>

 
      <style type="text/css">
 html{
  background-color: black;
  color: white;
  cursor:default;
  /*cursor:none;*/
 }
 .altocaja{
  height:50px;
  width:50px;
 }

 #bienvenido{font-size: 3em;}

 .displaynone{display: none;}
 .semuestra{display:inline;}

  .seesconde{display: none;}

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

   
location.href="SOS/BS.php?error="+message;
   

  
};
	

$(document).ready(inicio);
function inicio(){
 
  var prender =document.getElementById('prender');
 
    prender.onclick=function(){
		location.href="Restart.php";
	}}
  </script>

</head>
<body>



</center>



<!--<button id="prender">Iniciar</button>-->
<button id="prendiendo" class="seesconde">Apagar.</button>
<center><br>
                    <img src="../Documents_and_settings/visible/prender.png" id="prender" alt="Prender Uindous" title="Prender Uindous." />
                </center>
                <!--<button id="seguro" title="Haga click para arrancar en modo seguro">Arranque normal.</button><br>
                <button id="opciones" title="Haga click para ver las opciones de arranque.">Opciones avanzadas.</button>-->
</div>



</div>
<div id="anular" class="seesconde">
  <center>
    <br><br><br><br><br><br>
    <strong>
    <p id="anulando">Anulando Arranque...</p></strong><br>
    Por favor espere.

  </center>


</div>
</body>
</html>

