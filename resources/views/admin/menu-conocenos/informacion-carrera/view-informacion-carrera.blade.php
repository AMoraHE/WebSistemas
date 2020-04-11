@extends('layouts.administrador')

@section('title', 'Información Carrera')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

<div class="seccion-principal">

	@foreach($informaciones as $informacion)
	
	<div class="contenedor-titulo-seccion">

		<h3>{{$informacion->categoria}}</h3>

	</div>

<!----------------------------------------------------------------- CUERPO INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

	<div class="contenedor-cuerpo-seccion">

		<div class="contenedor-texto-completo">

			<p>{{$informacion->descripcion}} </p>
						
		</div>

	</div>

<!----------------------------------------------------------------- BOTONES INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

	<div class="contenedor-botones">

		<a class="msj" mesanje="editar información?" href="/informacion/{{$informacion->slug}}/edit"><button class="btn editar"><span>Editar</span></button></a>
			
	</div>

	@endforeach

</div>

@endsection