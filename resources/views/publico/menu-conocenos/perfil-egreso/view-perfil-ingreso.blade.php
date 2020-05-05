@extends('layouts.publico')

@section('title', 'Perfil Egreso')

@section('content')

<div class="seccion-principal">

<!----------------------------------------------------------------- PERFIL EGRESO ---------------------------------------------------------->

	<div class="contenedor-titulo-seccion">

		<div class="tlinea"></div>

		<h3>Perfil Egreso</h3> 

		<div class="tlinea"></div>

	</div>

<!----------------------------------------------------------------- CUERPO PERFIL EGRESO ---------------------------------------------------------->


	<div class="contenedor-componentes-principales">

		<div class="contenedor-texto-completo-acordeon">

			<div class="contenedor-acordeon">

				@foreach ($perfilegreso as $perfilegres)
				<div class="contenedor-acordeon-subapartado">
				<div class="contenedor-titulo-acordeon">
				<p>PERFIL {{$perfilegres->id}}<i class="icono-derecha fas fa-plus"></i></p>

			</div>

				<div class="info-acordeon">

					<p>
					 {{$perfilegres->vineta}}
					 {{$perfilegres->elemento}}
					</p>
				</div>
				</div>
				@endforeach

			</div>

		</div>

	</div>

<!----------------------------------------------------------------- BOTONES PERFIL EGRESO ---------------------------------------------------------->

	
		
</div>


@endsection