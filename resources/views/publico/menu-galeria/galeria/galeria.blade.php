@extends('layouts.publico')

@section('title', 'Proyectos')

@section('content')

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	    <!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      	<div class="contenedor-seccion-img-grande">

            <img src="/images/galeria/album/{{$albums->imgPrin}}">

            <div class="skew-abajo"></div>


      	</div>

      	<div class="contenedor-descripcion">

			<div class="contenedor-descripcion-txt">

				<h3>{{$albums->titulo}}</h3>
				<p>{{$albums->descripcion}}</p>
				
			</div>
		
		</div>

<div class="contenedor-secciones">
	
<!----------------------------------------------------------------- GALERÍA ---------------------------------------------------------->


	<div class="seccion-mini-galeria">

		<h3>Galería de Fotos</h3>

			<ul id="carousel{{$albums->id}}" class="elastislide-list">

			@foreach ($imagenes as $imagen)

			<li>

				<div class="contenedor-img-mini-galeria">

		        <!---------------------------------- MODAL IMG -------------------------------------------->

		          <div class="contenedor-img-mini-galeria-img">

		            <a href="#modal-img{{$imagen->id}}">

		            	<img src="/isc-galeria-fotosGaleriaVerImg/{{$imagen->id}}">

			            <div class="hover-galeria">
		                    <img src="/img/icono1.png" alt="">
		                    <p>Abrir</p>
	                	</div>

                	</a>


		          </div>

		        <!---------------------------------- FIN MODAL IMG -------------------------------------------->

				</div>

			</li>
			@endforeach

				<script>
				
					$('#carousel{{$albums->id}}').elastislide();
				
				</script>

			</ul>

			@foreach ($imagenes as $imagen)

			    <div class="modal-img" id="modal-img{{$imagen->id}}">

	              <a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
	              <img src="/images/galeria/{{$imagen->imagen}}" />

	            </div>

	        @endforeach
		
	</div>
<!----------------------------------------------------------------- GALERÍA 2 ---------------------------------------------------------->



</div>
</div>

@endsection
