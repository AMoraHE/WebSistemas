$(document).ready(function(){
 
	$('.contenedor-titulo-acordeon').on('click',function(){
		$(this).next().slideToggle();

     icon = $(this).find("svg");
     icon.toggleClass("fa-caret-down fa-caret-up")
     estado = true;
		if (estado == true) {
			$('contenedor-acordeon-subapartado').css({
				"overflow": "auto"
			});
			estado = false;
		} else {
			$('contenedor-acordeon-subapartado').css({
				"overflow": "hidden"
			});
			estado = true;
		}
	});

});


