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

		<div class="contenedor-texto-completo-acordeon">

			<div class="contenedor-acordeon">

				@foreach ($perfilingreso as $perfilingres)
				<div class="contenedor-acordeon-subapartado">
				<div class="contenedor-titulo-acordeon">
				<p>PERFIL {{$perfilingres->vineta}}</p>
			</div>

				<div class="info-acordeon">

					<p>
					 {{$perfilingres->elemento}}
					</p>
				</div>
				</div>
				@endforeach

			</div>

		</div>

	</div>

<!----------------------------------------------------------------- BOTONES PERFIL INGRESO ---------------------------------------------------------->

		
</div>

@endsection