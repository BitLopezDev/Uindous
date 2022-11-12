<?php
//Editado para modificación de password
$usuario=$_POST["usuario"];
$clave= $_POST["clave"];

if(strcmp($usuario,"yo@tymail.com")==0 &&strcmp($clave,"003")==0){
session_start();
$_SESSION["acceso"]="1";

 if (isset($_GET['next'])) {
    $next=$_GET["next"];
 header("location:".$next."");
/*if(file_exists($next)){
    header("location:".$next."");
}else{  echo "3";//header("location:../uindous.php");
}*/

       }else{  /*echo "2";*/ header("location:../uindous.php");
   }



}else{
if (isset($_GET['next']) && isset($_GET['hacia'])) {
    $next=$_GET["next"];
       $hacia=$_GET["hacia"];
       header("location:clave/clavemal.php?hacia=".$hacia."&next=".$next);
      /* echo("hacia");*/
  }else if (isset($_GET['next']) ) {
   
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

		