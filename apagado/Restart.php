<?php
session_start();



	session_destroy();

if (file_exists("SOS/BS.php")) {




if (file_exists("Systemboot.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}

if (file_exists("Restart.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}



if (file_exists("acceso.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}



if (file_exists("apagando.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}



if (file_exists("arranqueespecial.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}



if (file_exists("bloqueo.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}



if (file_exists("yendoasesion.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);
}




if (file_exists("reiniciando.php")) {

}else{
echo('<script type/text="javascript" language="javascript">window.location="SOS/BS.php?error=404, faltan archivos del sistema."</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);

}

}else{/*echo('<script type/text="javascript" language="javascript">alert("No se encuentra BS.php");</script>');
$archivo =fopen("SOS/Error.txt","w+");
   $linea=fgets($archivo);
   
    fwrite($archivo,"Error 404, faltan archivos del sistema.");
   
fclose($archivo);*/
if (file_exists("../System/SOS/SOSBS.php")) {
echo('<script type/text="javascript" language="javascript">window.location="../System/SOS/SOSBS.php"</script>');
}else if (file_exists("../System32/SOS/SOSBSdos.php")) {
echo('<script type/text="javascript" language="javascript">window.location="../System32/SOS/SOSBSdos.php"</script>');
}else if (file_exists("SOS/BSD.php")) {
echo('<script type/text="javascript" language="javascript">window.location="../System32/SOS/SOSBSdos.php"</script>');
}else{echo('<script type/text="javascript" language="javascript">alert("Faltan archivos del sistema, y no encontramos a donde redireccionar, de modo trataremos de redireccionarle a  about:blank.");location.href="about:blank"; window.location="about:blank"; location.replace="about:blank";</script>');}




}

$archivo =fopen("BootCount/RestartCount.inf","a+");
   $linea=fgets($archivo);
   if($linea=="11"){echo('<script type/text="javascript" language="javascript">window.location="SOS/BSD.php"</script>');}else{
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
    <link rel="icon" type="image/ico" href="../Documents_and_settings/visible/logo.ico" />
<link href="../System32/css/personalizacion.css" rel="stylesheet"/>
    <meta name="viewport" content "width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
    <title>Arranque de Uindous.</title>
<script src="https://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>

 
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




@-webkit-keyframes girandoinicio {
  from { -webkit-transform: rotateY(0deg);    }
  to   { -webkit-transform: rotateY(360deg); }
}
@-moz-keyframes girandoinicio {
  from { -moz-transform: rotateY(0deg);    }
  to   { -moz-transform: rotateY(360deg); }
}

@-webkit-keyframes rotandoinicio {
  from { -webkit-transform: rotateZ(0deg);    }
  to   { -webkit-transform: rotateZ(-360deg); }
}
@-moz-keyframes rotandoinicio {
  from { -moz-transform: rotateZ(0deg);    }
  to   { -moz-transform: rotateZ(-360deg); }
}
#aroUno{
  /*background-color:black;*/
  border:10px solid;
  height:100px;
  width:100px;  
  /*border-radius:10%;*/
  }
  #aroDos{
  background-color:black;
  border:10px solid;
  height:80px;
  width:80px; 
  border-radius:100%;
  
  }

  .seesconde{
  display:none;
  height:0;
  width:0;
  border:none;
  color:transparent;

  font-family:symbol;
  font-size:0;
  
    
  }





@-webkit-keyframes girando {
  from { -webkit-transform: rotateY(0deg);    }
  to   { -webkit-transform: rotateY(-360deg); }
}
@-moz-keyframes girando {
  from { -moz-transform: rotateY(0deg);    }
  to   { -moz-transform: rotateY(-360deg); }
}




@-webkit-keyframes rotando {
  from { -webkit-transform: rotateZ(0deg);    }
  to   { -webkit-transform: rotateZ(360deg); }
}
@-moz-keyframes rotando {
  from { -moz-transform: rotateZ(0deg);    }
  to   { -moz-transform: rotateZ(360deg); }
}


.giracirculo{

-webkit-animation-name: girando;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: 100;
  -webkit-animation-duration: 2s;
  -webkit-transform-style: preserve-3d;
  
  -moz-animation-name: girando;
  -moz-animation-timing-function: linear;
  -moz-animation-iteration-count: 100;
  -moz-animation-duration: 2s;
  -moz-transform-style: preserve-3d;  
}

.giracuadrado{

-webkit-animation-name: rotando;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: 100;
    -webkit-animation-duration: 2s;
    -webkit-transform-style: preserve-3d;
    
    -moz-animation-name: rotando;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: 100;
    -moz-animation-duration: 2s;
    -moz-transform-style: preserve-3d;
}




#ojo{
  position:   absolute;
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
   
location.href="SOS/BS.php?error="+message;
   

  
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
   /* setTimeout(function () {

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
    //*/
     setTimeout(function () {
       logoMicrosoft.setAttribute('class','displaynone');
                    bajologo.setAttribute('class','displaynone');
              
 location.href="yendoasesion.php"
                }, 6000);




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
<!--<table>
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
</table>-->
<div id="ojo" >
<div id="aroUno" class="letraclaro bordeclaro giracuadrado" ><div id="aroDos" class="giracirculo bordeobscuro  letraobscuro"></div></div><br>
<div id="respuesta" >
<h2 id="answer"></h2><br><div id="answerDos"></div><br>

</div>
</div>
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

