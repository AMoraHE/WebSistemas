@extends('layouts.publico')

@section('title', 'Reticula')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- RETICULA ---------------------------------------------------------->

<div class="seccion-principal">


<!----------------------------------------------------------------- CUERPO RETICULA ---------------------------------------------------------->

	@foreach ($reticulas as $reticula)

	<div class="contenedor-titulo-seccion">

		<h3>{{$reticula->titulo}}</h3>

	</div>

	<div class="contenedor-componentes-principales">

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

	</div>

	@endforeach

	<div id="paginas">
			{{$reticulas->links()}}
	</div>
				
</div>

@endsection