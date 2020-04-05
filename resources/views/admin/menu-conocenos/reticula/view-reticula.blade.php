@extends('layouts.administrador')

@section('title', 'Reticula')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- RETICULA ---------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-botones">
			
		<a onclick="return confirm('¿Desea registrar una nueva retícula?')" href="{{route('crear-reticula')}}"><button class="btn"><span>Agregar</span></button></a>
			
	</div>

<!----------------------------------------------------------------- CUERPO RETICULA ---------------------------------------------------------->

	@foreach ($reticulas as $reticula)

	<div class="contenedor-titulo-seccion">

		<h3>{{$reticula->titulo}}</h3>

	</div>

	<div class="contenedor-cuerpo-seccion">

		<div class="contenedor-texto-centrado">

			<p>{{$reticula->programa}}</p>
			<p>PLAN: {{$reticula->plan}}</p>
			<p>ESPECIALIDAD: {{$reticula->especialidad}}</p>

		</div>

	</div>

	<div class="contenedor-enlaces">
			
		<a target="_blank" rel="noopener noreferrer" href="/VerReticula/{{$reticula->slug}}">{{$reticula->documento}}</a>

	</div>

	@php
	$var = $reticula->slug
	@endphp

<!----------------------------------------------------------------- BOTONES RETICULA ---------------------------------------------------------->

	<div class="contenedor-botones">
			
		<a href="{{route('descargar', ['slug' => $var])}}"><button class="btn"><span>Descargar</span></button></a>
		<a onclick="return confirm('¿Desea modificar esta retícula?')" href="/VerReticula/{{$reticula->slug}}/edit"><button class="btn"><span>Editar</span></button></a>
		<a onclick="return confirm('¿Desea eliminar esta retícula?')" href="Reticula-Eliminar/{{$reticula->slug}}"><button class="btn"><span>Eliminar</span></button></a>

	</div>

	@endforeach
				
</div>

@endsection