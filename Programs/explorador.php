<html>
<head>
<title>Crea tu propia pagina web sin aprender nada</title>
<script type="text/javascript">
function imageninsertar()
{
var linkn = "<a href='" + document.getElementById("wee").innerHTML + "'>"
var filename = prompt("Ingresa la direccion a tu imagen.\n('file://' para un archivo en tu PC,\n'http://' para un archivo en la internet)", "http://")
document.getElementById('editable').innerHTML += linkn + " <img src='" + filename + "' style='border: 0px; position: " + document.getElementById('alineacionimagen').value + ";'>"
var linkn = " "
document.getElementById('wee').innerHTML = " "
}
function linquear()
{
var linki = prompt("Ingresa una direccion web:", "http://")
document.getElementById("wee").innerHTML = linki
}
function creardoc()
{
var titulo = prompt("Pone un titulo a tu documento:", "Mi gran documento")
var contenido = document.getElementById('editable').innerHTML
creado = window.open('', 'miventana')
creado.document.write('<html>');
creado.document.write('<head>');
creado.document.write('<title>' + titulo + '</title>');
creado.document.write('</head>');
creado.document.write('<body>');
creado.document.write(document.getElementById('editable').innerHTML);
creado.document.write('</body>');
creado.document.write('</html>');
alert('Ahora, mira el documento que se abrio (si no se abrio nada, desbloquea las ventanas "popup" de la pagina). Haz clic derecho en una parte sin texto ni imagenes, y selecciona "Guardar Pagina"')
}
</script>
</head>
<body onload="var linkin = ' '">
<b>Negrita: </b><select id="negrita">
<option value="<b>">Si</option>
<option value=" ">No</option>
</select>
<i>Cursiva: </i><select id="cursiva">

<option value="<i>">Si</option>
<option value=" ">No</option>
</select>
<u>Subrayado: </u><select id="subrayado">
<option value="<u>">Si</option>
<option value=" ">No</option>
</select>
Color de texto: <select id="color">
<option value="black">Negro</option>
<option value="green" style="color: green;">Verde</option>

<option value="red" style="color:red">Rojo</option>
<option value="orange" style="color:orange">Naranja</option>
<option value="aqua" style="color:aqua">Cian</option>
<option value="yellow" style="color: yellow;">Amarillo</option>
<option value="blue" style="color: blue;">Azul</option>
<option value="purple" style="color: purple;">Violeta</option>
</select>
<button onclick="if (document.getElementById('wee').innerHTML != ' ') {var linkn = '<a href=\'' + document.getElementById('wee').innerHTML + '\'>'} else {var linkn = ' '};document.getElementById('editable').innerHTML = document.getElementById('editable').innerHTML.substring(0, document.getElementById('editable').innerHTML.length-6) + linkn + '<span style=\'color: '+ document.getElementById('color').value +'; font-family: '+ document.getElementById('fuente').value +'; font-size: '+ document.getElementById('tamano').value +'pt;\'>'+document.getElementById('negrita').value+document.getElementById('cursiva').value+document.getElementById('subrayado').value+' Efecto'; document.getElementById('wee').innerHTML = ' '; linkn=' '">Agregar efectos seleccionados</button>
Posicionamiento de imagen
<select id="alineacionimagen">

<option value="static">Estatico (con el texto)</option>
<option value="absolute">Absoluto (movimiento libre)</option>
</select>
<button onclick="imageninsertar()">Insertar imagen</button>
<button onclick="linquear()">Insertar vinculo</button> <u><span id="wee" style="color: blue;"> </span></u>                                      <button onclick="document.getElementById('editable').innerHTML += '<div align=\'left\'>I'">Alinear a la izquierda</button><button onclick="document.getElementById('editable').innerHTML += '<div align=\'center\'>C'">Alinear al centro</button><button onclick="document.getElementById('editable').innerHTML += '<div align=\'right\'>D'">Alinear a la derecha</button> <button onclick="creardoc()">Crear documento</button>                 Fuente: <input type="text" id="fuente" value="Arial"> Tama�o: <input type="text" id="tamano" value="12">pt

<div style="width: 100%; height: 87%; background: #FFFFDD;" id="editable" contentEditable="true"><div>Escribe algo aqui.</div></div>
</body>
</html>
