<?php
session_start();
if ($_SESSION['acceso']!="1")
{

  if (isset($_GET['abrir']) && isset($_GET['direccion']) ) {
$abrir=$_GET["abrir"];
$direccion=$_GET["direccion"];
$temporalarchvoabierto =fopen("../../Users/admin/AppData/temp/temporalarchvoabierto.NtPdCde.NPsys1AsaNP0001tmpfloplgInwhle.tmp","w+");

   
    fwrite($temporalarchvoabierto,"abrir=".$abrir."&direccion=".$direccion);
   
fclose($temporalarchvoabierto);


}
  header("Location:../../1026/Nosesion.php?hacia=Notepad&next=http://localhost/SublimeText/C/OperatingSystem/System/paginas/Notepad.php?temp=1");
  exit;
}/*else{
  $temporalarchvoabierto =fopen("../../Users/admin/AppData/temp/temporalarchvoabierto.ImgVwrCde.IVsys1AsaIV0001tmpfloplgInwhle.tmp","w+");
   $lineatemporalarchvoabierto=fgets($temporalarchvoabierto);
   if ($lineatemporalarchvoabierto!="") {
    header("location:ImageViewer.php?abrir=".$lineatemporalarchvoabierto);
   }
   
fclose($temporalarchvoabierto);
}*/



  # code...
if (!isset($_GET['abrir']) && !isset($_GET['direccion']) ) {

  if(file_exists("../../Users/admin/AppData/temp/temporalarchvoabierto.NtPdCde.NPsys1AsaNP0001tmpfloplgInwhle.tmp")){

$temporalarchvoabierto =fopen("../../Users/admin/AppData/temp/temporalarchvoabierto.NtPdCde.NPsys1AsaNP0001tmpfloplgInwhle.tmp","r");

   $lineatemporalarchvoabierto=fgets($temporalarchvoabierto);

   if ($lineatemporalarchvoabierto!="") {
    echo("");
    header("location:Notepad/ReOpen.php");
   }else{echo("<br><br><h1><center></center></h1>");}

fclose($temporalarchvoabierto);

  }


}


?>
<!DOCTYPE html>
<html class="fondoobscuro fondologin" >
<head>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="ckeditor/ckeditor.js"></script>
 <link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/Windows10/BlockNotas.ico" />
<meta charset="UTF-8"/>
<link href="../../System32/css/personalizacion.css" rel="stylesheet"/><link href="../../System32/css/imageres.css" rel="stylesheet"/>
    <title>TY-Notepad</title>
    <style type="text/css">

  html{
  
            width: 100%;
            /*Width=1323px;*/
            height: 720px;
color:white;}
    .semuestra{display:block;}
.seesconde{
display:none;
    width:0;
    height:0;
    color:transparent;

    font-size:0;

    
    
    
}

      
        #navegador:hover{
            cursor:progress;
        }


      textarea{border-radius:05% 05% 05% 05% ;
	     position:absolute;
		   top:20px;
		   left:0;
	  }
	 
	  #cierre{
		  
	  }
	   #logo{
	position: absolute;
	top:0;
	right: 0;
	height: 30px;
	width: 100px;
	background-color: black;		
	
		
	   }
	   #logo img{
		height:28;
		width:20px; 
		float:center;  
		margin-top:1px;
		padding-top:1px;
	   }
	   header{
		position:absolute;
		height:30px;
		width:100%;
		top:0;
		left:0;
		right;:0;
		
		border-bottom:1px solid balck;
		font-family:vivaldi;
		color:white;
		padding:0;
		margin:0;
		border-bottom:5px solid black;
		  
	  }

	  header p{
        margin:0;
        padding:0;
        font-size:1.52em;
      }
      #divheader{

      	position:absolute;
      	top:0;
      	right:0;
      	left:0;
      	width:100%;
      	height:50px;
      	background-color: transparent;

      }

     .fondoblanco{
     	background-color: white;
     } 
    </style>
<script type="text/javascript">
window.onerror = function (msg, url, lineNo, columnNo, error) {
     var message = [
            'Message: ' + msg,
            
            'Line: ' + lineNo,
            'Column: ' + columnNo,
            'Error object: ' + JSON.stringify(error)
        ].join(' - ');

       

           


location.href="../../SOS/BSapp.php?app=Notepad&error="+message;


   

    return false;
};

window.onload=function(){

 //cke_wysiwyg_frame
}
function prueba(){
$("iframe").attr("name","prueba");
}	
function muestra(){
	setTimeout(function(){
		$("body").removeClass("seesconde");
	
	},500);
}
</script>

</head>
<body onload="muestra();" class="seesconde">

<div id="divheader">
</div>
<header class="fondoclaro">

<div id="superior"><p>Ty-notepad</p><div id="cierre"></div><div id="logo"><center><img src="../../Documents_and_settings/visible/logo.ico" /></center></div></div>



</header><br><br>
<center >
<div id="blockdenotas">
<form id="centro" name="centro" action="notepad/savefile.php" method="post" >
            <textarea name="editor1" id="editor1" rows="10" cols="80" placeholder="Escriba">
       <?php
       if (isset($_GET['abrir'])) {

if(file_exists($_GET['abrir'])){	
$abrir=$_GET['abrir'];
$archivo =fopen($abrir,"r");
while (!feof($archivo)){
   $archivocontent=fgets($archivo);
  
    echo $archivocontent;
   }
fclose($archivo);}else{echo("El archivo no existe.");}
       

       }

       ?>            </textarea>
       <script type="text/javascript">
         function enviaarchivoaeditar(){
          location.href="notepad/savefile.php?file=../"+file;
         }
       </script>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
          <input type="submit" value="Guardar nuevo documento" />
            
          
          <?php
          if (isset($_GET['abrir'])) {
$abrir=$_GET['abrir'];
if(file_exists($abrir)){	
	echo '<textarea class="seesconde displaynone" style="display:none !important;" name="ruta" id="ruta" rows="10" cols="80" placeholder="Escriba" style="position:absolute; top:500px;">../'.$abrir.' </textarea>';
  }
       

       }
          
          ?>
         
  </form>
</div>
</center>
</body>





</html>