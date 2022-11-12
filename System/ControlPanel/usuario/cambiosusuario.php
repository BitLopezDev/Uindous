<?php
session_start();
if ($_SESSION['acceso']!="1")
{
   header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/ControlPanel/personalizar.php&hacia=Panel de control>Configuración de la cuenta de Usuario");
  exit;
}


?>
<?php
//$datos=$_POST['datos'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$edad=$_POST['edad'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$psactual=$_POST['psactual'];
$Nps=$_POST['Nps'];
$CNps=$_POST['CNps'];



$dataJS =fopen("../../Solarium/JS/data.js","w");
	fwrite($dataJS,'
var nombre="'.$nombre.'";
var apellido="'.$apellido.'";
var edad="'.$edad.'";
var mail="'.$email.'";
var usuario="'.$usuario.'";
var ps="'.$Nps.'";


		');
fclose($dataJS);

$accesoPC =fopen("../../../apagado/acceso.php","w");
	fwrite($accesoPC,'<?php
//Editado para modificación de password
$usuario=$_POST["usuario"];
$clave= $_POST["clave"];

if(strcmp($usuario,"yo@tymail.com")==0 &&strcmp($clave,"003")==0){
session_start();
$_SESSION["acceso"]="1";

 if (isset($_GET[\'next\'])) {
    $next=$_GET["next"];
 header("location:".$next."");
/*if(file_exists($next)){
    header("location:".$next."");
}else{  echo "3";//header("location:../uindous.php");
}*/

       }else{  /*echo "2";*/ header("location:../uindous.php");
   }



}else{
if (isset($_GET[\'next\']) && isset($_GET[\'hacia\'])) {
    $next=$_GET["next"];
       $hacia=$_GET["hacia"];
       header("location:clave/clavemal.php?hacia=".$hacia."&next=".$next);
      /* echo("hacia");*/
  }else if (isset($_GET[\'next\']) ) {
   
    $next=$_GET["next"];
      
       header("location:clave/clavemal.php?next=".$next);
  }else{header("location:clave/clavemal.php");}

    /*echo "1";*/
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Verificando clave de acceso</title>
<script>
window.onerror = function (msg, url, lineNo, columnNo, error) {
   var message = [
            "Message: " + msg,
            "URL: " + url,
            "Line: " + lineNo,
            "Column: " + columnNo,
            "Error object: " + JSON.stringify(error)
        ].join(" - ");

   
location.href="SOS/BS.php?error="+message;
   

  
};
window.onload=function(){
  setTimeout(function(){
  location.href="../System32/AccesoDenegado.php";
},400);
}
</script>
</head>

<body>

</body>
</html>
\

		');
fclose($accesoPC);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Verificando clave de acceso</title>
<script>
window.onerror = function (msg, url, lineNo, columnNo, error) {
   var message = [
            "Message: " + msg,
            "URL: " + url,
            "Line: " + lineNo,
            "Column: " + columnNo,
            "Error object: " + JSON.stringify(error)
        ].join(" - ");

   
location.href="SOS/BS.php?error="+message;
   

  
};
window.onload=function(){
  setTimeout(function(){
  location.href="../System32/AccesoDenegado.php";
},400);
}
</script>
</head>

<body>

</body>
</html>

    \
');
fclose($accesoTablet);
	



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Aplicando aributos</title>
<script>

window.onload=function(){
	setTimeout(function(){
	location.href="../../../../System32/AccesoDenegado.php";
},400);
}
</script>
</head>

<body>
<center>
<h1 style="color: white;">Cambio Realizado.</h1>
<a href="../usuario.php" style="color: white;">Volver a "Control de la cuenta de usuario".</a></center>
</body>
</html>