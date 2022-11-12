<?php
session_start();
if ($_SESSION['acceso']!="1")
{
	header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/paginas/soporte.php&hacia=Soporte");
	exit;
}


?>
<!DOCTYPE html>
<html mfesecureplugin="2.9">
<head>
  <title>Soporte de Uindous</title>
  <style type="text/css">

html, body{
	background-color:#B3E5FC;
  	color:white;
}

 button{
            background-color:white;
            border:2px solid white;
border-radius:10% 10% 10% 10% ;
        }
        button:hover{
            background-color:#81F7F3;
            border:2px solid black;
            border-radius:20% 20% 20% 20% ;
        }
header{padding: 0 0 0 0;
margin:0 0 0 0 ;}
h1, h2 {text-shadow:8px 8px 15px black;}
p {color:black;
text-shadow:5px 5px 10px black;
font-size:1.1em;}
a{color:silver;}
a:hover{color:#b29600;}
p a{color:red;
font-size:1.3em;}
p a:hover{color:#b29600;
font-size:1.35em;}
footer{background:hsla(1,2%,0%,0.65);
bottom: 0;
width: 100%;
position:absolute;
display: none;
}


/*Gatitos*/
#contenido{
position: relative;
height: 100%;
}
#titulo{background-color:blue;
color:silver;
width:100%;
height:300px;
margin:0 0 0 0;
padding:0 0 0 0;
border:5px solid black;
}
#menulateral{
float:left;
padding-top:0px;
padding-left:0px;
background-color:#0288D1;
color:white;
width:200px;
height:630px;
border-right:5px solid black;
border-bottom: 5px solid black;
border-left:5px solid black;
}

#grandeh1{font-size:5.3em;
}
#h1a{color:black;}
#simples:hover{color:green;}
#medio:hover{color:yellow;}
#dificiles:hover{color:red;}
#cerrarchat{color:white;
background-color:red;
float: right;
padding-top:0;
margin-top:0;
font-size:1.05em;
}
#tutor{float:left;
color:#00A2E8;
padding-top:0;
margin-top:0;
text-shadow:none;}



/*Clases*/
.anclaRoja{color:#b29600;
font-size:1.92em;
}
.anclasola{color:silver;}
.titulorrande{
color:#b29600;
}
.muestra{display:block;
width:74px;
height:80px;}
.esconde{display:none;}
.escon{
display: none;
}
.esconhabla{display:none;}
.chatescondido{display:none;}
.chatpanel {
min-height: 450px;
background-color: white;
position: relative;
}
.chatpanel header{
background-color: #00A2E8;
color:black;
padding: 6px 0;
}

.chat-form > div{
padding: 0;
}
.chat-form > div:first-child{
padding-left: 17px;
}
.chatpanel .chat-form{
position: absolute;
bottom: 0px;
}
.chatpanel .chat-form .message{
width: 100%;
}
.chatpanel .chat-form .send{
padding: 0;
font-size: .8em;
}

.chatpanel .chat-messages{
list-style: none;
color: black;
padding-left: 0;
}

.chatpanel .chat-messages .chat-message{
margin: 12px 3px;
padding: 8px;
border-radius: 4px;
border: 1px solid gray;
}
.chat-message1{
display:none;
margin: 12px 3px;
padding: 8px;
border-radius: 4px;
border: 1px solid gray;}
.estudiante{
display:none;

}
.fallaest{color:red;
float:right;
padding-top:2px;
margin-top:2px;
padding-right:1px;
margin-right:1px;
text-shadow:none;}
.esconde{display:none;}
.ayuda{
position:fixed;
float:left;}
.resaltartexto1{
color:red;
border-bottom:2px solid red;
font-size:1.1em;
font-family:Arial black;
text-shadow:none;
}

#derecha{
	float: left;
	padding-top: 0px;
	padding-left: 0px;
	background-color: #09F;
	color: white;
	width: 15%;
	height: 100%;
	
	border: 5px solid black;
	-ms-display: none;
	position: absolute;
	top: 30px;
	bottom: 0;
	left: -1px
}

  </style>

<script type="text/javascript">
	
window.onload=function(){

/*Chat*/
var ayuda = document.getElementById("ayuda");
var ayuda1 = document.getElementById("ayuda1");
var chatpanel = document.getElementById("chatpanel");
ayuda.onclick = function (){
chatpanel.setAttribute("class", "chatpanel chatform chatform > div chatform > div:firstchild chatpanel chatform chatpanel .chatform .message chatpanel .chatform .send chatpanel .chat-messages chatpanel .chatmessages .chatmessage");
ayuda.setAttribute("class", "esconde");
ayuda1.setAttribute("class", "ayuda");
}
var cerrarchat =document.getElementById("cerrarchat");
var chatpanel = document.getElementById("chatpanel");
cerrarchat.onclick = function (){
chatpanel.setAttribute("class", "chatescondido");
ayuda1.setAttribute("class", "esconde");
ayuda.setAttribute("class", "ayuda");
}
var ayuda = document.getElementById("ayuda");
var ayuda1 = document.getElementById("ayuda1");
var chatpanel = document.getElementById("chatpanel");
ayuda1.onclick = function (){
chatpanel.setAttribute("class", "chatescondido");
ayuda1.setAttribute("class", "esconde");
ayuda.setAttribute("class", "ayuda");

}
var send = document.getElementById("send");
var carita =document.getElementById("carita");
var estudiante =document.getElementById("estudiante");
send.onclick=function(){
estudiante.setAttribute("class", "fallaest");
carita.setAttribute("class","chat-message" );
/**/
alert("Error al conectarse con el servidor. Error:542551. Intentelo mas tarde. :/ Lo lamentamos");
chatpanel.setAttribute("class", "chatescondido");
carita.setAttribute("class","chat-message1" );
estudiante.setAttribute("class", "estudiante");
ayuda1.setAttribute("class", "esconde");
ayuda.setAttribute("class", "ayuda");

}



/*aqui, acaba window.onload=function() */
}
</script>

<style>
   #logo{
	position: absolute;
	top:0;
	right: -4px;
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
		background-color:#09F;
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

<header>

<div id="superior">Ty-notepad<div id="cierre"></div><div id="logo"><center><img src="../../Documents_and_settings/visible/logo.ico" /></center></div></div>



</header>
<div id="windows"></div>
<div id="menulateral">
<button id="ayuda">Chat!</button>
<button id="ayuda1" class="esconde">Cerrar Chat.</button>
<div class="chatescondido" id="chatpanel">
<header>TY-Support.<button id="cerrarchat">X</button></header>
<ul class="chat-messages">
<p id="tutor">Mateo</p><br>
<li class="chat-message ">Hola.Mi nombre es Mateo Silveira.<br>
Como puedo ayudarle el dia de hoy?</li>
<p class="estudiante" id="estudiante">Error</p><br>
<li class="chat-message1 " id="carita"><strong>:/</strong><br>
3rr0r&nbsp;(ErroR) <br>
codigo de error:542551. <br>No se ha podido establecer conexion con el servidor.</li>
</ul>
<form class="chat-form row">
<div class="col-md-10">
<textarea class="message" placeholder="Esriba su mensaje" id="cajachat"></textarea>
</div>
<div class="col-md-2">
<button class="send" type="button" id="send">Send</button><button id="cerrarchat">Finalizar el Chat.</button>
</div>
</form>
</div>
</div>
<!--<div id="derecha"><!--
<button id="store">Ayuda conTY-Store.</button>

<div class="chatescondido" id="chatpanelstore">
<header>Soporte tecnico
<button id="cerrarstore">X</button></header>
<ul class="chat-messages">
<p id="tutor">Melisa</p><br>
<li class="chat-message ">Hola.Mi nombre es Melisa Fernandez.<br>
Como puedo storerle?</li>
<p class="clientestore" id="clientestore">Error</p><br>
<li class="chat-message1 " id="caritastore"><strong>:/</strong><br>
3rr0r&(ErroR) <br>
codigo de error:542551. <br>No se ha podido establecer conexion con el servidor.</li>
</ul>
<form class="chat-form row">
<div class="col-md-10">
<textarea class="message" placeholder="Esriba su mensaje" id="cajachat"></textarea>
</div>
<div class="col-md-2">
<button class="sendstore" type="button" id="sendstore">sendstore</button><button id="cerrarstore">Finalizar el Chat.</button>
</div>
</form>
</div>-->








</div>
</body>
</html>