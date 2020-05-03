$(document).ready(function(){
 
	$('.contenedor-titulo-acordeon').on('click',function(){
		$(this).next().slideToggle();
 
		if (estado == true) {
			$(this).text("Abrir");
			$('contenedor-acordeon-subapartado').css({
				"overflow": "auto"
			});
			estado = false;
		} else {
			$(this).text("Cerrar");
			$('contenedor-acordeon-subapartado').css({
				"overflow": "hidden"
			});
			estado = true;
		}
	});
});