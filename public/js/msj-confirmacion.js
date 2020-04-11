		
function alert (url){

	alertify.confirm("Desea Continuar?" + " " + url, function(e){
		
		if(e){
			
			window.location = url; //<!-- Funcion de obtener los enlaces -->
			
		}

	});

}

/*$(".ask").click(function(event){ 

    var loc = $(this).attr('href'); 

    alertify.confirm("Are you sure you want to commit your reservation?", function (e) { 

    if (e) { 

     document.location.href = loc; 

    } 

    }); 

    //prevent link from being followed immediately on click 
    return false; 
}); */

