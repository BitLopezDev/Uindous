<!DOCTYPE html>
<html mfesecureplugin="2.9">
<head>
    <meta charset="UTF-8">
    <title>BitDefender Antivirus.</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            background: black;
            color: white;
            font-family: Arial, sans-serif;
        }
        
        #container {
            width: 500px;
            margin: 50px auto;
        }
        
        article {
            width: 207px;
            display: inline-block;
        }
        
        header, article {
            border: 5px solid white;
            padding: 15px;
        }
        
        h1, h2 { text-align: center; }
    </style>
 
</head>
<body>
    <div id="container">
        <header>
            <h1>BitDefender</h1>
        </header>
        <section>
            <article >
                <button id="analisis">Analisis</button>
               <!-- <p>
                El próximo domingo, los ciudadanos tendrán ocasión de hacer política, de participar en la toma de decisiones públicas, cuando depositen su voto para elegir a 194 diputados de mayoría y tal vez cincuenta de partido. La democracia electoral les permite, de ese modo ejercer  funciones de gobierno.
                </p>-->
              
            </article>
            <article>
            <button id="debilidades">Debilidades del sistema.</button>
                <!--<p>
                El próximo domingo, los ciudadanos tendrán ocasión de hacer política, de participar en la toma de decisiones públicas, cuando depositen su voto para elegir a 194 diputados de mayoría y tal vez cincuenta de partido. La democracia electoral les permite, de ese modo ejercer  funciones de gobierno.
                </p>-->
            </article>
        </section>
    </div>

       <script type="text/javascript">

  var analisis=document.getElementById('analisis');
    var debilidades=document.getElementById('debilidades');
var opts = {
  lines: 9 // The number of lines to draw
, length: 22 // The length of each line
, width: 14 // The line thickness
, radius: 0 // The radius of the inner circle
, scale: 0.75 // Scales overall size of the spinner
, corners: 1 // Corner roundness (0..1)
, color: '#000' // #rgb or #rrggbb or array of colors
, opacity: 0.25 // Opacity of the lines
, rotate: 0 // The rotation offset
, direction: 1 // 1: clockwise, -1: counterclockwise
, speed: 1.1 // Rounds per second
, trail: 100 // Afterglow percentage
, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
, zIndex: 2e9 // The z-index (defaults to 2000000000)
, className: 'spinner' // The CSS class to assign to the spinner
, top: '50%' // Top position relative to parent
, left: '50%' // Left position relative to parent
, shadow: true // Whether to render a shadow
, hwaccel: true // Whether to use hardware acceleration
, position: 'absolute' // Element positioning
}
  
analisis.onclick=function(){
alert('Hola');
 var target = document.getElementById('foo')
var spinner = new Spinner(opts).spin(target);


}
 var target = document.getElementById('foo')
var spinner = new Spinner(opts).spin(target);




    </script>
</body>
</html>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
        window.onload = function() {
            var image = document.getElementById('imagen');
            image.style.display = 'none';
            
            var button = document.getElementById('button');
            button.onclick = function() {
                image.style.display = 'inline';
                setTimeout(function() {
                    image.style.display = 'none';
                }, 2000);
            };
        };
    </script>
</head>
<body>
    <button id="button">Click me!</button>
    <img id="imagen" src="../../Documents_and_settings/visible/rueditaquepiensa.gif">
</body>
</html>-->