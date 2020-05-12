@extends('layouts.publico')

@section('title', 'Proyectos')

@section('content')

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Convocatorias.jpg">

            <div class="encabezado">

               <h1>Proyectos</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>


	<!------------------------------------------------------------- PROYECTOS ----------------------------------------------------------->


    <div class="contenedor-secciones">

	@foreach ($proyectos as $proyecto)

	<div class="contenedor-titulo-seccion">

			<h3>{{$proyecto->proyecto}}</h3>

	</div>

	<div class="contenedor-seccion-img-grande">

		<img src="/images/proyectos/{{$proyecto->newimage}}">
		<div class="skew-abajo"></div>

	</div>

	<div class="contenedor-seccion-cuerpo-dividido">

		<div class="contenedor-desarrolladores">

			<h3>Desarrolladores</h3>

			@foreach (explode(', ', $proyecto->desarrolladores) as $desarrolladores)
									
				<p><i class="icono-izquierda far fa-user-circle"></i>{{$desarrolladores}}</p>

			@endforeach

		</div>

		<div class="contenedor-descripcion-proyecto">

			<h3>Descripción</h3>

			<p>{{$proyecto->descripcion}}</p>

		</div>

		
	</div>

	<div class="seccion-mini-galeria">

		<h3>Galería de Fotos</h3>

			<ul id="carousel{{$proyecto->id}}" class="elastislide-list">

			@foreach ($imagenes as $imagen)
			@if($imagen->proySlug == $proyecto ->slug)

			<li>

				<div class="contenedor-img-mini-galeria">

		        <!---------------------------------- MODAL IMG -------------------------------------------->

		          <div class="contenedor-img-mini-galeria-img">

		            <a href="#modal-img{{$imagen->id}}">

		            	<img src="/images/proyectos/{{$imagen->imagen}}">

			            <div class="hover-galeria">
		                    <img src="/img/icono1.png" alt="">
		                    <p>Abrir</p>
	                	</div>

                	</a>


		          </div>

		        <!---------------------------------- FIN MODAL IMG -------------------------------------------->

				</div>

			</li>

			@endif
			@endforeach

				<script>
				
					$('#carousel{{$proyecto->id}}').elastislide();
				
				</script>

			</ul>

			@foreach ($imagenes as $imagen)

			    <div class="modal-img" id="modal-img{{$imagen->id}}">

	              <a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
	              <img src="/images/proyectos/{{$imagen->imagen}}" />

	            </div>

	        @endforeach
		
	</div>

	
	<div class="seccion-divisor-seccion"></div>
	@endforeach

	</div>

	<div id="paginas">
			{{$proyectos->links()}}
	</div>

</div>

@endsection
