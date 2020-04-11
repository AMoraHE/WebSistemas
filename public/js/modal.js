let modal = document.getElementById('modalAlertas');
let flex = document.getElementById('flex');
let abrir = document.getElementById('abrir');
let cerrar = document.getElementById('close');

abrir.addEventListener('click', function(){
	modal.style.display = 'block';
});

cerrar.addEventListener('click', function(){
	modal.style.display = 'none';
});

window.addEventListener('click', function(e){
	if (e.target == flex) {
		modal.style.display = 'none';
	}
});

$('.modal a').click(function(){
	window.location.href = $(this).attr("href");
});