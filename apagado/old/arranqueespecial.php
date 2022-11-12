<!DOCTYPE html>
<html>
<head>
    <title>Arranque Modo Seguro.</title>
    <style type="text/css">
html{background-color:black;
color: white;
font-size:0.9em;

}
html p{font-size:1.4em;}
html p:hover{font-size:1.4em;
color:black;
background-color:white;
width:290px;}

.displaynone{
display:none;
}

.negro{
color:black;
font-size:0.0em;
}
.blanco{
color:white;
font-size:1.4em;
}
.descripciones{

    font-size: 1.5em;
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

   
location.href="SOS/BS.php?error="+message;
   

  
};
  window.onload=function(){
    setTimeout(function () {
                 location.href="safemode/Apagado/Restart.php"
                }, 40000);

    var modoseguroconfuncionesdered=document.getElementById('modoseguroconfuncionesdered');
    var arranquenormal=document.getElementById('arranquenormal');
    var apagar=document.getElementById('apagar');
    var reparar=document.getElementById('reparar');
    var apagarquees=document.getElementById('apagarquees');
    var queessafemodeconred=document.getElementById('queessafemodeconred');
    var arranquenormalquees=document.getElementById('arranquenormalquees');
        var repararquees=document.getElementById('repararquees');
   /*apagar*/ 
   apagar.onmouseover=function(){

apagarquees.setAttribute("class","blanco");
    }
    apagar.onmouseout=function(){

apagarquees.setAttribute("class","negro");
    }
    /**/
 apagar.onclick=function(){

location.href="safemode/Apagado/Sistemboot.php"
    }
    /**/

    /*Modo seguro con funciones de red*/
modoseguroconfuncionesdered.onmouseover=function(){

queessafemodeconred.setAttribute("class","blanco");
    }
    modoseguroconfuncionesdered.onmouseout=function(){

queessafemodeconred.setAttribute("class","negro");
    }
    /**/

modoseguroconfuncionesdered.onclick=function(){

location.href="safemode/Apagado/Restart.php"
    }
/**/
    /*Inicio normal de Uindous*/

     arranquenormal.onmouseover=function(){

arranquenormalquees.setAttribute("class","blanco");
    }
    arranquenormal.onmouseout=function(){

arranquenormalquees.setAttribute("class","negro");
    }
    /**/
arranquenormal.onclick=function(){

location.href="Apagado/Restart.php"
    }
    /**/
    /*Reparar Uindous*/
     reparar.onmouseover=function(){

repararquees.setAttribute("class","blanco");
    }
    reparar.onmouseout=function(){

repararquees.setAttribute("class","negro");
    }
    reparar.onclick=function(){

location.href="instalacion/instalacion.php"
    }

}
   /* var queessafemodeconred=document.getElementById('queessafemodeconred');
    var arranquenormalquees=document.getElementById('arranquenormalquees');*/
    

    /*setTimeout(function () {
                    
                }, 5000);*/
</script>
</head>
<body>
Menu de opciones avanzadas de Uindous.<br>
Seleccione una opcion:<br><br>
<p id="reparar"> Reparar Uindous.</p>
<p id="modoseguroconfuncionesdered"> Modo seguro con funciones de red</p>

<p id="arranquenormal"> Iniciar Uindous Normalmente</p>
<p id="apagar"> Apagar.</p>
<br><br><br>
<div id="queessafemodeconred" class="negro">
Arranca Uindous desde modo seguro, lo cual implica que va a consumir menos recursos y que no estaran disponibles la mayoria de los entretenimientos ofrecidos <br>por TY.
</div>
 <div id="arranquenormalquees" class="negro">Arranca Uindous normalmente.</div>
 <div id="apagarquees" class="negro">Apaga Uindous. Para cuando lo vuelva a prender, la opcion por defecto sera arranque en modo seguro.</div>

 <div id="repararquees" class="negro">Le redirecicona al instalador de Uindous con el fin de reempàlazar loos archivos corruptos.<div>

</body>


</body>
</html>