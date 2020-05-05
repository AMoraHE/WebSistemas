@extends('layouts.publico')

@section('title', 'Campo Laboral')

@section('content')

<!----------------------------------------------------------------- CAMPO LABORAL ---------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<div class="tlinea"></div>

		<h3>Campo Laboral</h3>

		<div class="tlinea"></div>

	</div>

<!----------------------------------------------------------------- CUERPO CAMPO LABORAL ---------------------------------------------------------->

	<div class="contenedor-componentes-principales">

		<div class="contenedor-texto-completo-acordeon">

			<div class="contenedor-acordeon">

				@foreach ($campolaboral as $campolabora)
				<div class="contenedor-acordeon-subapartado">
					<div class="contenedor-titulo-acordeon">
						<p>Campo laboral {{$campolabora->id}}<i class="icono-derecha fas fa-plus"></i></p>			
					</div>

					<div class="info-acordeon">

								<p>{{$campolabora->vineta}} {{$campolabora->elemento}}</p>
					</div>
				</div>
						
					
						
				@endforeach

		</div>

	</div>

<!----------------------------------------------------------------- BOTONES CAMPO LABORAL ---------------------------------------------------------->

		
</div>
</div>


@endsection