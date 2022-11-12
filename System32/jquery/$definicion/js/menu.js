function termina(){
		$("#abajo, #arriba").hide();
		$("#responsive").fadeOut(1000).fadeIn(1000);
		//
		$('#diseno, #desarrollo, #marqueting, #decoracion, #impresion, #feis, #twitter, #google').hover(function() {
			$(this).css('cursor','pointer');
		}, function() {
			$(this).fadeTo(500,1.0);
		});
		$("#feis").click(function(){
			window.open("https://www.facebook.com/comunidad.lab.1", '_blank');
			return false;	
		});
		$("#twitter").click(function(){
			window.open("https://twitter.com/LabComunidad", '_blank');
			return false;	
		});	
		$("#google").click(function(){
			window.open("https://plus.google.com/u/0/114009847061064376321/posts", '_blank');
			return false;	
		});
		$("#diseno").click(function(){
			window.open("diseno.html", '_self');
			return false;	
		});
		$("#desarrollo").click(function(){
			window.open("desarrollo.html", '_self');
			return false;	
		});
		$("#marqueting").click(function(){
			window.open("marketing.html", '_self');
			return false;	
		});
		$("#decoracion").click(function(){
			window.open("decoracion.html", '_self');
			return false;	
		});
		$("#impresion").click(function(){
			window.open("impresion.html", '_self');
			return false;	
		});
	}