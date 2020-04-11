@extends('layouts.administrador')

@section('title', 'Programas')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- programas ---------------------------------------------------------->


<div class="seccion-principal">

	<!-----------------Botones--------->

	<div class="contenedor-botones">

		<a class="msj" mesanje="agregar un nuevo programa?" href="/ProgramasAcademicos/create"><button class="btn agregar"><span>Agregar</span></button></a>

	</div>

	@foreach ($programas as $programa)

	<div class="contenedor-titulo-seccion">

		<h3>{{$programa->programa}}</h3>

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
			        <input  type="date" id="FInicio" class="form-control" name="FInicio" value="{{$programa->FInicio}}" readonly />

			      </div>

			    </div>

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Cierre</label>
			        <input  type="date" id="FFin" class="form-control" name="FFin" value="{{$programa->FFin}}" readonly />

			      </div>

			    </div>

			  </div>

			  <div class="contenedor-cuerpo-seccion">

					<div class="contenedor-texto-completo">

						<p>{{$programa->descripcion}}</p>

					</div>

				</div>



			</div>

			<div class="contenedor-enlaces">

				<a target="_blank" rel="noopener noreferrer" href="/ProgramasAcademicos/{{$programa->slug}}">{{$programa->doc}}</a>

			</div>

			@php
			$var = $programa->slug
			@endphp

		</div>

	</div>

<!---------------BOTONES programas------------------------------------->

	<div class="contenedor-botones">

		<a href="{{route('descargar-programa', ['slug' => $var])}}"><button class="btn"><span>Descargar</span></button></a>

		<a class="msj" mesanje="editar este programa?" href="/ProgramasAcademicos/{{$programa->slug}}/edit"><button class="btn editar"><span>Editar</span></button></a>

		<a class="msj" mesanje="eliminar este programa?" href="/ProgramasAcademicos-Eliminar/{{$programa->slug}}"><button type="submit" class="btn eliminar"><span>Eliminar</span></button></a>

	</div>


	@endforeach

</div>

@endsection
