<?php
session_start();
if ($_SESSION['acceso']!="1")
{
	header("Location:../../System32/Nosesion.php");
	exit;
}


?>
<!DOCTYPE html>
<html class="fondoobscuro fondologin">
<head>
<meta charset="utf-8"/>
<link href="../../System32/css/personalizacion.css" rel="stylesheet"/><link href="../../System32/css/imageres.css" rel="stylesheet"/>
<link rel="icon" type="ico" href="../../Documents_and_settings/visible/Windows10/calculadora.ico" />
  <title></title>
  <script type="text/javascript">


  </script>
  <style type="text/css">
html{

            width: 100%;
            /*Width=1323px;*/
            height: 720px;
color:white;}
html a{/*background-color:black;*/
color:white;
position:fixed;
font-size:1.6em;}
html a:hover{/*background-color:black;*/
color:white;
position:fixed;
font-size:1.8em;}


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
		famili:vivaldi;
		color:white;
		paddingh:0;
		margin:0;
		border-bottom:5px solid black;
		  
	  }


  </style>

</head>
<body>
<header class="fondoclaro">

<div id="superior"><div id="cierre"></div><div id="logo"><center><img src="../../Documents_and_settings/visible/logo.ico" /></center></div></div>



</header>

</body>
</html>