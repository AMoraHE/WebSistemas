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
			
		<a onclick="return confirm('¿Agregar un nuevo evento?')" href="/EventosAcademicos/create"><button class="btn"><span>Agregar</span></button></a>
			
	</div>

<!----------------------------------------------------------------- EVENTOS ---------------------------------------------------------->

	@foreach ($eventos as $evento)

	<div class="contenedor-titulo-seccion">

		<h1>Título</h1>
		<h3>{{$evento->titulo}}</h3>

	</div>

	<div class="contenedor-titulo-seccion">

		<h1>Descripción</h1>
		<h3>{{$evento->descripcion}}</h3>

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
		<a onclick="return confirm('¿Editar el evento {{$evento->titulo}}?')" href="/EventosAcademicos/{{$evento->slug}}/edit"><button class="btn"><span>Editar</span></button></a>
		<a onclick="return confirm('¿Eliminar el evento {{$evento->titulo}}?')" href="/EventosAcademicos/eliminar/{{$evento->slug}}"><button class="btn"><span>Eliminar</span></button></a>

	</div>

	@endforeach
				
</div>

@endsection
