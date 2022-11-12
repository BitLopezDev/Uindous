<?php
session_start();



	session_destroy();


$archivo =fopen("BootCount/RestartCount.inf","a+");
   $linea=fgets($archivo);
   if($linea=="11"){echo('<script type/text="javascript" language="javascript">window.location="../SOS/BSD.php"</script>');}else{
    fwrite($archivo,"1");
   }
fclose($archivo);
/*	$file =fopen("bloqueo.php","w");
	fwrite($file,'
<html>
<head>
<script>
window.onload=function(){
location.href="Restart.php";
}
</script>
</head>
<body>
</body>
</html>
');
fclose($file);
	*/
?>
<!DOCTYPE html>
<html >
<head>
    <link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/logo.ico" />

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <meta name="viewport" content "width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
    <title>Arranque de Uindous.</title>

 
      <style type="text/css">
 html{
  background-color: black;
  color: white;
  /*cursor:none;*/
 }
 .altocaja{
  height:50px;
  width:50px;
 }
 #iniciandouindous p{font-size: 3em;}
 #bienvenido{font-size: 3em;}

 .displaynone{display: none;}
 .semuestra{display:inline;}

 
  

#reinicio{
  height:598px;
  width:100%;
  background-color:black;
  color:white;

}
.body1{cursor: default;}
.body2{cursor: none;}
.rojo{
  height:50px;
  width:50px;
  /*background-color:#FE2E2E;
  border:5px solid #FE2E2E;*/
   background-color:#F00;
  border:5px solid #F00;
}
.verde{
   height:50px;
  width:50px;
 /* background-color:#40FF00;
  border:5px solid #40FF00;*/
   background-color:#0CF;
  border:5px solid #0CF;
}
.azul{
   height:50px;
  width:50px;
  /*background-color:#0080FF;
  border:5px solid #0080FF;*/
  background-color:#0CF;
  border:5px solid #0CF;

}
.amarelo{
   height:50px;
  width:50px;
 /* background-color:#F7FE2E;
  border:5px solid #F7FE2E;*/
  background-color:#F00;
  border:5px solid #F00;

}
table{
 
     color: white;
     background-color: white;
     border:3px solid black;
}

.1color{
  height:60px;
  width:60px;
}
/*
#contedor{
    width: 200px;
    height: 200px;
  }
  #fila1{
    width: 200px;
  }
  #fila2{
    width: 200px;
  }
  #derecha{
    float: right;
    background: yellow;
  }
  #izquierda{
    float: left;
    background: blue;
  }*/
  td{
    background-color: white;
    border:5px solid white;
       color: white;
  }
  tbody{
    background-color: white;
   /* border:5px solid white;*/
       color: white;
       border:3px solid black;
  }
  tr{background-color:white;
   /* border:5px solid white;*/
    color: white;
  border:3px solid black;}
  #bajologo{
    font-size:1.3em;
  }
  .iniciouindous{
    display: block;
  }
  .logoMicrosoft{
    height:106px;
    width:136px;
  }
  .seesconde{display: none;}
  .anulararranque2{
    background-color:white;
            border:1px solid white;
border-radius:10% 10% 10% 10% ;

    
  }
  .anulararranque2:hover{

    background-color:#81F7F3;
            border:3px solid white;
            border-radius:20% 20% 20% 20% ;
  }

  .anulararranque1{
    background-color:grey !important;
            border:1px solid white !important;
border-radius:0% 0% 0% 0%  !important;

    
  }
  .anulararranque1:hover{

    background-color:grey !important;
            border:1px solid white !important;
            border-radius:0% 0% 0% 0%  !important;
  }
  </style>
  <script type="text/javascript">
window.onerror = function (msg, url, lineNo, columnNo, error) {
   var message = [
            'Message: ' + msg,
            'URL: ' + url,
            'Line: ' + lineNo,
            'Column: ' + columnNo,
            'Error object: ' + JSON.stringify(error)
        ].join(' - ');
alert(message);
   
location.href="../SOS/BS.php?error="+message;
   

  
};
window.onload=function(){
  var verErroresPHP =document.getElementById("verErroresPHP");
 
  if(verErroresPHP.value !=""){
    location.href="SOS/BS.php?error='"+verErroresPHP.verErroresPHP.value+"'";
  }
  $("body").addClass("body1");
 var logoMicrosoft =document.getElementById('logoMicrosoft');
var prendido =document.getElementById('prendido');
var iniciandouindous =document.getElementById('iniciandouindous');
  var prender =document.getElementById('prender');
 var botonesprender =document.getElementById('botonesprender');

 var anular =document.getElementById('anular');

//var seguro =document.getElementById('seguro');
 var verde =document.getElementById('verde');
  var rojo =document.getElementById('rojo');
   var amarelo =document.getElementById('amarelo');
    var azul =document.getElementById('azul');
       //var opciones =document.getElementById('opciones');
   
$("body").addClass("body2");
     /*alert('Hola.');*/
     //seguro.setAttribute('class','displaynone');
     //opciones.setAttribute('class','displaynone');
     
     prender.setAttribute('class','displaynone');
    iniciandouindous.setAttribute('class','semuestra');
    bienvenido.setAttribute('class','displaynone');
/**/
    setTimeout(function () {
     
       iniciandouindous.setAttribute('class','displaynone');
    
       logoMicrosoft.setAttribute('class','logoMicrosoft');

                
                }, 500);
//
    setTimeout(function () {

                    rojo.setAttribute('class','rojo');
                }, 2000);
    //
       setTimeout(function () {
        
                    verde.setAttribute('class','verde');
                }, 3000);
    //
       setTimeout(function () {
                    azul.setAttribute('class','azul');
                }, 4000);
    //
       setTimeout(function () {
                    amarelo.setAttribute('class','amarelo');
      
                }, 5000);
    //
       setTimeout(function () {
                    bajologo.setAttribute('class','semuestra');
                }, 6000);
    //
     setTimeout(function () {
       logoMicrosoft.setAttribute('class','displaynone');
                    bajologo.setAttribute('class','displaynone');
              
 location.href="llendoasesion.php"
                }, 8500);




    //
     /* setTimeout(function () {*/
       /*logoMicrosoft.setAttribute('class','displaynone');
                    bajologo.setAttribute('class','displaynone');
                     bienvenido.setAttribute('class','displaynone');
                     prendido.setAttribute('class','semuestra');
                     reinicio.setAttribute('class','displaynone');*/
                    /* location.href="bloqueo.php"



                }, 13000);*/
    //



/* setTimeout(function () {
                   
                }, 5000);*/
               

/*
anulararranque.onclick=function(){
todo.setAttribute('class','seesconde');
anular.setAttribute('class','semuestra');
setTimeout(function () {
                   alert('El arranque ha sido anulado correctamente.')
                   
location.href="Sistemboot.php";
                }, 3000)



}*/
/*
seguro.onclick=function(){
location.href="../safemode/Apagado/Sistemboot.php";
}

opciones.onclick=function(){
location.href="../arranqueespecial.php";
}*/
}

  /*logoty.setAttribute('class','displaynone');*/



  /* setTimeout(function () {
                    
                }, 5000);
                setTimeout(function () {
                    alert("b");
                }, 10000);
                setTimeout(function () {
                    alert("c");
                }, 15000);*/

  </script>

</head>
<body>

<div id="reinicio">
  
  <center>
<div id="iniciandouindous"class="displaynone">
<br><br><br><br><br><br><br><br><br><br><br><br>
<p >Iniciando Uindous.<br>
</p>Por favor espere...
</div>

      


<div id="logoMicrosoft" class="seesconde">
<br><br><br><br><br><br><br><br><br><br><br><br>
<table>
  <tbody>
    <tr>
    <td id="rojo" class="1color"></td>
<td id="verde" class="1color"></td>
</tr>
<tr>
<td id="azul" class="1color">
</td>

<td id="amarelo" class="1color"></td>
</tr>

  </tbody>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br>
  </div>

      
  
<div id="bajologo" class="displaynone">
<br><br><br><br><br><br><br><br><br><br><br>
TY-Uindous 1.1<br>
Power by TY.<br>
Uindous 1.1 Professional.
  


</div>

<div  id="bienvenido" class="displaynone">
<br><br><br><br>
<p>Bienvenido a Uindous.</p>
</div>
</strong>
</center>



<!--<button id="prender">Iniciar</button>-->
<button id="prendiendo" class="seesconde">Apagar.</button>
<center><br>
                    <img src="../Documents_and_settings/visible/prender.png" id="prender" alt="Prender Uindous" title="Prender Uindous." />
                </center>
                <!--<button id="seguro" title="Haga click para arrancar en modo seguro">Arranque normal.</button><br>
                <button id="opciones" title="Haga click para ver las opciones de arranque.">Opciones avanzadas.</button>-->
</div>
<!--
<div id="anularprender">
  
<center>

  <button id="anulararranque" title="Anula el arranque de Uindous." class="displaynone">
    
    Anular Arranque.
  </button><br>
 
  </center>
</div>
-->

<!---->


</div>
<div id="anular" class="seesconde">
  <center>
    <br><br><br><br><br><br>
    <strong>
    <p id="anulando">Anulando Arranque...</p></strong><br>
    Por favor espere.

  </center>


</div>
<div class="seesconde">
  <textarea id="verErroresPHP" class="seesconde"><?php
error_reporting(-1);
  ?></textarea>
</div>
</body>
</html>

