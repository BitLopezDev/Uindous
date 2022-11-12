<?php
session_start();
if ($_SESSION['acceso']!="1")
{
  header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/ControlPanel/Sistema.php&hacia=Panel de control>Visor de evendos del Sistema.");
  exit;
}


?>
<!DOCTYPE html>
<html class="fondoobscuro">
<head>
<meta charset="UTF-8"/>
<link href="../../System32/css/personalizacion.css" rel="stylesheet"/>
<script src="../../System32/jquery/$definicion/js/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>

<link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/Windows10/sistemayseguridad.ico" />
    <title>Visor de eventos del sistema.</title>
      <style type="text/css">
  html{
    color:white;
  }
  html a {color:white;
    font-size:1.3em;}
 .displaynone{display:none;
  width:0;
  height:0;
  color:transparent;
  background-color:transparent;
  font-size:0;}
 .semuestra{display:inline;

 
} 



#audio{
  float: left;
  padding-top: 0px;
  padding-left: 0px;
 
  color: white;
  width: 15%;
  height: 100%;
  
  border: 5px solid black;
  
  position: absolute;
  top: 30px;
  bottom: 0;
  left: 0;
}
#video{
  
  float: right;
  padding-top: 0px;
  padding-right: 0px;

  color: white;
  width: 15%;
  height: 100%;
  border: 5px solid black;

  position: absolute;
  top: 30px;
  bottom: 0;
  right: 0;
}
.seesconde{display:none;
  width:0;
  height:0;
  color:transparent;
  background-color:transparent;
  font-size:0;}


#colornegro{color: black;}
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
   
    border-bottom:1px solid black;
    
    color:white;
    padding:0;
    margin:0;
    border-bottom:5px solid black;

      
    }
header h1,h2,h3,h4,h5,h6{
        margin:0;
        padding:0;
        
      }

  </style>
  <script type="text/javascript">

  </script>
</head>

<body>
<header class="fondoclaro">

<div id="superior"><h3>Panel de control>Sistema y Seguridad>Visor de eventos del sistema.</h3><div id="cierre"></div><div id="logo"><center><img src="../../Documents_and_settings/visible/logo.ico" /></center></div></div>



</header>




  <div id="audio" class="fondoclaro">


</div>











</div>
<div id="video" class="fondoclaro">
 


</div>
<center>

</center>
</body>

</html>

