<?php
$URIdos = $_SERVER["REQUEST_URI"];
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
/*Imagenes*/
function imagenes($foto){
	$bandera = false;
	if(preg_match("/[.][Jj][Pp][Gg]$/",$foto)) $bandera = true;	
	if(preg_match("/[.][Gg][Ii][Ff]$/",$foto)) $bandera = true;	
	if(preg_match("/[.][Pp][Nn][Gg]$/",$foto)) $bandera = true;
	if(preg_match("/[.][Ii][Cc][Oo]$/",$foto)) $bandera = true;	
		if(preg_match("/[.][Bb][Mm][Pp]$/",$foto)) $bandera = true;	
	return $bandera;
}
$dir = opendir(".");
$numRen = 1;
if($dir){
	print '<table color="white" border="1px solid white">';
	print "<tr>";
	print "<th>Imagen</th>";
	print "<th id='tablaAcrhivo' style='width: 50px; overflow: scroll !important;'>Archivo</th>";
	print "<th>Alto (px)</th>";
	print "<th>Ancho (px)</th>";
	print "<th>Tamaño (bytes)</th>";
	print "<th>Borrar</th>";

	print "</tr>";
	print '<tr>';
	$i = 0;
	while(false !=($foto = readdir($dir))){
		if($foto != "." && $foto != ".." && $foto != "index.ico"  && imagenes($foto)){
			if($i==$numRen){
				$i=0;
				print "</tr>";
				print "<tr>";
			}
			$i++;
			$imagen = ''.$foto;
			$info = getimagesize($imagen);
			print "<td>";
			print "<img id='imgfile' src='$foto' data-name='".$foto."' data-bytes='".$info[0]."' title='".$foto."'  class='imgfile' width='60px' height='60px'>";
			print "</td>";
			print "<td>";
			print $foto;
			print "</td>";
			print "<td>";
			print $info[0];
			print "</td>";
			print "<td>";
			print $info[1];
			print "</td>";
			print "<td>";
			print filesize($imagen);
			print "</td>";
			print "<td>";
			print "<button class='imgEdit' data-file='$foto' data-where='borrarFoto'>Borrar</button>";
			print "</td>";
		
		}
		
	}
	print '</tr>';

	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Alto (px)</th>";
	print "<th>Ancho (px)</th>";
	print "<th>Tamaño (bytes)</th>";
	print "<th>Borrar</th>";
	
	print "</tr>";
	print '<tr>';
	print '</table>';
			
} else {
	print "Error al abrir el directorio.";
}
/*Archivos de Web*/
function webfiles($webfile){
	$bandera = false;
	if(preg_match("/[.][Hh][Tt][Mm][Ll]$/",$webfile)) $bandera = true;	
	if(preg_match("/[.][Hh][Tt][Mm][Ll]$/",$webfile)) $bandera = true;	
	if(preg_match("/[.][Hh][Tt][Mm]$/",$webfile)) $bandera = true;	
	if(preg_match("/[.][Ss][Hh][Tt][Mm][Ll]$/",$webfile)) $bandera = true;	
	if(preg_match("/[.][Xx][Hh][Tt][Mm][Ll]$/",$webfile)) $bandera = true;	
	if(preg_match("/[.][Ii][Nn][Cc]$/",$webfile)) $bandera = true;	
	if(preg_match("/[.][Tt][Mm][Pp][Ll]$/",$webfile)) $bandera = true;	

if(preg_match("/[.][Xx][Mm][Ll]$/",$webfile)) $bandera = true;	
if(preg_match("/[.][Xx][Ss][Dd]$/",$webfile)) $bandera = true;	
if(preg_match("/[.][Tt][Ll][Dd]$/",$webfile)) $bandera = true;	
if(preg_match("/[.][Dd][Tt][Mm][Ll]$/",$webfile)) $bandera = true;	
if(preg_match("/[.][Rr][Ss][Ss]$/",$webfile)) $bandera = true;	
if(preg_match("/[.][Oo][Pp][Mm][Ll]$/",$webfile)) $bandera = true;	
if(preg_match("/[.][Ss][Vv][Gg]$/",$webfile)) $bandera = true;	

if(preg_match("/[.][Pp][Hh][Pp]$/",$webfile)) $bandera = true;
if(preg_match("/[.][Pp][Hh][Pp][33]$/",$webfile)) $bandera = true;
if(preg_match("/[.][Pp][Hh][Pp][44]$/",$webfile)) $bandera = true;
if(preg_match("/[.][Pp][Hh][Pp][77]$/",$webfile)) $bandera = true;
if(preg_match("/[.][Pp][Hh][Pp][Ss]$/",$webfile)) $bandera = true;
if(preg_match("/[.][Pp][Hh][Pp][Tt]$/",$webfile)) $bandera = true;
if(preg_match("/[.][Pp][Hh][Tt][Mm][Ll]$/",$webfile)) $bandera = true;


	if(preg_match("/[.][Cc][Ss][Ss]$/",$webfile)) $bandera = true;	
	if(preg_match("/[.][Jj][Ss]$/",$webfile)) $bandera = true;	
	if(preg_match("/[.][Hh][Tt][CC]$/",$webfile)) $bandera = true;	
	return $bandera;
}
$dir = opendir(".");
$numRen = 1;
if($dir){

	$i = 0;
	while(false !=($webfile = readdir($dir))){
		if($webfile != "." && $webfile != ".." && $webfile != "index.php" && webfiles($webfile)){
			if($i==$numRen){
				$i=0;
				
			}
			$i++;
			
			
		            echo "<li id='file' data-what='file' class='fondoobscuro fondoclaroAobscuro' ><div data-name='".$webfile."' class='webfile' data-type='webfile'><img width=40px' height=40px' src='".$retroceso."Documents_and_settings/visible/Windows10/webfilex16.ico'><br>".$webfile."<br></div></li>";
        }
		}
		
	

		
	
} else {
	print "Error al abrir el directorio.";
}
/*Texto*/
function textfiles($textfile){
	$bandera = false;
	if(preg_match("/[.][Tt][Xx][Tt]$/",$textfile)) $bandera = true;	
		if(preg_match("/[.][Tt][Ee][Xx][Tt]$/",$textfile)) $bandera = true;	
	


	return $bandera;
}
$dir = opendir(".");
$numRen = 1;
if($dir){

	$i = 0;
	while(false !=($textfile = readdir($dir))){
		if($textfile != "." && $textfile != ".." && $textfile != "index.php" && textfiles($textfile)){
			if($i==$numRen){
				$i=0;
				
			}
			$i++;
			
			
		            echo "<li id='file' data-what='file' class='fondoobscuro fondoclaroAobscuro' ><div data-name='".$textfile."' class='textfile' data-type='textfile'><img width=40px' height=40px' src='".$retroceso."Documents_and_settings/visible/Windows10/Documentos.ico'><br>".$textfile."<br></div></li>";
        }
		}
		
	

	
} else {
	print "Error al abrir el directorio.";
}
?>