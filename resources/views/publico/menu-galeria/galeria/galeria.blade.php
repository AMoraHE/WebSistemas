@extends('layouts.publico')

@section('title', 'Proyectos')

@section('content')

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	    <!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Noticias.png">

            <div class="encabezado">

            	<h1>Galería</h1>
            	<hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>

<div class="contenedor-secciones">
	
<!----------------------------------------------------------------- GALERÍA ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">
	
			<h3>{{$albums->titulo}}</h3>

		</div>

		<div class="contenedor-cuerpo-seccion">

	<div class="contenedor-seccion-img-grande">

		<a target="_blank" rel="noopener noreferrer" href="/isc-galeria-fotosVerImg/{{$albums->id}}"><img src="/images/galeria/album/{{$albums->imgPrin}}" alt="{{$albums->imgPrin}}"></a>

	</div>

</div>

	<div class="formulario">

		<label>Descripción</label>
		<textarea name="descripcion" readonly>{{$albums->descripcion}}</textarea>

	</div>

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

	<div class="seccion-divisor-seccion"></div>
</div>
</div>

@endsection
