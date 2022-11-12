// JavaScript Document
/*$(document).ready(function(){
	$(".nav_menu > ul").dropmenu({
		effect: "slide",
		speed:250,
		timeout: 0,
		nbsp: false
	});
	
});
*/
/*
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

}*/
/*
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
*/
$(document).ready(function(){
	$(".nav_menu > ul").dropmenu({
		effect: "slide",
		speed:250,
		timeout: 0,
		nbsp: false
	});
	
});