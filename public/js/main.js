$(document).ready(function(){
	$('.menu li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		} else {
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}

	});

	$('.btn-menu').click(function(){
		$('.contenedor-menu .menu').slideToggle();
		/*$('.contenedor-menu .contenedor-usuario').slideToggle(); //Mostrar Perfil de Usuario*/
	});

	$(window).resize(function(){
		if ($(document).width() > 600){
			$('.contenedor-menu .menu').css({'display' : 'block'});
			/*$('.contenedor-menu .contenedor-usuario').css({'display' : 'block'});//Desplegar Perfil de Usuario*/

		}

		if ($(document).width() < 600){
			$('.contenedor-menu .menu').css({'display' : 'block'});
			/*$('.contenedor-menu .contenedor-usuario').css({'display' : 'none'});//Esconder Perfil de Usuario*/
			$('.menu li ul').slideUp();
			$('.menu li').removeClass('activado');
		}
	});

	$('.menu li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});

/**	$('.menu li a').dblclick(function(){
	
		window.location.href = $(this).attr("href");

	});**/

	/*********************************************************Boton Ir Arriba**************************************************************/

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});

	/********************************************Pantalla de Carga*****************************/

	$(window).load(function() {
    	$("#contenedor-loader").fadeOut("slow");
	});

});

