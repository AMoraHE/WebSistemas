@extends('layouts.publico')

@section('title', 'Información Carrera')

@section('content')

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

<div class="seccion-principal">
	<div class="contenedor-titulo-seccion-select">

		<h3>Informacion de la carrera</h3>

	</div>


	<div class="contenedor-componentes-principales">

		<div class="contenedor-texto-completo-1">

			<div class="contenedor-1-1">

	@foreach($informaciones as $informacion)
	
	
<!----------------------------------------------------------------- CUERPO INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

		
				<div class="contenedor-1-2-subapartado">

					<div class="contenedor-titulo-1-3">
						<p>{{$informacion->categoria}}</p>			
					</div>

					<div class="info-1-4">

								<p>{{$informacion->descripcion}}</p>
					</div>
				</div>

	@endforeach

				</div>
		</div>

	</div>
</div>

@endsection