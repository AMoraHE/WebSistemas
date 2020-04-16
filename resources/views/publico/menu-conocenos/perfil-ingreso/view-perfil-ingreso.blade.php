@extends('layouts.publico')

@section('title', 'Perfil Ingreso')

@section('content')

<div class="seccion-principal">

<!----------------------------------------------------------------- PERFIL INGRESO ---------------------------------------------------------->
		
	<div class="contenedor-titulo-seccion">

		<h3>Perfil De Ingreso</h3>

	</div>

<!------------------------------------------------------------- CUERPO PERFIL INGRESO ------------------------------------------------------->

	<div class="contenedor-componentes-principales">

		<div class="contenedor-texto-completo">

			<ul>

				@foreach ($perfilingreso as $perfilingres)

				<li>{{$perfilingres->vineta}} {{$perfilingres->elemento}}</li>

				@endforeach

			</ul>

		</div>

	</div>

<!----------------------------------------------------------------- BOTONES PERFIL INGRESO ---------------------------------------------------------->

		
</div>

@endsection