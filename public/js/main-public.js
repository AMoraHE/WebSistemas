
 const navToggleBtn=document.querySelector(".navbar-nav-toggle");
 const navbarNav=document.querySelector(".navbar-nav");
 const subMenuToggleBtn=document.querySelectorAll(".navbar-nav .sub-menu-toggle");

 navToggleBtn.addEventListener("click",function () {
 	if(navbarNav.classList.contains("open")){
 		navbarNav.classList.remove("open");
 		navbarNav.removeAttribute("style");
 		hideSubMenu();
 	}
 	else{
 	 navbarNav.classList.add("open");
 	 navbarNav.style.maxHeight=	navbarNav.scrollHeight + "px";
 	}

 	navToggleBtn.classList.toggle("close");
 })

 for(let i=0; i<subMenuToggleBtn.length; i++){
    subMenuToggleBtn[i].addEventListener("click",function(){
     if(window.innerWidth < 768){
    	const dropdown=this.parentElement;
    	const height=dropdown.querySelector(".sub-menu").scrollHeight;
    	const subMenu=dropdown.querySelector(".sub-menu");
    	// console.log(height)
    	if(subMenu.classList.contains("open")){
    		// if subMenu classList has class open then
    		subMenu.classList.remove("open");
    		subMenu.removeAttribute("style");
    		navbarNav.style.maxHeight=(navbarNav.scrollHeight - height) + "px";
    	}
       else{
         // if subMenu classList has no class open then
         subMenu.classList.add("open")
         subMenu.style.maxHeight=height + "px";
         navbarNav.style.maxHeight=(navbarNav.scrollHeight + height) + "px";
       }
     }
     
    })
 }

 function hideSubMenu(){
 	for(let i=0; i<subMenuToggleBtn.length; i++){
 		const dropdown=subMenuToggleBtn[i].parentElement;
 		dropdown.querySelector(".sub-menu").removeAttribute("style");
 		dropdown.querySelector(".sub-menu").classList.remove("open");
 }
}
 
 window.addEventListener("resize" , function(){
        navbarNav.classList.remove("open");
 		navbarNav.removeAttribute("style");
 		hideSubMenu();
 		navToggleBtn.classList.remove("close");
 })
 
/*posicionarMenu();
	 
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
	    
	}*/

	/*$(function(){
	    var navegacion = document.getElementById('contenedor-menu');
	 	var headroom = new Headroom(navegacion);
	 	headroom.init();
	 }); */

/*	$(window).resize(function(){
		if ($(document).width() < 800){
			
			$('.contenedor-menu').addClass('fixed');
	        $('.contenedor').css('margin-top', (altura_del_menu) + 'px');

		}

		if ($(document).width() > 800){
			$('.contenedor-menu').removeClass('fixed');
	        $('.contenedor').css('margin-top', '0');
		}
	}); */

/* ---------------------------------------------------BOTONES BURBUJAS----------------------------------------------- */


var animacionBurbuja = function(e) {

	var loc = $(this).attr('href');

  	e.preventDefault;
  //reset animation
  	e.target.classList.remove('animacion');
  
  	e.target.classList.add('animacion');
  	setTimeout(function(){

    	e.target.classList.remove('animacion');
    	document.location.href = loc; 

  	},700);
};

var btnburbuja = document.getElementsByClassName("btn-burbuja-1");

for (var i = 0; i < btnburbuja.length; i++) {
  btnburbuja[i].addEventListener('click', animacionBurbuja, false);
}