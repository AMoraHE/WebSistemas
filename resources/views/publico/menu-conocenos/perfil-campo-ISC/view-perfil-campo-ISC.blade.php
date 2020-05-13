@extends('layouts.publico')

@section('title', 'Perfil Ingreso')

@section('content')

<div class="seccion-principal">

<!------------------------------------------------------------- IMG PARALLAX ----------------------------------------------------------->

	<div class="contenedor-img-parallax">

	    <div class="img-parallax">
	     <div class="parallax">
	       <h1>Perfil de la carrera</h1>
	       <hr>
	     </div>       
	    </div>

	    <div class="skew-abajo"></div>

	</div> 
	
<!-------------------------------------------------------------  PERFIL INGRESO ------------------------------------------------------->


<div class="contenedor-perfil-campo">

	<div class="contenedor-componentes-info-carrera-ingreso">

		

		<div class="contenedor-apartado">
			
			<div class="contenedor-titulo-perfil">

				<p>Perfil Ingreso</p>
				<img class="imagen-perfil-campo" src="{{ asset('img/ingreso.png')}}">

			</div>
			<div class="contenedor-perfil">

				<ol class="round">

				@foreach ($perfilingreso as $perfilingres)

					<li><i class="viñeta">{{$perfilingres->vineta}}</i> <p>{{$perfilingres->elemento}}</p></li>
				

				@endforeach

				</ol>


			</div>

		</div>


	</div>


<!----------------------------------------------------------------- PERFIL EGRESO---------------------------------------------------------->

<div class="contenedor-componentes-info-carrera-egreso">

	

		<div class="contenedor-apartado">

			<div class="contenedor-perfil1">
				
				<ol class="round">

				@foreach ($perfilegreso as $perfilegres)
				

					<li><i class="viñeta">{{$perfilegres->vineta}}</i> <p>{{$perfilegres->elemento}}</p></li>
					  
				
				@endforeach

			</ol>

			</div>

			<div class="contenedor-titulo-perfil">

				<p>Perfil Egreso</p>

				<img class="imagen-perfil-campo" src="{{ asset('img/egreso.png')}}">

			</div>		

		</div>
</div>


<!----------------------------------------------------------------- CAMPO LABORAL---------------------------------------------------------->
<div class="contenedor-componentes-info-carrera-egreso">

	

		<div class="contenedor-apartado">

			<div class="contenedor-titulo-perfil">

				<p>Campo Laboral</p>

				<img class="imagen-perfil-campo" src="{{ asset('img/laboral.png')}}">

			</div>	

			<div class="contenedor-perfil">
				
				<ol class="round">

				@foreach ($campolaboral as $campolabora)

						<li><i class="viñeta">{{$campolabora->vineta}}</i> <p>{{$campolabora->elemento}}</p></li>
						
				@endforeach

			</ol>

			</div>

				

		</div>
</div>


</div>

</div>

@endsection