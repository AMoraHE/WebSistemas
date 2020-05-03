@extends('layouts.publico')

@section('title', 'Campo Laboral')

@section('content')

<!----------------------------------------------------------------- CAMPO LABORAL ---------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion-select">

		<h3>Campo Laboral</h3>

	</div>

<!----------------------------------------------------------------- CUERPO CAMPO LABORAL ---------------------------------------------------------->

	<div class="contenedor-componentes-principales">

		<div class="contenedor-texto-completo-1">

			<div class="contenedor-1-1">

				@foreach ($campolaboral as $campolabora)
				<div class="contenedor-1-2-subapartado">
					<div class="contenedor-titulo-1-3">
						<p>Campo laboral</p>			
					</div>

					<div class="info-1-4">

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