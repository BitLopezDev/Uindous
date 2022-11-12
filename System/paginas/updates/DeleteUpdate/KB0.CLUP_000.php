<?php
$prueba = "../../../prueba.html";
	touch($prueba);
	unlink($prueba);	
$prueba2 = "../../../prueba2.html";
	touch($prueba2);
	unlink($prueba2);

$basura = "../../../basura.html";
	touch($basura);
	unlink($basura);
	$pruebaApagado = "../../../apagado/prueba.php";
	touch($pruebaApagado);
	unlink($pruebaApagado);

	$pruebaTXT = "../../../prueba.txt";
	touch($pruebaTXT);
	unlink($pruebaTXT);
	$pruebadOSTXT = "../../../prueba2.txt";
	touch($pruebadOSTXT);
	unlink($pruebadOSTXT);
	$reg =fopen("REG/reg.txt","a");
  
   
    fwrite($reg,"KB0.CLUP_000.php");
   
fclose($reg);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Actualización KB0.CLUP_000</title>
    <style>
      
    </style>
 
</head>
<body>
   
</body>
</html>
