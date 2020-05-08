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

	<div class="contenedor-componentes-info-carrera">

		<div class="contenedor-apartado">

			<div class="contenedor-perfil">

				@foreach ($perfilingreso as $perfilingres)
				<div class="contenedor-acordeon-subapartado">
				<div class="contenedor-titulo-acordeon">
				<p>PERFIL {{$perfilingres->id}}</p>

			</div>

				<div class="info-acordeon">
					<p>{{$perfilingres->vineta}}
					 {{$perfilingres->elemento}}
					</p>
				</div>
				</div>
				@endforeach

			</div>

		</div>

	</div>




@endsection


@section('content-perfilegres')
<!----------------------------------------------------------------- PERFIL EGRESO---------------------------------------------------------->

<div class="contenedor-componentes-info-carrera">

		<div class="contenedor-apartado">

			<div class="contenedor-perfil">

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

@endsection

@section('content-campo')
<!----------------------------------------------------------------- CAMPO LABORAL---------------------------------------------------------->

<div class="contenedor-componentes-info-carrera">

		<div class="contenedor-apartado">

			<div class="contenedor-perfil">

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

</div>

@endsection

</div>
