<?php
session_start();
if ($_SESSION['acceso']!="1")
{
  header("Location:../../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/ControlPanel/Inicio/ControlPanel.php&hacia=Panel de control");
  exit;
}


?>
<!DOCTYPE html>
<html class="fondoobscuro">
<head>
	<title>Panel de control</title>
	<meta charset="utf-8">
	<link href="../../../System32/css/personalizacion.css" rel="stylesheet"/>
	<script src="../../../System32/jquery/$definicion/js/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script><script src="../../../System32/jquery/$definicion/js/jquery.dropmenu-1.1.4.js" type="text/javascript" language="javascript"></script>
	<style type="text/css">
	
	html{
/*overflow:hidden !important;*/
        overflow-y:hidden !important;
           /* overflow-x:hidden !important;*/
		cursor: default !important;
		
		
color:white;
	}
	.bodyCon{
	overflow:scroll !important;
        overflow-y:scroll !important;
            overflow-x:scroll !important;
	}
	.bodySin{
	overflow:hidden !important;
        overflow-y:hidden !important;
            overflow-x:hidden !important;
	}
		header{
			position:absolute;
			top:0;
			right:0;
			left:0;
			width:100%;
			height:80px;
			
			color: white;

		}
		footer{
			position:absolute;
			bottom:0;
			right:0;
			left:0;
			width:100%;
			height:40px;
			background-color:black;
		}
		.grandetitulo{
			font-size: 4em;
		}
		.contenedor{
			position:absolute;
	
			height:200px;
			width:400px;
			border:5px solid white;

		}

		.imagen{
			position:absolute;
			left:0;
			height:200px; width:200px;
			
			border-left:5px solid white;
			border-right:5px solid white;
		}
		.contenido{
			height:200px; width: 200px;
			position: absolute;
			right:0;
			top:0;
			bottom:0;
			color:white;
		}
		
		#body{
			position:absolute;
			top:100px;
			bottom: 40px;
			left: 0;
			
			
		}
		.sistemayseguridad{position: absolute;
left:0;
		}
		.usuario{
		position: absolute;
left:450px;	
		}
		.programas{
			position: absolute;
left:450px;	
			top:250px;

		}
		.personalizacion{
			position: absolute;
left:0;	
			top:250px;
		}
		#SolairumIframe{
			background-color: black !important;
			position:absolute;
height: 100%;
			width:400px;
			top:100px;
			right:0;
			bottom: 40px
			;
			
		}
		#barrasup{
			height:26px;
			width:100%;
			background-color: black;
			top:140px;
			right:0;
			left:0;
		}
		#iframePanel{
			position:absolute;
			right:0;
		top:100px;
		bottom: 100px;
			width:100%;
		


		}
	</style>
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
		
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			pruebaFunctionf();
	$(".nav_menu > ul").dropmenu({
		effect: "slide",
		speed:250,
		timeout: 0,
		nbsp: false
	});
/*var Home=document.getElementById("Home");
	Home.onclick=function(){
		home();
	}*/
$("#preguntaAbajo").click(function(){
	/*$("#body").addClass("seesconde");
	$("#ayuda").removeClass("seesconde");

$("#preguntaAbajo").addClass("seesconde");
$("#Home").removeClass("seesconde");*/
var wWindowSize = window.outerWidth;
    var hWindowSize = window.outerHeight;
    var txtWindowSize = "Window size: width=" + wWindowSize + ", height=" + hWindowSize;
alert(" su pantalla es de: "+wWindowSize+"px de ancho y "+hWindowSize+"px de alto.");

});
$("#atras").click(function(){
	$("#body").addClass("seesconde");
	$("#iframePanel").removeClass("seesconde");

$("#atras").addClass("seesconde");
$("#volverCPanel").removeClass("seesconde");
/*var wWindowSize = window.outerWidth;
    var hWindowSize = window.outerHeight;
    var txtWindowSize = "Window size: width=" + wWindowSize + ", height=" + hWindowSize;
alert(" su pantalla es de: "+wWindowSize+"px de ancho y "+hWindowSize+"px de alto.");
*/
});
$("#volverCPanel").click(function(){
	$("#body").removeClass("seesconde");
	$("#iframePanel").addClass("seesconde");

$("#volverCPanel").addClass("seesconde");
$("#atras").removeClass("seesconde");
pruebaFunctionf();
});
//botondepanel
//iframePanel
$(".botondepanel").click(function(){
	$("#cierratodo").removeClass("seesconde");
	var donde=$(this).attr("data-where");
	var imagen=$(this).attr("data-img");
$("#SolairumIframe").addClass("seesconde");
$("#SolariumIco").removeClass("seesconde");
$("#SolariumIcoDos").addClass("seesconde");
$("#body").addClass("seesconde");
	$("#iframePanel").removeClass("seesconde");
$("#iframePanel").attr("src",donde);
$("#atras").attr("src",imagen);
$("#atras").addClass("seesconde");
$("#volverCPanel").removeClass("seesconde");
});	
$("#cierratodo").click(function(){
		$("#cierratodo").addClass("seesconde");
$("#SolairumIframe").addClass("seesconde");
$("#SolariumIco").removeClass("seesconde");
$("#SolariumIcoDos").addClass("seesconde");
$("#body").removeClass("seesconde");
	$("#iframePanel").addClass("seesconde");
$("#iframePanel").attr("src","");
$("#atras").attr("src","");
$("#atras").removeClass("seesconde");
$("#volverCPanel").addClass("seesconde");
$("#atras").addClass("seesconde");
pruebaFunctionf();
});	


$("#SolariumIco").click(function(){
	$("#SolairumIframe").removeClass("seesconde");
$("#SolariumIcoDos").removeClass("seesconde");
$("#SolariumIco").addClass("seesconde");
});	
$("#SolariumIcoDos").click(function(){
	$("#SolairumIframe").addClass("seesconde");
$("#SolariumIco").removeClass("seesconde");
$("#SolariumIcoDos").addClass("seesconde");
});	
});
		function home(){
		//$("#Home").click(function(){
	alert("Hola");
	$("#body").removeClass("seesconde");
	$("#ayuda").addClass("seesconde");
	$("#centrofooter").html('<img src="../../../Documents_and_settings/visible/Windows10/pregunta.ico" id="preguntaAbajo" height="40px" width="40px">');
//});	
		}
	</script>
</head>

<body onresize="pruebaFunctionf()">
<script type="text/javascript">

  function pruebaFunctionf(){
    

  var wWindowSize = window.outerWidth;
    var hWindowSize = window.outerHeight;
    var txtWindowSize = "Window size: width=" + wWindowSize + ", height=" + hWindowSize;
var hIP=hWindowSize-40;
//alert("El alto("+hWindowSize+")-40="+hIP+"!");
$("#iframePanel").height(hIP+"px");
if (hWindowSize<420|| wWindowSize<330) {
$("#contenido").addClass("displaynone");

alert("Su pantalla es demasiado pequeña. Su pantalla tiene que ser de por lo menos 420px de alto, y 330px de ancho. Actualmente, su pantalla es de: "+wWindowSize+"px de ancho y "+hWindowSize+"px de alto.");
/*$("#MientrasCargaBody").html("<center><br><br><h1 style='color:white !important;'>Su pantalla es demasiado pequeña. Su pantalla tiene que ser de por lo menos 420px de alto, y 330px de ancho. Actualmente, su pantalla es de: "+wWindowSize+"px de alto y "+hWindowSize+"px de alto.</h1></center><");*/

 }else if ( wWindowSize>1332 ) {

    $("#SolairumIframe").width("450px");
     $("#SolairumIframe").removeClass("seesconde");
    

//alert(txtWindowSize+"Muy chico");
 }else if ( wWindowSize>1282 && wWindowSize>1332 ) {

    $("#SolairumIframe").width("400px");
     $("#SolairumIframe").removeClass("seesconde");
    

//alert(txtWindowSize+"Muy chico");
 }else if ( wWindowSize<1282 && wWindowSize>1232) {

    $("#SolairumIframe").width("350px");
     $("#SolairumIframe").removeClass("seesconde");
    

//alert(txtWindowSize+"Muy chico");
 }else if (wWindowSize<1282 && wWindowSize>1182) {
    $("#SolairumIframe").width("300px");
 $("#SolairumIframe").removeClass("seesconde");
 

} else if (wWindowSize>1282 && wWindowSize<1332) {
 $("#SolairumIframe").width("400px");
 $("#SolairumIframe").removeClass("seesconde");
 $

//alert(txtWindowSize+"Muy chico");
 }else if (wWindowSize>1332 && wWindowSize<1382) {
 $("#SolairumIframe").width("450px");
 $("#SolairumIframe").removeClass("seesconde");
 

//alert(txtWindowSize+"Muy chico");
 }else if (wWindowSize>1382 && wWindowSize<1382) {
 $("#SolairumIframe").width("500px");
 $("#SolairumIframe").removeClass("seesconde");
 
//alert(txtWindowSize+"Muy chico");
 }else if (wWindowSize<1282 ) {
 $("#SolairumIframe").addClass("seesconde");

//alert(txtWindowSize+"Muy chico");
 }
   //alert(txtWindowSize);
  if (wWindowSize<900 ) {
  	$("#SolairumIframe").width("260px");
 $("#SolairumIframe").addClass("seesconde");
$("#body").width("450px");
$("#body").removeClass("bodySin");
$("#body").addClass("bodyCon");
//alert(txtWindowSize+"Muy chico");
 }else{
 	$("#body").width("900px");
 	$("#body").addClass("bodySin");
$("#body").removeClass("bodyCon");
 }
  }


</script>
<header class="fondoclaro"><center><span class="grandetitulo">Panel de control</span></center>
<div id="barrasup"><img src="../../../Documents_and_settings/visible/Windows10/close.ico" height="25px" width="25px" style="position: absolute; top:75px; right:0;" class="seesconde" id="cierratodo">
<!--<nav class="nav_menu"><ul class="dropmenu">

       
       <li class="menusup"><a href="#">Bancos</a>
            <ul class="menusup">
                <li class="menusup"><a href="https://www.canales.personalizacion.com.uy/eBanking/seguridad/loginFlow.htm?execution=e1s1">Banco República</a></li>
           
                <li class="menusup"><a href="https://www.itau.com.uy/inst/">Banco Itaú</a></li>
                
            </ul>
        </li>  
        <li class="menusup"><a href="#">Noticias</a>
            <ul class="menusup">
                <li class="menusup"><a href="https://actualidad.rt.com/">RT Noticias</a></li>
             <li class="menusup"><a href="http://brecha.com.uy/">Brecha</a></li>
              
                
            </ul>
        </li>

</nav>--></div>
</header>
<div id="body" class="bodySin">
	<div class="contenedor sistemayseguridad">
		<div class="imagen"><img src="../../../Documents_and_settings/visible/Windows10/sistemayseguridad.ico" height="200px" width="200px"></div>
		<div class="contenido"><center><h1>Sistema</h1><h3>Sistema y seguridad</h3><button  class="botondepanel" data-img="../../../Documents_and_settings/visible/Windows10/sistemayseguridad.ico" data-where="../Sistema.php">Abrir Sistema y seguridad</button></center></div>

	</div>
 	<div class="contenedor personalizacion">
		<div class="imagen"><img src="../../../Documents_and_settings/visible/Windows10/personalizacion.ico" height="200px" width="200px"></div>
		<div class="contenido"><center><h1>Personalizar</h1><h3>Apariencia y personalización</h3><button  class="botondepanel" data-img="../../../Documents_and_settings/visible/Windows10/personalizacion.ico" data-where="../personalizar.php">Abrir Personalización</button></center></div>

	</div>
		<div class="contenedor programas">
		<div class="imagen"><img src="../../../Documents_and_settings/visible/Windows10/programas.ico" height="200px" width="200px"></div>
		<div class="contenido"><center><h1>Programas</h1><h3>Programas y características</h3><button  class="botondepanel" data-img="../../../Documents_and_settings/visible/Windows10/programas.ico" data-where="../programas.php">Abrir Programas.</button></center></div>

	</div>
		<div class="contenedor usuario">

		<div class="imagen"><img src="../../../Documents_and_settings/visible/Windows10/Usuario.ico" height="200px" width="200px"></div>
		<div class="contenido"><center><h1>Usuario</h1><h3>Cuenta de usuario</h3><button  class="botondepanel" data-img="../../../Documents_and_settings/visible/Windows10/usuario.ico" data-where="../usuario.php">Abrir Cuenta de usuario</button></center></div>

	</div>
	
</div>
<iframe  src="" id="iframePanel" class="seesconde" frameborder="0" allowfullscreen></iframe>
<!--../../Solarium/Solarium.php-->
<iframe id="SolairumIframe" height="100%" src="../../Solarium/Solarium.php" frameborder="0" allowfullscreen ></iframe>

<footer><center id="centrofooter">
<img class="" src="../../../Documents_and_settings/visible/Windows10/solarium.ico" id="SolariumIco" height="40px" width="40px">
<img class="seesconde" src="../../../Documents_and_settings/visible/Windows10/solarium.ico" id="SolariumIcoDos" height="40px" width="40px">



<img class="seesconde" src="" id="atras" height="40px" width="40px">
<img class="seesconde" src="../../../Documents_and_settings/visible/Windows10/PanelDeControl.ico" id="volverCPanel" height="40px" width="40px">

<img src="../../../Documents_and_settings/visible/Windows10/pregunta.ico" id="preguntaAbajo" height="40px" width="40px" class="seesconde"></center></footer>
</body>
</html>