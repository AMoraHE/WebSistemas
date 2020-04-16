@extends('layouts.publico')

@section('title', 'Información Carrera')

@section('content')

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

<div class="seccion-principal">

	@foreach($informaciones as $informacion)
	
	<div class="contenedor-titulo-seccion">

		<h3>{{$informacion->categoria}}</h3>

	</div>

<!----------------------------------------------------------------- CUERPO INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

	<div class="contenedor-componentes-principales">

		<div class="contenedor-texto-completo">

			<p>{{$informacion->descripcion}} </p>
						
		</div>

	</div>

<!----------------------------------------------------------------- BOTONES INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->


	@endforeach

</div>

@endsection