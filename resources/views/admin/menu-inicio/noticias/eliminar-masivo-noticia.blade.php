@extends('layouts.administrador')

@section('title', 'Eliminar Anual Noticia')

@section('content')

	<!----------------------------------------------------------------- SELECT FECHA ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion-select">

				<h3>Eliminación de Noticias</h3>

			<div class="contenedor-select-seccion">

				<div class="formulario">
					
					<input type="month">

				</div>
					
							
			</div>

		</div>


		<!----------------------------------------------------------------- NOTICIA N1 ---------------------------------------------------------->

	@foreach ($noticias as $noticia

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

	@endforeach


	<!------------------------------------------------------------- BOTON ELIMINAR MASIVO ---------------------------------------------------------->

		<div class="contenedor-botones">
			<a><button class="btn"><span>Eliminar</span></button></a>

		</div>

	</div>

@endsection
