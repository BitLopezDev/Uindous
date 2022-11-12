<?php
$navegador=$_POST["navegador"];
$notepad=$_POST["notepad"];
//print($notepad);
$file=fopen("Notas.php","w");
fwrite($file, $notepad);
fclose($file);
print($notepad);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> </title>
<script>
/*
window.onload=function(){
	setTimeout(function(){
	location.href="../System32/AccesoDenegado.php";
},400);
}*/
</script>

</head>

<body>
</body>
</html>