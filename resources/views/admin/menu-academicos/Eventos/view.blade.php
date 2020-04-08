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
			
		<a onclick="return confirm('¿Agregar un nuevo evento?')" href="/EventosAcademicos/create"><button class="btn agregar"><span>Agregar</span></button></a>
			
	</div>

<!----------------------------------------------------------------- EVENTOS ---------------------------------------------------------->

	@foreach ($eventos as $evento)

	<div class="contenedor-titulo-seccion">

		<h3>{{$evento->titulo}}</h3>

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

<!----------------------------------------------------------------- BOTONES EVENTOS ---------------------------------------------------------->

	<div class="contenedor-botones">
			
		<a href="{{route('descargar', ['slug' => $var])}}"><button class="btn"><span>Descargar</span></button></a>
		<a onclick="return confirm('¿Editar el evento {{$evento->titulo}}?')" href="/EventosAcademicos/{{$evento->slug}}/edit"><button class="btn editar"><span>Editar</span></button></a>
		<a onclick="return confirm('¿Eliminar el evento {{$evento->titulo}}?')" href="/EventosAcademicos/eliminar/{{$evento->slug}}"><button class="btn eliminar"><span>Eliminar</span></button></a>

	</div>

	@endforeach
				
</div>

@endsection
