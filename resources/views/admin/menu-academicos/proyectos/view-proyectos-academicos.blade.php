@extends('layouts.administrador')

@section('title', 'Proyectos')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	<div class="titulos-secciones-principales">

    	<h1>PROYECTOS</h1>
    
  	</div>

	<!-----------------Botones--------->

	<div class="contenedor-botones">

		<a class="msj" mesanje="agregar un nuevo proyecto?" href="/ProyectosAcademicos/create"><button class="btn agregar"><span>Agregar</span></button></a>

	</div>

	@foreach ($proyectos as $proyecto)

	<div class="contenedor-titulo-seccion">

		<h3>{{$proyecto->proyecto}}</h3>

	</div>

	<div class="contenedor-img-grande">

		<img src="/images/proyectos/{{$proyecto->newimage}}">

	</div>

	<!----------------------------------------------------------------- DIVISOR ---------------------------------------------------------->

	<div class="divisor-contenido"></div>

	<!----------------------------------------------------------------- TABLA ---------------------------------------------------------->


			<div class="tabla-informacion-escolar">

				<table>

					<thead>
						<tr>
							<th>Desarrolladores</th>
							<th>Descripción</th><!--Comentar-->
						</tr>
					</thead>

						<tr>
							<td>

							<ol>
								@foreach (explode(',', $proyecto->desarrolladores) as $desarrolladores)

								@php
								$desarrollador = ltrim($desarrolladores);
								@endphp

								<li>{{$desarrollador}}</li>
								@endforeach
							</ul>

							</td>

							<td>{{$proyecto->descripcion}}</td><!--Comentar-->
							<!----<td>{{$proyecto->resultados}}</td>---->
						</tr>

<!--					<thead>
						<tr>
							<th colspan="4">Descripción</th>
						</tr>
					</thead>

						<tr>
							<td colspan="4">{{$proyecto->descripcion}}</td>
						</tr>	-->

				</table>

			</div>


<!----------------------------------------------------------------- GALERÍA ---------------------------------------------------------->
	<div class="formulario">

		<label>Mini Galería: </label>

	</div>

	<div class="seccion-mini-galeria">

		<ul id="carousel{{$proyecto->id}}" class="elastislide-list">

		@foreach ($imagenes as $imagen)
		@if($imagen->proySlug == $proyecto ->slug)

		<li>

			<div class="contenedor-img-mini-galeria">

	        <!---------------------------------- MODAL IMG -------------------------------------------->

	          <div class="contenedor-img-mini-galeria-img">

	            <a href="#modal-img{{$imagen->id}}"><img src="/images/proyectos/{{$imagen->imagen}}"></a>

	            <div class="contenedor-img-mini-galeria-button">

	            	<a class="msj" mesanje="eliminar esta imagen?" href="/ProyectosAcademicosGaleria-Delete/{{$imagen->id}}"><button class="btn eliminar centrado"><span>Eliminar</span></button></a>

	            </div>

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

<!---------------BOTONES PROYECTOS------------------------------------->

	<div class="contenedor-botones">

	    	<a class="msj" mesanje="eliminar el proyecto: {{$proyecto->proyecto}}? ?" href="/ProyectosAcademicos-Eliminar/{{$proyecto->slug}}"><button type="submit" class="btn eliminar"><span>Eliminar</span></button></a>

		  	<a class="msj" mesanje="editar el proyecto: {{$proyecto->proyecto}}?" href="/ProyectosAcademicos/{{$proyecto->slug}}/edit">	<button class="btn editar"><span>Editar</span></button></a>

		 	<a class="msj" mesanje="agregar imágenes?" href="/ProyectosAcademicos/agregar/{{$proyecto->slug}}"><button class="btn agregar"><span>Agregar Imágenes</span></button></a>


	</div>


	@endforeach

	<div id="paginas">
			{{$proyectos->links()}}
	</div>

</div>

@endsection
