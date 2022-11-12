 <!DOCTYPE html>
<html class="fondoclaro">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../../../../System32/css/personalizacion.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Borrar foto</title>
<?php
if (isset($_GET['foto'])) {
$foto=$_GET['foto'];
echo("<textarea id='foto' style=' display:none !important;''>".$foto."</textarea>");
}else{header("location:../../../../SOS/BSapp.php?error=No se ha indicado el archivo que se debe modificar.&app=ImagenViewer");}

if (isset($_GET['direccion'])) {
$direccion=$_GET['direccion'];
echo("<textarea id='direccion'  style='display:none !important;''>".$direccion."</textarea>");
}else{header("location:../../../../SOS/BSapp.php?error=No se ha indicado una ruta.&app=ImageViewer");}
?>
<script>
function regresaTabla(){
	var direccion=document.getElementById("direccion").value;
		var foto=document.getElementById("foto").value;
	
	window.open("../../ImageViewer.php?abrir="+foto+"&direccion="+direccion.value, '_self');
	return false;
}
function borraImagen(foto){
	window.open("borraImagen.php?foto="+foto+"&direccion="+direccion.value, '_self');
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
	$archivo = '../../'.$foto;
	$info = getimagesize($archivo);
	print "<td>";
	print "<img src='../../$foto' width='120px' height='120px'>";
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
<input type="button" value="Regresar" onclick="regresaTabla();"/>
</form>
</body>
</html>