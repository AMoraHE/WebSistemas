@extends('layouts.administrador')

@section('title', 'Eventos')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<div class="seccion-principal">

	<div class="contenedor-botones">
			
		<a class="msj" mesanje="agregar un nuevo evento?" href="/EventosAcademicos/create"><button class="btn agregar"><span>Agregar</span></button></a>
			
	</div>

<!----------------------------------------------------------------- EVENTOS ---------------------------------------------------------->

	@foreach ($eventos as $evento)

	<div class="contenedor-titulo-seccion">

		<h3>{{$evento->titulo}}</h3>

	</div>

	<!----------------------------------------------------------------- DIVISOR ---------------------------------------------------------->

	<div class="divisor-contenido"></div>

	<!----------------------------------------------------------------- TABLA ---------------------------------------------------------->


	<div class="contenedor-cuerpo-seccion">

		<div class="contenedor-texto-completo">

			<div class="tabla-informacion-escolar">

				<div class="contenedor-formulario-dividido">

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Inicio</label>
			        <input  type="date" id="FInicio" class="form-control" name="FInicio" value="{{$evento->FInicio}}" readonly />

			      </div>

			    </div>

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Cierre</label>
			        <input  type="date" id="FFin" class="form-control" name="FCierre" value="{{$evento->FCierre}}" readonly />

			      </div>

			    </div>

			  </div>

				<div class="contenedor-cuerpo-seccion">
					
					<div class="contenedor-texto-completo">
						
						<p>{{$evento->descripcion}}</p>

					</div>

				</div>


				<div class="contenedor-enlaces">
						
					<a target="_blank" rel="" href="/EventosAcademicos/{{$evento->slug}}">{{$evento->documento}}</a>

				</div>

				@php
				$var = $evento->slug
				@endphp

			</div>
		</div>
	</div>

			<!----------------------------------------------------------------- BOTONES EVENTOS ---------------------------------------------------------->

				<div class="contenedor-botones">
						
					<a href="{{route('descargar-evento', ['slug' => $var])}}"><button class="btn"><span>Descargar</span></button></a>
					<a class="msj" mesanje="editar el evento: {{$evento->titulo}}?" href="/EventosAcademicos/{{$evento->slug}}/edit"><button class="btn editar"><span>Editar</span></button></a>
					<a class="msj" mesanje="eliminar el evento: {{$evento->titulo}}?" href="/EventosAcademicos/eliminar/{{$evento->slug}}"><button class="btn eliminar"><span>Eliminar</span></button></a>

				</div>

				@endforeach
				
</div>

@endsection
