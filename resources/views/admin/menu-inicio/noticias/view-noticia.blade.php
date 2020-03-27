@extends('layouts.administrador')

@section('title', 'Noticias')

@section('content')

<!----------------------------------------------------------------- BUSCADOR ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-boton-CE">

			<a href="/eliminar-masivo-noticia/"><button class="btn"><span>Eliminación Anual</span></button></a>
			<a href="/noticias-admin/nueva"><button class="btn"><span>Agregar Noticia</span></button></a>

					
		</div>

      	<form class="form-goup"  files = "true" method="GET" action="/buscador-noticias/" enctype="multipart/form-data">
        	@csrf

		<div class="contenedor-buscador-noticia">

			<div class="buscador">

				<form action="/noticias-admin/buscador" method="GET">

					<div class="formulario">
						<input type="search" name="key" placeholder="Noticia">
					</div>

				</form>		    
							   	
				<button type="submit" class="btn-buscar"><span><i class="icono izquierda fas fa-search"></i></span></button>

				
				
			</div>

		</div>

		</form>
			
<!----------------------------------------------------------------- NOTICIA---------------------------------------------------------->

	@foreach ($noticias as $noticia)

		<div class="contenedor-titulo-seccion">

				<h3>{{$noticia->titulo}}</h3>

		</div>

		<div class="contenedor-cuerpo-noticia">

				<div class="contenedor-img-noticia">

					<img src="/img/noticias/{{$noticia->newimage}}">
					
				</div>

				<div class="contenedor-texto">

					<p>{{$noticia->redaccion}}</p>
					
				</div>

		</div>

		<div class="contenedor-botones">


		<a href="noticias-admin/{{$noticia->slug}}"><button type="submit" class="btn"><span>Eliminar</span></button></a>
		<a href="/noticias-admin/{{$noticia->slug}}/editar"><button class="btn"><span>Editar</span></button></a>


		</div>

	@endforeach
		
	</div>

@endsection
