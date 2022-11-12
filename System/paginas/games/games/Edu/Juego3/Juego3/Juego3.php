<!doctype html>
<html class="letraobscuro">
<head>
<meta charset="UTF-8">
<link rel="icon" type="image/ico" href="../../../../../../../Documents_and_settings/visible/logo.ico" />
<title>Palabras</title>
<style>

html{
	
	background-color:black;
	cursor: default;
}
body{
	width:100%;
	margin:0 auto;
}
h1{
	text-align:center;
}
h2{
	width:100%;
	text-align:center;
}
.palabra{
	width:100%;
	text-align:center;
}
.area{
	width:100%;
	height:200px;
	text-align:center;

}

</style>
 <script type="text/javascript" src="../../../../../../../System32/jquery/$definicion/js/jquery-1.9.1.min.js" ></script>
 <script type="text/javascript" src="../../../../../../../System32/jquery/$definicion/js/jquery-ui-1.10.1.custom.min.js" ></script>
 <link href="../../../../../../../System32/css/personalizacion.css" rel="stylesheet"/>

<script>
var secciones_array = new Array({a:"Capitales", n:1}, {a:"Ciudades no capitales", n:2}, {a:"Países", n:3}, {a:"provincia/estado/departamento", n:4}, {a:"uniones/acuerdos", n:5});


var dioses_array = new Array({a:"París", n:1}, {a:"Andorra la Vieja", n:1}, {a:"Sofía", n:1}, {a:"Montevideo", n:1}, {a:"Kinsasa", n:1});


var diosas_array = new Array({a:"Barcelona", n:2}, {a:"Tecomán", n:2}, {a:"Gante", n:2}, {a:"Brujas", n:2}, {a:"Kyoto", n:2});


var semi_array = new Array({a:"Botsuana", n:3}, {a:"Kenia", n:3}, {a:"Tayikstán", n:3},{a:"Laos", n:3}, {a:"Myanmar(Birmania)", n:3});


var animales_array = new Array({a:"Washington", n:4}, {a:"Durazno", n:4}, {a:"Texas", n:4}, {a:"Florida", n:4}, {a:"Mons", n:4});


var ciudades_array = new Array({a:"G20", n:5}, {a:"OTAN", n:5}, {a:"ONU", n:5}, {a:"OCDE", n:5}, {a:"LTC", n:5});
//
$(document).ready(inicio);
function inicio(){
	$("#avanza").hide();
$("#avanza").click(AvanzarNivel);

	var sec, r, i;
	var numSecciones = 5;
	//
	$("#reiniciar").hide();
	$("#evaluar").show();
	//
	for(i=0; i<numSecciones; i++){
		sec = i+1;
		r = Math.floor(Math.random()*secciones_array.length);
		$("#tit"+sec).html("<h2>"+secciones_array[r].a+"</h2>");
		$("#a"+sec).attr("data-sec",secciones_array[r].n);
		secciones_array.splice(r,1);
	}
	//
	todo_array = dioses_array.concat(diosas_array, semi_array,animales_array,ciudades_array);
	//
	numPalabras=todo_array.length;
	sec = 0;
	for(i=0; i<numPalabras; i++){
		sec++;
		if(sec>numSecciones) sec = 1
		r = Math.floor(Math.random()*todo_array.length);
		$("#p"+sec).append("<div class='palabra' data-sec='"+todo_array[r].n+"'>"+todo_array[r].a+"</div>");
		todo_array.splice(r,1);	
	}
	//
	$(".palabra").draggable({
		revert:"invalid",
		drag:function(){
			drg = $(this);
		}
	});
	
	$(".area").droppable({
		accept:".palabra",
		tolerance:"pointer",
		drop:function(){
			t = drg.html();
			n = drg.attr("data-sec");
			a = $(this).attr("data-sec");
			if(n==a){
				$(this).append("<div class='palabra' data-res='1'>"+t+"</div>"+"<br>");
			} else {
				$(this).append("<div class='palabra' data-res='0'>"+t+"</div>"+"<br>");
			}
			drg.remove();
		}
	});
	
	$("#evaluar").click(evaluar);
}
function evaluar(){
	var buenas = 0;
	var malas = 0;
	$(".palabra").each(function(i){
		r = $(this).attr("data-res");
		if(r==1){
			$(this).css("background-color", "#01DF01");
			buenas++;
		} else {
			$(this).css("background-color", "red");
			malas++;
		}
		$(this).off();
	});
	alert("Tuviste "+buenas+" palabras acertadas y "+malas+" palabras incorrectas");
	$("#reiniciar").show();
	$("#evaluar").hide();
	$("#reiniciar").click(reiniciar);
}
function reiniciar(){
	location.reload(true);
}
function AvanzarNivel(){
	location.href="../../Victoria.html";
}

function verificaSiPasa(){
	if (score==25) {

$("#avanza").show();
	}
}

</script>
</head>

<body>
<center>
<h1>Arrastra la palabra a la sección correcta</h1>
<table border="1" width="72%">
<tr>
	<td><div id="p1"></div></td>
    <td><div id="p2"></div></td>
    <td><div id="p3"></div></td>
    <td><div id="p4"></div></td>
    <td><div id="p5"></div></td>
<tr>
<tr>
	<td><div id="tit1"></div></td>
    <td><div id="tit2"></div></td>
    <td><div id="tit3"></div></td>
    <td><div id="tit4"></div></td>
    <td><div id="tit5"></div></td>
<tr>
<tr>
	<td><div id="a1" class="area fondoclaro"></div></td>
    <td><div id="a2" class="area fondoclaro"></div></td>
    <td><div id="a3" class="area fondoclaro"></div></td>
    <td><div id="a4" class="area fondoclaro"></div></td>
    <td><div id="a5" class="area fondoclaro"></div></td>
<tr>
</table>
<button id="evaluar" class="button">Evaluar</button>
<button id="reiniciar" class="button">Reiniciar</button>
<input value="Terminar Juego" type="button" id="avanza" class="button" name="verifica">
</center>
</body>
</html>
