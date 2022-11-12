<!doctype html>
<html>
<head>
<link href="../System32/css/personalizacion.css" rel="stylesheet"/><link href="../System32/css/imageres.css" rel="stylesheet"/>
<meta charset="UTF-8">
<title>Uindous</title>
<style type="text/css">
img{
   /* box-shadow:10px 10px 10px;*/
    border-radius:10%;

}
#contenedor{
    position: relative; 
    width: 760px; 
    margin: 0px; 
   background-color: transparent;
    margin: 30px auto 20px auto;
}
#contenedorCarrusel { 
    height: 340px; 
    margin: 0px; 
  /*  background: #ccc 0px 0px url(fondos/fondo6.jpg); */
 background-color: transparent;
    border-radius:20px;
   /* box-shadow: 10px 10px 5px #888888;*/
}
#contenedorTexto { 
    background-color: transparent;
    width: 435px;  
    margin: 0px 0px 0px 165px; 
    padding: 0px 0px 0px 20px; 
}
#datos { 
    background-color: transparent;
    display: none; 
}
#carrusel { 
    background-color: transparent;
    margin: 0px auto 0px auto; 
    width: 600px; 
    height: 300px; 
}
#descripcion h2 { 
    
    font-family: Georgia; 
    font-size: 28px; 
    font-weight: normal; 
    margin: 20px 0px 5px 0px;
    text-align:center; 

}
#descripcion p { 
    
    font-family: Arial; 
    font-size: 14px; 
  
    margin: 0px 0px 0px 3px;
    text-align:justify; 
}
html{
	 background-image: url(../Documents_and_settings/fondos/bloqueo/Windows10logo.jpg);
            background-repeat: no-repeat;
           /* background-attachment: fixed;*/
            background-position: center;
            background-size:100% 100% !important;
            height:100%;
}
#menuDeInicio{
    position: absolute;
    top:0;
    right:0;
    left:0;
    bottom:40px;
    background-image: url(../Documents_and_settings/fondos/bloqueo/Windows10logo.jpg);
            background-repeat: no-repeat;
           /* background-attachment: fixed;*/
            background-position: center;
            background-size:100% 100% !important;
            height:100%;

}
</style>
<script src="../System32/jquery/$definicion/js/jquery-1.6.min.js"></script>
<script src="../System32/jquery/$definicion/js/jquery.roundabout.min.js" type="text/javascript" ></script>
<script>
$(document).ready(function(e) {
    $("#datos .item").each(function(){
        $("#carrusel").append($(this).find(".foto").html());
    });
    crearCarrucel();
    despliegaTexto();
});
function crearCarrucel(){
    $('#carrusel').roundabout({
        startingChild: window.startingItem,
        childSelector: 'img',
        tilt: -5,
        minOpacity:.75,
        minScale: .75,
        duration: 1200,
        clickToFocus: true,
        clickToFocusCallback: despliegaTexto
    });
}
function despliegaTexto(){
    var childInFocus =  $('#carrusel').data('roundabout').childInFocus;
    var setCaption = $('#datos .item .texto:eq('+childInFocus+')').html();
    $('#descripcion').html(setCaption);

}
</script>
</head>
<body>
<div id="contenedor" class="">
    <div id="contenedorCarrusel" class="">
        <div id="carrusel"></div>
    </div>
    <div id="contenedorTexto">
        <div id="descripcion" ></div>
    </div>
    <!-- datos -->
    <div id="datos">
   
        <div class="item">
            <div class="foto">
                <img src="../Documents_and_settings/visible/Windows10/Escritorio.ico" alt="Escritorios"  width="100px" height="66px"/>
            </div>
            <div class="texto">
                <h2>Escritorio</h2>
                <p>Regrese al escritorio ocultando el menu de inicio.</p><button onclick="gotoDesktop();">Volver al escritorio</button>
            </div>
        </div>
        
        <div class="item">
            <div class="foto">
                <img class="programa" data-program="../System/Paginas/Notepad.php" title="Notepad"  src="../Documents_and_settings/visible/Windows10/BlockNotas.ico" alt="Block de notas"  width="100px" height="66px"/>
            </div>
            <div class="texto">
                <h2>TY-Notepad</h2>
                <p>Desde anotar la lista de compras, a la posibilidad de hacer una poderosa pagina web que podra visualizar en un navegador incorporado, esta poderosa herramienta le facilita la vida.</p><button class="programa" data-program="../System/Paginas/Notepad.php" title="Notepad">TY-Notepad</button>
            </div>
        </div>
    
        <div class="item">
            <div class="foto">
                <img   src="../Documents_and_settings/visible/Windows10/DOS.ico" alt="TY-DOS" title="Abre la consola de Mandos" width="100px" height="66px"/>
            </div>
            <div class="texto">
                <h2>TY-DOS</h2>
                <p>TY-DOS, es la raiz del sistema.</p><button class="programa" data-program="../System/Paginas/DOS.php"    title="DOS">TY-DOS.</button>
            </div>
        </div>
        
        <div class="item">
            <div class="foto">
                <img   src="../Documents_and_settings/visible/Windows10/Musica.ico" alt="TY-Media player" width="100px" height="66px"/>
            </div>
            <div class="texto">
                <h2>TY-Media Player</h2>
                <p>TY-Media Player, es una aplicacion desarrolada por TY para escuchar musica, de uina forma sencilla y eficaz.</p><button class="programa" data-program="../System/Paginas//mediaplayer/Mediaplay.php"    title="MediaPlayer">TY-Media Player.</button><br>
            </div>
        </div>
        
        <div class="item">
            <div class="foto">
                <img   src="../Documents_and_settings/visible/Store.png" alt="La tienda" width="100px" height="66px"/>
            </div>
            <div class="texto">
                <h2>La tienda</h2>
                <p>Es la forma mas segura y adecuada de verificar que apicaciones pueden ser in,stladas enel sistema operativo.</p><button class="programa" data-program="../System/Paginas/store.php" title="Store"   >TY-Store</button>
  
            </div>
        </div>
        
        <div class="item">
            <div class="foto">
                <img   src="../Documents_and_settings/visible/Windows10/juegos.ico" alt="TY-Games" width="100px" height="66px"/>
            </div>
            <div class="texto">
                <h2>TY-Games</h2>
                <p>TY-Games, es una palicacion que le permite divertirse de forma facil y segura.</p><button class="programa" data-program="../System/Paginas/games/Juegos.php" title="Games"    >TY-Games.</button>
                             
            </div>
        </div>
        
        <div class="item">
            <div class="foto">
                <img   src="../Documents_and_settings/visible/Windows10/Navegador.ico" alt="TY-Browser Select" width="140px" height="66px"/>
            </div>
            <div class="texto">
                <h2>TY-Browser Select</h2>
                <p>TY-Browser Select, es la aplicacion que le perùite seleccionar su navegador segurizado preferido;, o el motor de busqueda de Google.</p><button class="programa" data-program="../System/Paginas/browser.php" title="browser"   >TY-Browser.</button>
                           
            </div>
        </div>
        
        <div class="item">
            <div class="foto">
                <img   src="../Documents_and_settings/visible/Windows10/calculadora.png" alt="TY-Calculator" width="100px" height="66px"/>
            </div>
            <div class="texto">
                <h2>TY-Calculator</h2>
                <p>TY-Calculator, es la calculadora incorporada de Ty. Rapida, facil, intuitiva, y perfectamente funcional.</p><button class="programa" data-program="../System/Paginas/calculadora.php" title="calculadora"   >TY-Calculator.</button>
                            
            </div>
        </div>
        
       
            <!---->
        
        
    
    </div>
</div>
<!--Fin de carrusel-->
</body>
</html>
