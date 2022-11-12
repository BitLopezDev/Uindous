<?php
session_start();
if ($_SESSION['acceso']!="1")
{
  header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/paginas/modernizacion.php&hacia=Modernización");
  exit;
}


?>
<!DOCTYPE html>
<html class="fondoobscuro fondologin">
<head>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<meta charset="UTF-8"/>
 <link rel="icon" type="image/PNG" href="../../Documents_and_settings/visible/Windows10/modernizacion.ico" />
    <link href="../../System32/css/personalizacion.css" rel="stylesheet"/><link href="../../System32/css/imageres.css" rel="stylesheet"/>

    <title>Uindous Update</title>
    <style type="text/css">


.seesconde{
display:none;
    width:0;
    height:0;
    color:transparent;

    font-size:0;

    
    
    
}
.displaynone{
display:none;
    width:0;
    height:0;
    color:transparent;
    background-color:transparent;
    font-size:0;

    
    
    
}

html{
   overflow:hidden !important;
        overflow-y:hidden !important;
            overflow-x:hidden !important;
   
            width: 100%;
            /*Width=1323px;*/
            height: 720px;
color:white;}
    .semuestra{display:block;}
    .seesconde{display:none;}

      
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
   
</style>
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

window.onload=function(){
 //location.href="update.php";
 /*var storeSelectWindow=document.getElementById("storeSelectWindow");
 storeSelectWindow.onclick=function(){
 alert("Click");
  $(".clickSelecciona").removeClass("fondoclaro");
    $(".clickSelecciona").addClass("fondoobscuro");
    $(this).addClass("fondoclaro");
var escribir=$(this).attr("data-escribir");
var mostrar=$(this).attr("data-show");
$(".divMostrar").addClass("seesconde");
$("[id='"+mostar+"']").removeClass("seesconde");

$("#Titulo").text(escribir);
 }
*/




//var clickSelecciona=$("button");
//clickSelecciona.onclick=function(){
  $(".clickSelecciona").click(function(){
//alert("Click");

var escribir=$(this).attr("data-escribir");
var mostrar=$(this).attr("data-show");
  $("#storeSelectWindow").removeClass("fondoclaro");
   $("#updateSelectWindow").removeClass("fondoclaro");
    $("#storeSelectWindow").addClass("fondoobscuro");
   $("#updateSelectWindow").addClass("fondoobscuro");
    $(this).attr("class","fondoclaro");

$(".divMostrar").addClass("seesconde");
$("[id='"+mostrar+"']").removeClass("seesconde");

$("#Titulo").text(escribir);
$("title").text(escribir);
  });
  

//}
    

   }
</script>
</head>
<body >
<div id="divheader">
</div>
<header class="fondoclaro">

<div id="superior">Modernización<div id="cierre"></div><div id="logo"><center><img src="../../Documents_and_settings/visible/logo.ico" /></center></div></div>



</header><br><br>
<div id="contenido">
<div id="header" class="fondoclaro" >
<style type="text/css">
  #header{
      position:absolute;
      top:30px;
      right:0;
      left:0;
      width:100%;
      height:60px;
 background-color:black;
     }
  #headerContenedor{
    position:absolute;
    top:0;
    left:0;
    bottom:0;
    width:300px;
  
border-radius: 0px 50px 50px 0px ;

  }
  #updateSelectWindow{
     position:absolute;
    top:0;
    left:0;
    bottom:0;
    width:150px;
   /* background-color:green;
*/

border-radius: 0px 50px 50px 0px ;
  }
  #storeSelectWindow{
    position:absolute;
    top:0;
    left:120px;
    bottom:0;
    width:150px;
   /* background-color:yellow;*/

    border-right:5px solid black;
border-radius: 0px 50px 50px 0px ;
  }

#Update{
  position:absolute;
  top:90px;
right:0 ;
left:0;
bottom:0;

}


#Store{
  position:absolute;
  top:90px;
 right:0 ;
 left:0;
 bottom:0;

}
#iframe{
  position:absolute;
  top:95px;
 right:0 ;
 left:0;
 bottom:0;
}

  </style>
  <div id="headerContenedor">
    <div id="storeSelectWindow"  data-escribir="TY-Store" data-show="Store" class="clickSelecciona fondoobscuro"><center><!--<img src="../../Documents_and_settings/visible/Store.PNG" height="30px" style="position:absolute; ">--><p>TY-Store</p></center></div>

    <div id="updateSelectWindow"  data-escribir="Uindous Update" data-show="Update" class="clickSelecciona fondoclaro"><center><p>Uindous Update</p></center></div> 
  </div>
<center><!--<img src="../../Documents_and_settings/visible/Store.PNG" height="30px"> --><p id="Titulo">Uindous Update</p><center>

</div>
<div id="contenido">
<center>
  <div id="Update"   class="divMostrar ">
    <iframe width="100%" height="100%" src="update.php" frameborder="0" allowfullscreen></iframe>

  </div>
 <div id="Store"  class="divMostrar seesconde">
      <iframe width="100%" height="100%" src="store.php" frameborder="0" allowfullscreen></iframe>

 </div>
 </center>
</div>
</body>





</html>