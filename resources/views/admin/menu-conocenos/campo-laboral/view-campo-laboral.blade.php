@extends('layouts.administrador')

@section('title', 'Campo Laboral')

@section('content')

<!----------------------------------------------------------------- CAMPO LABORAL ---------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Campo Laboral</h3>

	</div>

<!----------------------------------------------------------------- CUERPO CAMPO LABORAL ---------------------------------------------------------->

	<div class="contenedor-cuerpo-seccion">

		<div class="contenedor-texto-completo">

			<ul>

				@foreach ($campolaboral as $campolabora)
						
				<li>{{$campolabora->elemento}}</li>
						
				@endforeach
						
			</ul>

		</div>

	</div>

<!----------------------------------------------------------------- BOTONES CAMPO LABORAL ---------------------------------------------------------->

	<div class="contenedor-botones">

		<a onclick="return confirm('¿Desea editar la lista del campo laboral?')" href="{{route('CampoLaboralLista')}}"><button class="btn"><span>Editar</span></button></a>

	</div>
		
</div>


@endsection