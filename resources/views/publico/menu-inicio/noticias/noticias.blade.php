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

<div class="contenedor-noticias">
	
	@foreach ($noticias as $noticia)

	<div class="contenedor-seccion-noticias">


		<div class="contenedor-cuerpo-contenido">

			<div class="contenedor-titulo-contenido">
				
				<h3>{{$noticia->titulo}}</h3>

			</div>

			<div class="contenedor-img-contenido">

				<img src="/images/news/{{$noticia->newimage}}">

				<div class="seccion-fecha-noticia">

					<p>{{$noticia->created_at}}</p>

				</div>

			</div>

			<div class="contenedor-cuerpo-txt">

				<p>{{$noticia->redaccion}}</p>

			</div>


			<div class="contenedor-botones">

					<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticiasVerInd/{{$noticia->id}}"><button class="btn"><span>Leer Más...</span></button></a>
				
			</div>
		

		</div>

	</div>

<!-------------------------------------------------------------- Paginacion ----------------------------------------------------------------------------->

	@endforeach

</div>

	<div id="paginas">
			{{$noticias->links()}}
	</div>

</div>

@endsection
