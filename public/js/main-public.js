
	posicionarMenu();
	 
	$(window).scroll(function() {    
	    posicionarMenu();
	});
	 
	function posicionarMenu() {
	    var altura_del_header = $('.contenedor-header').outerHeight(true);
	    var altura_del_menu = $('.contenedor-menu').outerHeight(true);
	 
	    if ($(window).scrollTop() >= altura_del_header){
	        $('.contenedor-menu').addClass('fixed');
	        $('.contenedor').css('margin-top', (altura_del_menu) + 'px');
	    } else {
	        $('.contenedor-menu').removeClass('fixed');
	        $('.contenedor').css('margin-top', '0');
	    }
	    
	}

	/*$(function(){
	    var navegacion = document.getElementById('contenedor-menu');
	 	var headroom = new Headroom(navegacion);
	 	headroom.init();
	 }); */