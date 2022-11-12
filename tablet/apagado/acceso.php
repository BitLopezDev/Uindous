
		<?php
$usuario=$_POST["usuario"];
$clave= $_POST["clave"];

if(strcmp($usuario,"yo@tymail.com")==0 &&strcmp($clave,"003")==0){
session_start();
$_SESSION["acceso"]="1";

header("location:../tabletOS.php");
}else{

header("location:../apagado/clave/clavemal.php");
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

   
location.href="../apagado/SOS/BS.php?error="+message;
   

  
};
window.onload=function(){
	setTimeout(function(){
	location.href="../../System32/AccesoDenegado.php";
},400);
}
</script>
</head>

<body>

</body>
</html>
