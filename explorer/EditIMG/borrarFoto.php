 <!DOCTYPE html>
<html class="fondoclaro">
<head>
<link href="../../System32/css/personalizacion.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Borrar foto</title>
<?php
$foto = $_GET['foto'];
?>
<script>

function borraImagen(foto){
	window.open("borraImagen.php?foto="+foto, '_self');
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
	$archivo = $foto;
	$info = getimagesize($archivo);
	print "<td>";
	print "<img src='$foto' width='120px' height='120px'>";
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
<p>ADVERTENCIA: Una vez borrado el archivo NO podrá recuperarse</p>
<form>
<input type="button" value="Borrar" onclick="borraImagen('<?php print $foto; ?>');"/>

</form>
</body>
</html>