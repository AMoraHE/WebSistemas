		
/*function alert (url){

	alertify.confirm("Desea Continuar?" + " " + url, function(e){
		
		if(e){
			
			window.location = url; //<!-- Funcion de obtener los enlaces -->
			
		}

	});

}*/

//FUNCION DE REDIRECCION Y ELIMINACION

$(".msj").click(function(event){ 

    var loc = $(this).attr('href');
    var mensaje = $(this).attr('mesanje'); 

    alertify.confirm("¿Desea " + mensaje, function (e) { 

    if (e) { 

     document.location.href = loc; 

    	} 

    }); 

    //prevent link from being followed immediately on click 
    return false; 
});

//FUNCION DE GUARDADO

$('#save').click(function(e) {

	e.preventDefault();

	var mensaje = $(this).attr('texto');

    alertify.confirm("¿Desea " + mensaje,function(e){

        if(e) {
            $('#formulario').submit();
            return true;
        } else {
            return false;
        }

    });
});

//FUNCION DE CERRAR SESIÓN

$('#logout').click(function(e) {

    e.preventDefault();

    var mensaje = $(this).attr('texto');

    alertify.confirm("¿Desea " + mensaje,function(e){

        if(e) {
            $('#accion').submit();
            return true;
        } else {
            return false;
        }

    });
});