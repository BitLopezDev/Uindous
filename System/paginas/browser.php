<?php
session_start();
if ($_SESSION['acceso']!="1")
{
	header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/paginas/browser.php&hacia=Navegador");
	exit;
}


?>
<!DOCTYPE html>
<html class="fondoobscuro fondologin"><head>
<link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/Windows10/Navegador.ico" />

<link href="../../System32/css/personalizacion.css" rel="stylesheet"/><link href="../../System32/css/imageres.css" rel="stylesheet"/>
<!--<script src="../../System32/js/ProgramasLogo.js"></script>-->
  <title>TY-Browser</title>
  <script type="text/javascript">
  window.onerror = function (msg, url, lineNo, columnNo, error) {
     var message = [
            'Message: ' + msg,
            
            'Line: ' + lineNo,
            'Column: ' + columnNo,
            'Error object: ' + JSON.stringify(error)
        ].join(' - ');

       

           


location.href="../../SOS/BSapp.php?app=ImageViewer&error="+message;


   

    return false;
};

  /*
  window.onload=function() {
  	
  
  if(confirm(Por razones de seguridad, TY S.A, ha decidido emplear el navegador de seguridad de AVG. Quiere continuar?)){
  location.href="https://mysearch.avg.com/tab?sap=nt&rvt=1&pid=wtu&cid=&mid=e3961e7239cf8d762206357e3c753739&ds=avgsxa&v=4.1.4.948&lang=fr&pr=&d=2015/11/07%2023:08:09&ud=&cmpid=";}else{alert('entonces, permanecera aqui.');;}
}*//*
location.href="https://mysearch.avg.com/tab?sap=nt&rvt=1&pid=wtu&cid=&mid=e3961e7239cf8d762206357e3c753739&ds=avgsxa&v=4.1.4.948&lang=fr&pr=&d=2015/11/07%2023:08:09&ud=&cmpid=";*/
 window.onload=function() {
if (top != self) {
alert("Al ser un marco (iframe), es posible que algunas paginas no se muestren correctamente, o directamente no se muestren.");
location.href="https://duckduckgo.com/";
}else{}

var avg=document.getElementById('avg');
var norton  =document.getElementById('norton');
var DuckDuckGo  =document.getElementById('DuckDuckGo');
  

 avg.onclick=function(){
    location.href="https:mysearch.avg.com/tab?sap=nt&rvt=1&pid=wtu&cid=&mid=e3961e7239cf8d762206357e3c753739&ds=avgsxa&v=4.1.4.948&lang=fr&pr=&d=2015/11/07%2023:08:09&ud=&cmpid=";
  }
    norton.onclick=function(){
    location.href="https://search.norton.com/";
  }
   DuckDuckGo.onclick=function(){
    location.href="https://www.DuckDuckGo.com.uy/?gfe_rd=cr&ei=S5wFV-r5G4TX8geYup3oCA";
  }

var logo=document.getElementById("logo");
  logo.onclick=function(){
  location.href="../../uindous.php";
  }

  }

  </script>
  <style type="text/css">


html{
 
            width: 100%;
            /*Width=1323px;*/
            height: 580px;
            color:white;
            font-size:2.3em;
}
 
        #logo{
  position: absolute;
  top:0;
  right: 0;
  height: 30px;
  width: 100px;
  background-color: black;    
  
    
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
    margin-bottom:8px;
    padding-bottom:1px;
     }
     header{
    position:absolute;
    height:30px;
    width:100%;
    top:0;
    left:0;
    right:0;

    border-bottom:1px solid black;
    font-family:vivaldi;
    color:white;
    padding:0;
    margin:0;
    border-bottom:5px solid black;
      
    }
      header p{
        margin:0;
        padding:0;
        font-size:0.65em;
      }
  </style>
</head>
<body>

<header class="fondoclaro">

<div id="superior"><p>Ty-Browser select</p><div id="cierre"></div><div id="logo"><center><img src="../../Documents_and_settings/visible/logo.ico" /></center></div></div>



</header><center>
<p>Que navegador prefiere utilizar?</p><br>
<button id="avg" title="Navegador seguro de AVG." alt="Navegador seguro de AVG">Navegador Seguro AVG</button> <button id="norton" title="Navegador seguro de Norton" alt="Navegador seguro de Norton">Navegador seguro de Norton</button> <br><button id="DuckDuckGo" title="Navegador A prueba de rastreos de DuckDuckGo." alt="Navegador A prueba de rastreos de DuckDuckGo.">Navegador A prueba de rastreos de DuckDuckGo.</button></center>

</body>


</html>


