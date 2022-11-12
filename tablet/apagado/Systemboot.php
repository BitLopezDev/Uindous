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


    <link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/logo.ico" />

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

   
location.href="../SOS/BS.php?error="+message;
   

  
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
                    <img src="../../Documents_and_settings/visible/prender.png" id="prender" alt="Prender Uindous" title="Prender Uindous." />
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

