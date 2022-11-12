 <!DOCTYPE html>
<html class="fondoclaro">
<link href="../../../../System32/css/personalizacion.css" rel="stylesheet"/>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leer fotos</title>
</head>

<body>
<center>
<?php
function validaFoto($foto){
	$bandera = false;
	// que puede tomar una del los dos, la j o la J. Y asi sucesivamente.
	if(ereg("[Jj][Pp][Gg]$",$foto)) $bandera = true;
		if(ereg("[Jj][Ee][Pp][Gg]$",$foto)) $bandera = true;	
	if(ereg("[Gg][Ii][Ff]$",$foto)) $bandera = true;	
	if(ereg("[Pp][Nn][Gg]$",$foto)) $bandera = true;
	return $bandera;
}
$dir = opendir("fotos");
$numRen = 3;
if($dir){
	print '<table border="1">';

	print '<tr>';
	$i = 0;
	while(false !=($foto = readdir($dir))){
		if($foto != "." && $foto != ".." && validaFoto($foto)){
			if($i==$numRen){
				$i=0;
				print "</tr>";
				print "<tr>";
			}
			$i++;
			print "<td>";
			print "<img src='../../../../Documents_and_settings/fondos/otras/$foto' width='100px' height='100px'>";
			print "</td>";
		}
		
	}

	print '</tr>';
	print '</table>';
	
	
} else {
	print "Error al tratar de abrir la carpeta 'fotos'";
}

?>
</center>
</body>
</html>