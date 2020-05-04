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


	<div class="contenedor-titulo-seccion">

		<h3>RETICULA</h3>

	</div>

<!----------------------------------------------------------------- CUERPO RETICULA ---------------------------------------------------------->


<div class="contenedor-componentes-principales">

	<div class="contenedor-texto-completo-acordeon">
	<div class="contenedor-acordeon">
	@foreach ($reticulas as $reticula)

	<div class="contenedor-acordeon-subapartado">
				<div class="contenedor-titulo-acordeon">

				<p>{{$reticula->titulo}}<i class="icono-derecha fas fa-plus"></i></p>

				</div>
		<div class="info-acordeon-centrado">

			<p>{{$reticula->programa}}</p>
			<p>PLAN: {{$reticula->plan}}</p>
			<p>ESPECIALIDAD: {{$reticula->especialidad}}</p>	

	<div class="contenedor-enlaces">
			
		<a target="_blank" rel="noopener noreferrer" href="/isc-conocenos-reticulaVer/{{$reticula->slug}}">{{$reticula->documento}}</a>

	</div>


	@php
	$var = $reticula->slug
	@endphp

<!----------------------------------------------------------------- BOTONES RETICULA ---------------------------------------------------------->

	<div class="contenedor-botones">
			
		<a href="/isc-conocenos-reticulaDescargar/{{$reticula->slug}}"><button class="btn"><span>Descargar</span></button></a>

	</div>
	</div>
</div>	

	@endforeach
</div>	

</div>
	<div id="paginas">
			{{$reticulas->links()}}
	</div>
</div>
				
</div>

@endsection