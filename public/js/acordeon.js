$(document).ready(function(){
 
	$('.contenedor-titulo-acordeon').on('click',function(){
		$(this).next().slideToggle();

     icon = $(this).find("i");
     icon.toggleClass("fa-plus fa-minus")

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


