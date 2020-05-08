@extends('layouts.publico')

@section('title', 'Perfil Ingreso')

@section('content')

<div class="seccion-principal">

<!------------------------------------------------------------- IMG PARALLAX ----------------------------------------------------------->

	<div class="contenedor-img-parallax">

	    <div class="img-parallax">
	     <div class="parallax">
	       <h1>Información de la carrera</h1>
	       <hr>
	     </div>       
	    </div>

	    <div class="skew-abajo"></div>

	</div> 
	
<!-------------------------------------------------------------  PERFIL INGRESO ------------------------------------------------------->
	@php
	$var = 0;
	$var2 = 0;
	$var3 = 0;
	@endphp

	<div class="contenedor-componentes-info-carrera">

		<strong>PERFIL DE INGRESO</strong>

		<div class="contenedor-apartado">

			<div class="contenedor-perfil">

				@foreach ($perfilingreso as $perfilingres)
				<div class="contenedor-acordeon-subapartado">
				<div class="contenedor-titulo-acordeon">
					@php
					$var = $var + 1;
					@endphp

				<p>PERFIL {{$var}}</p>

			</div>

				<div class="info-acordeon">
					<p>{{$perfilingres->vineta}} {{$perfilingres->elemento}}</p>
				</div>
				</div>
				@endforeach

			</div>

		</div>

	</div>


<!----------------------------------------------------------------- PERFIL EGRESO---------------------------------------------------------->

<div class="contenedor-componentes-info-carrera">

	<strong>PERFIL DE EGRESO</strong>

		<div class="contenedor-apartado">

			<div class="contenedor-perfil">

				@foreach ($perfilegreso as $perfilegres)
				<div class="contenedor-acordeon-subapartado">
				<div class="contenedor-titulo-acordeon">

					@php
					$var2 = $var2 + 1;
					@endphp

				<p>PERFIL {{$var2}}</i></p>

			</div>

				<div class="info-acordeon">

					<p>
					 {{$perfilegres->vineta}} {{$perfilegres->elemento}}</p>
				</div>
				</div>
				@endforeach



			</div>

		</div>

</div>


<!----------------------------------------------------------------- CAMPO LABORAL---------------------------------------------------------->

<div class="contenedor-componentes-info-carrera">

	<strong>CAMPO LABORAL</strong>

		<div class="contenedor-apartado">

			<div class="contenedor-perfil">

				@foreach ($campolaboral as $campolabora)
				<div class="contenedor-acordeon-subapartado">
					<div class="contenedor-titulo-acordeon">

						@php
						$var3 = $var3 + 1;
						@endphp

						<p>Campo laboral {{$var3}}</p>			
					</div>

					<div class="info-acordeon">

								<p>{{$campolabora->vineta}} {{$campolabora->elemento}}</p>
					</div>
				</div>
						
				@endforeach


			</div>

		</div>

</div>

@endsection