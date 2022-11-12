<?php
session_start();
if ($_SESSION['acceso']!="1")
{

	if (isset($_GET['abrir']) && isset($_GET['direccion']) ) {
$abrir=$_GET["abrir"];
$direccion=$_GET["direccion"];
$temporalarchvoabierto =fopen("../../Users/admin/AppData/temp/temporalarchvoabierto.ImgVwrCde.IVsys1AsaIV0001tmpfloplgInwhle.tmp","w+");

   
    fwrite($temporalarchvoabierto,"abrir=".$abrir."&direccion=".$direccion);
   
fclose($temporalarchvoabierto);


}
	header("Location:../../1026/Nosesion.php?hacia=ImageViewer&next=http://localhost/SublimeText/C/OperatingSystem/System/paginas/ImageViewer.php?temp=1");
	exit;
}/*else{
	$temporalarchvoabierto =fopen("../../Users/admin/AppData/temp/temporalarchvoabierto.ImgVwrCde.IVsys1AsaIV0001tmpfloplgInwhle.tmp","w+");
   $lineatemporalarchvoabierto=fgets($temporalarchvoabierto);
   if ($lineatemporalarchvoabierto!="") {
   	header("location:ImageViewer.php?abrir=".$lineatemporalarchvoabierto);
   }
   
fclose($temporalarchvoabierto);
}*/



	# code...
if (!isset($_GET['abrir']) && !isset($_GET['direccion']) ) {

	if(file_exists("../../Users/admin/AppData/temp/temporalarchvoabierto.ImgVwrCde.IVsys1AsaIV0001tmpfloplgInwhle.tmp")){

$temporalarchvoabierto =fopen("../../Users/admin/AppData/temp/temporalarchvoabierto.ImgVwrCde.IVsys1AsaIV0001tmpfloplgInwhle.tmp","r");

   $lineatemporalarchvoabierto=fgets($temporalarchvoabierto);

   if ($lineatemporalarchvoabierto!="") {
   	echo("");
   	header("location:ImageViewer/ReOpen.php");
   }else{echo("<br><br><h1><center></center></h1>");}

fclose($temporalarchvoabierto);

	}


}
	


   


?>
<!DOCTYPE html>
<html class="fondoobscuro">
<head>
<meta charset="utf-8"/>
<link href="../../System32/css/personalizacion.css" rel="stylesheet"/><link href="../../System32/css/imageres.css" rel="stylesheet"/>
<link rel="icon" type="ico" href="../../Documents_and_settings/visible/Windows10/ImageViewer.ico" />
<script src="../../System32/jquery/$definicion/js/jquery.js" type="text/javascript" language="javascript"></script>
  <title>Image viewer</title>
  <script type="text/javascript">

window.onerror = function (msg, url, lineNo, columnNo, error) {
     var message = [
            'Message: ' + msg,
            
            'Line: ' + lineNo,
            'Column: ' + columnNo,
            'Error object: ' + JSON.stringify(error)
        ].join(' - ');

       

           


location.href="../../SOS/BSapp.php?app=ImageViewer&error="+message;


   

    return false;
};




window.onload=function(){
	var largoImagen=$("img").width();
	var altoImagen=$("img").height();


$(".ira").click(function(){

location.href=$(this).attr("data-href");
});


}
function agrandar(){
	$("#agrandar").hide();
	$("#deshacer").show();
	
	$("#imagen").height("95%");
	$("#imagen").width($("#imagen").height());
	

}
function deshacer(){
	<?php
if (isset($_GET['abrir']) ) {

$abrir=$_GET['abrir'];


if(file_exists($_GET['abrir'])){

$info = getimagesize($abrir);
$archivo =fopen($abrir,"r");

echo ('
var altoImagen='.$info[0].';
	var largoImagen='.$info[1].';

	');

fclose($archivo);

	if(file_exists("../../Users/admin/AppData/temp/temporalarchvoabierto.ImgVwrCde.IVsys1AsaIV0001tmpfloplgInwhle.tmp")){
		$temporalarchvoabierto =fopen("../../Users/admin/AppData/temp/temporalarchvoabierto.ImgVwrCde.IVsys1AsaIV0001tmpfloplgInwhle.tmp","w+");

fclose($temporalarchvoabierto);
	}

} else{}

}
	?>
	
		$("#agrandar").show();
	$("#deshacer").hide();
	$("#imagen").removeAttr("width");
	$("#imagen").removeAttr("height");
	alert(altoImagen+"px");
	
}
  </script>
  <style type="text/css">
html{

            width: 100%;
            /*Width=1323px;*/
            height: 720px;
color:white;}
html a{/*background-color:black;*/
color:white;
position:fixed;
font-size:1.6em;}
html a:hover{/*background-color:black;*/
color:white;
position:fixed;
font-size:1.8em;}


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
		right;:0;
		
		border-bottom:1px solid balck;
		famili:vivaldi;
		color:white;
		paddingh:0;
		margin:0;
		border-bottom:5px solid black;
		  
	  }

#mandos{
position:absolute;
top:35px;
right:0;
left:0;
height:50px;
width:100%;
/*background-color: red;*/
border-bottom: 2px solid black;




	}


#centro{
position:absolute;
top:90px;
right:0;
left:0;
bottom: 0;
height:95%;
width:100%;
	padding: 0;
	margin:0;




	}

#imagen{
	padding: 0;
	margin:0;
	max-height: 90%;

}

.ira:hover{


box-shadow: inset 5px  5px 50px white;

}
  </style>



</head>
<body>
<header class="fondoclaro">

<div id="superior">Image Viewer<div id="cierre"></div><div id="logo"><center><img src="../../Documents_and_settings/visible/logo.ico" /></center></div></div>
</header>
<div id="mandos">
	<!--<img src="ImageViewer/img/resize.png" id="agrandar" style="position: absolute; right:5px; top:7px;" onclick="agrandar();">
	<img class="seesconde" src="ImageViewer/img/undo.png" id="deshacer" style="position: absolute; right:5px; top:7px; display: none;" onclick="deshacer();">-->
	<?php
  if (isset($_GET['abrir']) && isset($_GET['direccion'])) {

$abrir=$_GET['abrir'];
$direccion=$_GET['direccion'];
echo("<textarea id='direccion'  style='display:none !important;''>".$direccion."</textarea>");
echo("<textarea id='abrir'  style='display:none !important;''>".$abrir."</textarea>");
if(file_exists($_GET['abrir'])){
$info = getimagesize($abrir);


$archivo =fopen($abrir,"r");


echo("<center><img  class='ira' src='../../Documents_and_settings/visible/Windows10/BasuraVacia.ico' data-href='ImageViewer/EditImg/borrarFoto.php?foto=".$abrir."&direccion=".$direccion."' height='40px' width='40px'>");


echo("<img class='ira'  src='../../Documents_and_settings/visible/Windows10/filtros.png' data-href='ImageViewer/EditImg/filtrosImagen.php?foto=".$abrir."&direccion=".$direccion."' height='40px' width='40px'>");


echo("<img class='ira'  src='../../Documents_and_settings/visible/Windows10/resize.ico' data-href='ImageViewer/EditImg/OptimizarFoto.php?foto=".$abrir."&direccion=".$direccion."' height='40px' width='40px'>");


echo("<img  class='ira' src='../../Documents_and_settings/visible/Windows10/ancho.ico' data-href='ImageViewer/EditImg/OptimizarAncho.php?foto=".$abrir."&direccion=".$direccion."' height='40px' width='40px'></center>");



fclose($archivo);

}else{echo("<h1>El archivo $abrir no existe.</h1>");} }


	?>

</div>
<center id="centro">
	<?php
       if (isset($_GET['abrir']) && isset($_GET['direccion'])) {

$abrir=$_GET['abrir'];
$direccion=$_GET['direccion'];
echo("<textarea id='direccion'  style='display:none !important;''>".$direccion."</textarea>");
echo("<textarea id='abrir'  style='display:none !important;''>".$abrir."</textarea>");
if(file_exists($_GET['abrir'])){
$info = getimagesize($abrir);


$archivo =fopen($abrir,"r");

echo ("<img src='".$abrir."' class='' id='imagen' data-width='".$info[1]."' data-height='".$info[0]."' title='".$abrir."' alt='La imagen no pudo cargarse por un error inesperado.' data-where='$direccion'  />");
/*echo("<a href='ImageViewer/EditImg/borrarFoto.php?foto=".$abrir."&direccion=".$direccion."'>Borrar</a>");
echo("<br><a href='ImageViewer/EditImg/filtrosImagen.php?foto=".$abrir."&direccion=".$direccion."'>filtros</a>");
echo("<br><a href='ImageViewer/EditImg/OptimizarFoto.php?foto=".$abrir."&direccion=".$direccion."'>Reducir proporcionalmente</a>");
echo("<br><a href='ImageViewer/EditImg/OptimizarAncho.php?foto=".$abrir."&direccion=".$direccion."'>Reducir ancho</a>");*/

fclose($archivo);

}else{echo("<br><br><br><h1>El archivo $abrir no existe.</h1>");}



}else if (isset($_GET['abrir']) ) {

header("location:../../SOS/BSapp.php?error=No se ha indicado una ruta.&app=ImageViewer");


}else if (isset($_GET['direccion']) ) {


header("location:../../SOS/BSapp.php?error=No se ha indicado el archivo que se debe abrir.&app=ImageViewer");

}else{
	echo ("<script>$(document).ready(function(){
$('#mandos').hide();
$('html').addClass('fondologin');
	});</script>");
}
       

       

       ?>    
</center>
<div id="inferior"></div>


</body>
</html>