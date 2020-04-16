@extends('layouts.publico')

@section('title', 'Perfil Egreso')

@section('content')

<div class="seccion-principal">

<!----------------------------------------------------------------- PERFIL EGRESO ---------------------------------------------------------->

	<div class="contenedor-titulo-seccion">

		<h3>Perfil Egreso</h3> 

	</div>

<!----------------------------------------------------------------- CUERPO PERFIL EGRESO ---------------------------------------------------------->


	<div class="contenedor-componentes-principales">

		<div class="contenedor-texto-completo">

			<ul>

				@foreach ($perfilegreso as $perfilegres)

				<li>{{$perfilegres->elemento}}</li>

				@endforeach

			</ul>

		</div>

	</div>

<!----------------------------------------------------------------- BOTONES PERFIL EGRESO ---------------------------------------------------------->

	
		
</div>


@endsection