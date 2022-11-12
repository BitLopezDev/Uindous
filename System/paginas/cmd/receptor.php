<?php
if(isset($_POST['comandINPUT'])){
	$comandINPUT=$_POST['comandINPUT'];
	echo($comandINPUT);

    
	   $archivo =fopen("comandos32.txt","a");
   $linea=fgets($archivo);

 if(file_exists($comandINPUT))
    {
        //header("location:comandos/".$comandINPUT.".php");
        echo('<script type/text="javascript" language="javascript">window.location="'.$comandINPUT.'"</script>');

 fwrite($archivo,$comandINPUT);

  

    }else{
 fwrite($archivo,"El comando: ".$comandINPUT." no existe.
");
 header("location:../DOS.php");


    }

fclose($archivo);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Receptor de Comandos CMD</title>
</head>
<body>

</body>
</html>