
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

/* ---------------------------------------------------BOTONES BURBUJAS----------------------------------------------- */


var animacionBurbuja = function(e) {

  e.preventDefault;
  //reset animation
  e.target.classList.remove('animacion');
  
  e.target.classList.add('animacion');
  setTimeout(function(){
    e.target.classList.remove('animacion');
  },700);
};

var btnburbuja = document.getElementsByClassName("btn-burbuja-1");

for (var i = 0; i < btnburbuja.length; i++) {
  btnburbuja[i].addEventListener('click', animacionBurbuja, false);
}


/* ---------------------------------------------------RETRASO EN REDIRECCIONAR----------------------------------------------- */

$('#btn-time').click(function(e) {

	e.preventDefault();

	var loc = $(this).attr('href');
	let retraso = null;

	
   retraso = setTimeout(function(){
    	
    	document.location.href = loc; 
    	}, 700); 

});