<!doctype html>
<html class="letraclaro" style="cursor: none !important;" >
<head>
 <link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/logo.ico" />
 <script src="../../System32/jquery/$definicion/js/jquery-1.9.1.min.js" type="text/javascript" language="javascript"></script>

<link href="../../System32/css/personalizacion.css" rel="stylesheet"/><!--<link href="../System32/css/imageres.css" rel="stylesheet"/>-->
<title>En suspenso</title>
<style>
html{
	background-color:black;	
	cursor:none !important;
	width: 100%
	position:absolute;
	height:100%;
	top:0;
	bottom:0;
	right:0;
	left:0;
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
	-webkit-animation-duration: 6s;
	-webkit-transform-style: preserve-3d;
	
	-moz-animation-name: girando;
	-moz-animation-timing-function: linear;
	-moz-animation-iteration-count: 100;
	-moz-animation-duration: 6s;
	-moz-transform-style: preserve-3d;	
}

.giracuadrado{

-webkit-animation-name: rotando;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: 100;
    -webkit-animation-duration: 6s;
    -webkit-transform-style: preserve-3d;
    
    -moz-animation-name: rotando;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: 100;
    -moz-animation-duration: 6s;
    -moz-transform-style: preserve-3d;
}




#ojo{
	position: 	absolute;
}
</style>
<script>
// El objeto MATH

  window.onerror = function (msg, url, lineNo, columnNo, error) {
  	 var message = [
            'Message: ' + msg,
            'URL: ' + url,
            'Line: ' + lineNo,
            'Column: ' + columnNo,
            'Error object: ' + JSON.stringify(error)
        ].join(' - ');

       
   	var ojo=document.getElementById("ojo");
			ojo.setAttribute("height","200px");
			ojo.setAttribute("width","200px");
			ojo.setAttribute("class","leraclaro");

document.getElementById("ojo").innerHTML= "<h1 style='font-size:8em !important; padding:0 !important; margin:0 !important;'class='letraclaro'><strong>;(</strong></h1><br><h2 id='answer' class='letraclaro'></h2><br><div id='answerDos'></div><br>";

document.getElementById("answer").innerHTML= "Ha existido un error.";
document.getElementById("answerDos").innerHTML= "<p>"+message+"</p>";

			/*
			 $("#ojo").html("<h1 style='font-size:8em !important; padding:0 !important; margin:0 !important;'class='letraclaro'><strong>;(</strong></h1>");
  	$("#caja").html("");
  	$("#answer").text("Ha existido un error.");
  	$("#answerDos").html("<p>"+message+"</p>");*/

   

    return false;
};



var a =0;
var b =Math.random();
window.onload=function(){
setTimeout(function(){
	location.reload(true);
},600000);
document.onclick=function(e){location.href="../tabletOS.php";}
//do{
	//setTimeout(function(){

		// El objeto MATH

//	},5000);
      
      a++;
   //location.reload(true);
//}while(a>5);
mueve();
}


function mueve(){
	var largo = new Array(60, 40, 30, 70, 10, 50);
var alto = new Array(30, 20, 10, 35, 50, 60);
var numero = Math.random();

numero = numero * alto.length;

numero = Math.floor(numero);

var numeroDos = Math.random();

numeroDos = numeroDos * largo.length;

numeroDos = Math.floor(numeroDos);

$("#ojo").fadeIn("fast");
$("#aroUno").removeClass("giracuadrado");
$("#aroDos").removeClass("giracirculo");
$("#aroUno").addClass("giracuadrado");
$("#aroDos").addClass("giracirculo");
$("#ojo").css("top",alto[numero]+"%");
$("#ojo").css("left",largo[numeroDos]+"%");
/*style="position:absolute; top:'+alto[numero]+'; left:'+largo[numero]+';"*/
//$("#answerDos").html("x:"+x+",  y:"+y);
setTimeout(function(){
	$("#ojo").fadeOut("slow");
}, 5300);
setTimeout(function(){
	mueve();
}, 6500);
}

</script>
</head>

<body>

<div id="ojo" >
<div id="aroUno" class="letraclaro " ><div id="aroDos" class="  letraobscuro"></div></div><br>
<div id="respuesta" >
<h2 id="answer"></h2><br><div id="answerDos"></div><br>

</div>
</div>
<!---->
</body>
</html>
