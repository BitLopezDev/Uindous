<?php
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



if (file_exists("llendoasesion.php")) {

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
}else{echo('<script type/text="javascript" language="javascript">alert("Faltan archivos del sistema, y no encontramos a donde redireccionar, de modo trataremos de redireccionarle a  about:blank.");location.href="about:blank"; window.location="about:blank"; location.replace="about:blank";</script>');}




}

	/*require_once("INF/bloqueoON.php");
	$file =fopen("bloqueo.php","w");
	fwrite($file,$bloqueoOn);
fclose($file);*/
$archivo =fopen("BootCount/llendoasesionCount.inf","a+");
   $linea=fgets($archivo);
   if($linea=="11"){echo('<script type/text="javascript" language="javascript">window.location="SOS/BSD.php"</script>');}else{
    fwrite($archivo,"1");
   }
fclose($archivo);
	
?>
<!DOCTYPE html>
<html class="fondoclaro">
<head>
<link href="../System32/css/personalizacion.css" rel="stylesheet"/>

    <link rel="icon" type="image/ico" href="../Documents_and_settings/visible/logo.ico" />
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content "width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
    
<script src="https://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>
    <title>iniciando sesión...</title>

 
      <style type="text/css">
 html{

 /*background: -moz-linear-gradient(top, #0101DF 10%, #0174DF 45%, #0174DF 55%, #01A9DB 100%);

	background: -webkit-linear-gradient(top, #0101DF 10%, #0174DF 35%, #0174DF 85%, #01A9DB 100%);

	background: -webkit-gradient(linear, left top, left bottom, color-stop(10%,#0101DF), color-stop(30%,#0174DF), color-stop(59%,#0174DF), color-stop(100%,#01A9DB));
	
	 background: -o-linear-gradient(top, #0101DF 10%, #0174DF 35%, #0174DF 85%, #01A9DB 100%); */

	margin:0;
	padding:0;
	color:white;
	font-size:1.3em;
height:100%;
  cursor:none;

  right:0;
  left:0;

  z-index:12;
	
 }
 /*header{
	  background: -moz-linear-gradient(top, #00F 10%, #03C 45%, #06C 55%, #06F 100%);
	
	background: -webkit-linear-gradient(top, #00F 10%, #03C 35%, #03C 85%, #06F 100%);
	
	background: -webkit-gradient(linear, left top, left bottom, color-stop(10%,#00F), color-stop(30%,#03C), color-stop(59%,#03C), color-stop(100%,#06F));

	 background: -o-linear-gradient(top, #00F 10%, #03C 35%, #03C 85%, #06F 100%);
	 height:200px;
	 top:0;
	  right:0;
	  left:0;
	  border-bottom:#CF0;
	
 }*/
 header{
	 position:absolute;

	 top:0;
	 right:0;
	 left:0;
	 border-bottom:#CF0;
	 z-index:10;
	 height:150px;
	 
 }
 footer{
	 position:absolute;

	 bottom:0;
	 right:0;
	 left:0;
	 border-top:#CF0;
	 	 z-index:10;
		  height:150px;
	 
 }
 h1{
	 padding-top:120px;}
	 #texto{
	background-color:red;	 
		 width:200px;
	 }
  </style>
  <style>
  
  .rojo{
  height:50px;
  width:50px;
  /*background-color:#FE2E2E;
  border:5px solid #FE2E2E;*/
   background-color:#F00;
  border:5px solid #F00;
}
.verde{
   height:50px;
  width:50px;
 /* background-color:#40FF00;
  border:5px solid #40FF00;*/
   background-color:#0CF;
  border:5px solid #0CF;
}
.azul{
   height:50px;
  width:50px;
  /*background-color:#0080FF;
  border:5px solid #0080FF;*/
  background-color:#0CF;
  border:5px solid #0CF;

}
.amarelo{
   height:50px;
  width:50px;
 /* background-color:#F7FE2E;
  border:5px solid #F7FE2E;*/
  background-color:#F00;
  border:5px solid #F00;

}
center div{
display:inline !important;	
	
}
table{
 
     color: white;
     background-color: white;
  
}


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
window.onload=function(){
	

  setTimeout(function () {
                location.href="bloqueo.php"   
                }, 2000);
 

               



}

  </script>

</head>
<body>

<header class="fondoobscuro">


</header>
<center>
<div id="texto">
<h1>Iniciando Uindous</h1>
<h3>Por favor espere...</h3>

</div>
<div>
<table>
  <tbody>
    <tr>
    <td width="60" class="rojo" id="rojo"><div align="left"></div></td>
<td width="56" class="verde" id="verde"></td>
</tr>
<tr>
<td id="azul" class="azul">
</td>

<td id="amarelo" class="amarelo"></td>
</tr>

  </tbody>
</table>
</div>
</center>
<footer class="fondoobscuro">
</footer>


</body>

</html>

