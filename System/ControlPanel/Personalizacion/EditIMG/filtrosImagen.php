 <!DOCTYPE html>
<html class="fondoclaro">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../../../../System32/css/personalizacion.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Filtros imagen</title>
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
	window.open("filtrosFoto.php?foto="+foto+"&op="+op+"&nombre="+nombre, '_self');
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
<p>Selecciona una opción para añadir un filtro a la foto</p>
<form>
<select id="op">
<option value="negativo">Negativo</option>
<option value="grises">Escala de grises</option>
<option value="brillo">Brillantes</option>
<option value="contraste">Contraste</option>
</select>
<br /><br />
<label for="nombre">Nombre de la nueva imagen. Ejemplo:"example.png". No olvide al final el ".png".</label><br /><input type="text" id="nombre" name="nombre" /><br /><br />
<input type="button" value="Optimizar" onclick="optimizarImagen('<?php print $foto; ?>');"/>

<input type="button" value="Regresar" onclick="regresaTabla();"/>
</form>
</body>
</html>