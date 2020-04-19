@extends('layouts.publico')

@section('title', 'Noticias')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- NOTICIAS --------------------------------------------------------------------------->

<div class="seccion-principal">

<!----------------------------------------------------------------- BUSCADOR NOTICIAS ------------------------------------------------------------------->

	<div class="contenedor-buscador">

		<div class="buscador">

        	<form  files = "true" method="GET" action="/isc-inicio-buscadorNoticias" enctype="multipart/form-data">
          		@csrf

          		<div class="formulario">

					<input type="search" name="key" placeholder="Noticia">
					<button type="submit" class="btn-buscar"><span><i class="icono izquierda fas fa-search"></i></span></button>


				</div>

			</form>

		</div>

	</div>

<!----------------------------------------------------------------- NOTICIAS----------------------------------------------------------------------------->

	<div class="contenedor-titulo-seccion">
			<div class="tlinea"></div>

			<h3>Noticias</h3>

			<div class="tlinea"></div>

		</div>

	@foreach ($noticias as $noticia)


	<div class="contenedor-cuerpo-dividido-noticias">

			<h3>{{$noticia->titulo}}</h3>

			<img src="/images/news/{{$noticia->newimage}}">

			<div class="redaccion">

			<p>{{$noticia->redaccion}}</p>

			</div>

		<div class="contenedor-botones-izquierda">

			<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticiasVerInd/{{$noticia->id}}"><button class="btn ver"><span>Leer Más...</span></button></a>
		
		</div>
	

	</div>

<!-------------------------------------------------------------- BOTONES NOTICIAS----------------------------------------------------------------------------->

	@endforeach

	<div id="paginas">
			{{$noticias->links()}}
	</div>

</div>

@endsection
