	
		window.onload=function(){
			$("#file").addClass("file");
document.oncontextmenu=function(){return false}
				//$("#menu").menu();
				$(".file").attr("id",$(this).attr("data-name"));
			$('*[data-what="file"]').mouseover(function(e) {
$(this).attr("data-seleccionadomenu","si");
				$(this).attr("onmousedown","ClickenLi(event)");
});

			$("html").addClass("fondoobscuro");
			$(".imgfile").dblclick(function(){
var nombreImagen=$(this).attr("data-name");
	
var nombreImg=$(this).attr("data-name");
	 var tyimg = window.open("", "", "width=1200, height=500");
    tyimg.document.write("<script>location.href='"+retroceso+"System/paginas/ImageViewer.php?abrir=../"+laurl+nombreImg+"&direccion=../"+laurl+"';</script>");

 			});
$(".folder").click(function(){
	var dondefolder=$(this).attr("data-location");
	location.href=dondefolder;

});
$(".imgfile").click(function(){
	var nombreImagen=$(this).attr("data-name");
	
$("#infarchivo").html("<img src='"+nombreImagen+"' class='imgfile' height='110px' width='110px' title='"+nombreImagen+"' alt='"+nombreImagen+"'> "+"<span class='SubirH1'><h2><center>"+$(this).attr('data-name')+"</center></h2></span>");
});

/*
$(".webfile").click(function(){
	var nombreWebfile=$(this).attr("data-name");
	 var tyweb = window.open("", "", "width=1200, height=500");
    tyweb.document.write("<script>location.href='"+retroceso+"System/paginas/notepad.php?abrir=../"+laurl+nombreWebfile+"&direccion=../"+laurl+"';</script>");
});*/

$(".textfile").click(function(){
	var nombreTextfile=$(this).attr("data-name");
	 var tynotas = window.open("", "", "width=1200, height=500");
    tynotas.document.write("<script>location.href='"+retroceso+"System/paginas/notepad.php?abrir=../"+laurl+nombreTextfile+"&direccion=../"+laurl+"';</script>");
});
$(".imgEdit").click(function(){
			var where=$(this).attr("data-where");
		var file=$(this).attr("data-file");


	var nombreTextfile=$(this).attr("data-name");
	 var tynotas = window.open("", "", "width=1200, height=500");
tynotas.document.write("<script>location.href='"+retroceso+"explorer/EditIMG/"+where+".php?foto=../"+laurl+file+"&direccion=../"+laurl+"';</script>");



    });




/**/
		}
		//
		//
/*Funciones*/
		//
		//


		function ClickenLi(event){
			//
 x = event.pageX;
      y = event.pageY;
xRe=x+15;
yRe=y+15;
    
			//
			//alert("Hola "+event.button);
			if (event.button=="2") {

		/*var clase = $(".esteEsMenuContx").attr("class");
		alert(clase)*/
		//alert(nombre);

		if($("*[data-seleccionadomenu='si']").attr("id")=="file" ){
		
alert("File "+ $("*[data-seleccionadomenu='si']").attr("data-name"));
			$('#cuadro').css({'display':'block','opacity':0,'z-index':1000000000000}).animate({opacity:1},200);
			//$('#cuadro').html('');
			$("#theadStrongMenuContextual").html("Propiedades del archivo: "+$("*[data-seleccionadomenu='si']").attr("data-name"));
			  $("#cuadro").animate({left:xRe, top:yRe},0);
		}
		
		
	
	/*$('').mouseout(function(e) {
		$('#cuadro').animate({opacity:0},200);
		$('#cuadro').css({'display':'none'});
	});*/
	

			}
		}