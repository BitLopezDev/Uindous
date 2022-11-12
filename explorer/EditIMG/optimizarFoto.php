 <!DOCTYPE html>
<html class="fondoclaro">
<link href="../../../../System32/css/personalizacion.css" rel="stylesheet"/>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Opotimizar foto</title>
<?php
$foto = $_GET['foto'];
?>
<script>
function regresaTabla(){
	window.open("../../personalizar.php", '_self');
	return false;
}
function optimizarImagen(foto){
	var op = document.getElementById("op").value;
	var nombre = document.getElementById("nombre").value;
	window.open("optimizarImagen.php?foto="+foto+"&op="+op+"&nombre="+nombre, '_self');
	return false;
}
</script>
</head>

<body>
<?php
	print '<table border="1">';
	print "<tr>";
	print "<th>Imagen</th>";
	print "<th>Archivo</th>";
	print "<th>Alto (px)</th>";
	print "<th>Ancho (px)</th>";
	print "<th>Tamaño (bytes)</th>";
	print "</tr>";
	print '<tr>';
	print "<tr>";
	$archivo = '../../../../Documents_and_settings/fondos/otras/'.$foto;
	$info = getimagesize($archivo);
	print "<td>";
	print "<img src='../../../../Documents_and_settings/fondos/otras/$foto' width='120px' height='120px'>";
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
	print filesize($archivo);
	print "</td>";
	print '</table>';
?>
<p>Selecciona una opción para reducir la foto en forma proporcional</p>
<form>
<select id="op">
<option value="75">75%</option>
<option value="50">50%</option>
<option value="25">25%</option>
<option value="10">10%</option>
<option value="5">5%</option>
</select>
<br /><br />
<label for="nombre">Nombre de la nueva imagen. Ejemplo:"example.png". No olvide al final el ".png".
</label><br /><input type="text" id="nombre" name="nombre" /><br /><br />
<input type="button" value="Optimizar" onclick="optimizarImagen('<?php print $foto; ?>');"/>
<input type="button" value="Regresar" onclick="regresaTabla();"/>
</form>
</body>
</html>