<?php 
session_start();
if ($_SESSION['acceso']!="1")
{
    header("Location:../../../apagado/bloqueo.php");
    exit;
}else{
	session_destroy();
	session_start();
$_SESSION['acceso']="1";
}
?>
<?php
//$datos=$_POST['datos'];


$fondodefecto=$_POST['fondodefecto'];
$bloqueo=$_POST['bloqueo'];
$usuario=$_POST['usuario'];


	$archivofondo =fopen("archivos/jsvalueimageresprueba.txt","w");
	fwrite($archivo,'
var claro="'.$favcolorClaro.'";
var oscuro="'.$favcolorOscuro.'";
var fondodefecto="'.$fondodefecto.'";
var bloqueo="'.$bloqueo.'";
var usuario="'.$usuario.'";

		');
fclose($archivofondo);

//favcolorClaro
//favcolorOscuro
//require_once("archivos/cssvalue.php");
//require_once("archivos/phpvalue.php");
/*$claro=$favcolorClaro;
$oscuro=$favcolorOscuro;*/
$file =fopen("../../../System32/css/prueba2.txt","w");
	fwrite($file,'@charset "utf-8";

.fondodefecto{
	
	background-image: url('.$fondodefecto.');
	        background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
		
			width:100%;
			height:100%;
}


/**/
.fondologin{
		background-image:url('.$bloqueo.');
	        background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
			width:100%;
			height:100%;
}
/**/
.fondousuario{
		background-image:url('.$usuario.');
	        background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
			/*width:100%;
			height:100%;*/
}
/**/
/**/
.fondodefectoPERSONALIZARcontrolpanel{

		
	background-image: url('.$fondodefecto.');
	        background-repeat: no-repeat;
           /* background-attachment: fixed;*/
            background-position: left;
			background-size:100% 120px !important;
			height:120px;
			/*background-color:red;*/
			border:5px solid white;
}
.fondologinPERSONALIZARcontrolpanel{

background-image: url('.$bloqueo.');
	        background-repeat: no-repeat;
           /* background-attachment: fixed;*/
            background-position: left;
			background-size:100% 120px !important;
			height:120px;
			
			border-left:5px solid white;
border-right:5px solid white;
border-bottom:5px solid white;
}
/**/
.fondousuarioPERSONALIZARcontrolpanel{

	background-image: url('.$usuario.');
	        background-repeat: no-repeat;
           /* background-attachment: fixed;*/
            background-position: left;
			background-size:100% 120px !important;
			height:120px;
		
			border-left:5px solid white;
border-right:5px solid white;
border-bottom:5px solid white;
}
.fondousuariobloqueo{

	background-image: url('.$usuario.');
	        background-repeat: no-repeat;
           /* background-attachment: fixed;*/
            background-position: center;
			background-size:150px 100px !important;
			height:100px;
		
		
}

.fondodefectotabla{
	
	background-image: url('.$fondodefecto.');
	        background-repeat: no-repeat;
           /* background-attachment: fixed;*/
            background-position: center;
		
			width:320px;
			height:200px;
}
');
fclose($file);
//header("location:personalizar.php");


/*
$archive =fopen("../../../System32/css/personalizacion.css","w");
	fwrite($archive,$datos);
fclose($archive);
	$file =fopen("../../../System32/css/personalizacion.css","w");
	fwrite($file,$datos);
fclose($file);*/



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aplicando aributos</title>
<script>

/*window.onload=function(){
	setTimeout(function(){
	location.href="../../../../System32/AccesoDenegado.php";
},400);
}*/
</script>
</head>

<body>

</body>
</html>