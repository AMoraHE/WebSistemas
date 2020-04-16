@extends('layouts.publico')

@section('title', 'Campo Laboral')

@section('content')

<!----------------------------------------------------------------- CAMPO LABORAL ---------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Campo Laboral</h3>

	</div>

<!----------------------------------------------------------------- CUERPO CAMPO LABORAL ---------------------------------------------------------->

	<div class="contenedor-componentes-principales">

		<div class="contenedor-texto-completo">

			<ul>

				@foreach ($campolaboral as $campolabora)
						
				<li>{{$campolabora->vineta}} {{$campolabora->elemento}}</li>
						
				@endforeach
						
			</ul>

		</div>

	</div>

<!----------------------------------------------------------------- BOTONES CAMPO LABORAL ---------------------------------------------------------->

		
</div>


@endsection