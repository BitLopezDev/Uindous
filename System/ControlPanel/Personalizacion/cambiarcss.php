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
$favcolorClaro=$_POST['favcolorClaro'];
$favcolorOscuro=$_POST['favcolorOscuro'];

$fondodefecto=$_POST['fondodefecto'];
$bloqueo=$_POST['bloqueo'];
$usuario=$_POST['usuario'];

$archivofondo =fopen("archivos/jsvalue.js","w");
	fwrite($archivofondo,'
var claro="'.$favcolorClaro.'";
var oscuro="'.$favcolorOscuro.'";
var fondodefecto="'.$fondodefecto.'";
var bloqueo="'.$bloqueo.'";
var usuario="'.$usuario.'";

		');
fclose($archivofondo);

$archivofondophp =fopen("archivos/phpvalue.js","w");
	fwrite($archivofondo,'
$claro="'.$favcolorClaro.'";
$oscuro="'.$favcolorOscuro.'";
$fondodefecto="'.$fondodefecto.'";
$bloqueo="'.$bloqueo.'";
$usuario="'.$usuario.'";

		');
fclose($archivofondophp);
$filefondo =fopen("../../../System32/css/imageres.css","w");
	fwrite($filefondo,'@charset "utf-8";

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

.fondousuariostartmenu{

margin-left:25%;

	
         
			border: 5px solid white;
			border-radius:100%;
			height:50px;
			width:50px;
		
			
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
fclose($filefondo);
	/*$archivo =fopen("archivos/jsvalueprueba.txt","w");
	fwrite($archivo,'
var claro="'.$favcolorClaro.'";
var oscuro="'.$favcolorOscuro.'";
var fondodefecto="'.$fondodefecto.'";
var bloqueo="'.$bloqueo.'";
var usuario="'.$usuario.'";

		');
fclose($archivo);*/

//favcolorClaro
//favcolorOscuro
//require_once("archivos/cssvalue.php");
//require_once("archivos/phpvalue.php");
/*$claro=$favcolorClaro;
$oscuro=$favcolorOscuro;*/
$file =fopen("../../../System32/css/personalizacion.css","w");
	fwrite($file,'@charset "utf-8";

/*
<moved data-from="jQueryStyle.css">*/
.nav_menu ul.dropmenu a.toplevel.hover{
	color:'.$favcolorClaro.';
}
.nav_menu ul.dropmenu a.toplevel.selected{
	color:'.$favcolorClaro.';
}
.nav_menu ul.dropmenu li ul li a.sublevel.hover{
	color:white;
	background-color:'.$favcolorClaro.';
}
/*</moved>
*/

.fondoclaro{
background-color:'.$favcolorClaro.';
}

.fondoobscuro{
background-color:'.$favcolorOscuro.';
}
.fondooscuro{
background-color:'.$favcolorOscuro.';
}
/**/


.fondoclaroAobscuro{
background-color:'.$favcolorClaro.';
}
.fondoclaroAobscuro:hover{
background-color:'.$favcolorOscuro.';
}


.fondoobscuroAclaro{
background-color:#'.$favcolorOscuro.';
}
.fondoobscuroAclaro:hover{
background-color:'.$favcolorClaro.';
}
/**/
/**/
.letraclaro{
color:'.$favcolorClaro.';
}

.letraobscuro{
color:'.$favcolorOscuro.';
}
.letraoscuro{
color:'.$favcolorOscuro.';
}
/**/
.bordeclaro{
border:'.$favcolorClaro.';
}

.bordeobscuro{
border:'.$favcolorOscuro.';
}
.bordeoscuro{
border:'.$favcolorOscuro.';
}

/**/
.sombraobscuro{box-shadow:10px 10px 20px '.$favcolorOscuro.' !important;}
.sombraoscuro{box-shadow:10px 10px 20px '.$favcolorOscuro.' !important;}
.sombraclaro{box-shadow:10px 10px 20px '.$favcolorClaro.' !important;}
/**/
/*00F*/


/**/
/**/


/**/
/**/
button{
            background-color:white;
            border:2px solid white;
border-radius:10% 10% 10% 10% ;
        }
        button:hover{
            background-color:'.$favcolorClaro.';
            border:2px solid black;
            border-radius:20% 20% 20% 20% ;
        }
        .button{
            background-color:white;
            border:2px solid white;
border-radius:10% 10% 10% 10% ;
        }
        .button:hover{
            background-color:'.$favcolorClaro.';
            border:2px solid black;
            border-radius:20% 20% 20% 20% ;
        }
input{
            background-color:white;
            border:2px solid white;
border-radius:10% 10% 10% 10% ;
        }
        input:hover{
            background-color:'.$favcolorClaro.';
            border:2px solid black;
            border-radius:20% 20% 20% 20% ;
        }

');
fclose($file);
header("location:../personalizar.php");


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