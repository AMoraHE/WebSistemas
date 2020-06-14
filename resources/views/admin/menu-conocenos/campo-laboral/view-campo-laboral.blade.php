@extends('layouts.administrador')

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
						
				<li>{!! $campolabora->elemento !!}</li>
						
				@endforeach
						
			</ul>

		</div>

	</div>

<!----------------------------------------------------------------- BOTONES CAMPO LABORAL ---------------------------------------------------------->

	<div class="contenedor-botones">

		<a class="msj" mesanje="editar la lista de información de campo laboral?" href="{{route('CampoLaboralLista')}}"><button class="btn editar"><span>Editar</span></button></a>

	</div>
		
</div>


@endsection