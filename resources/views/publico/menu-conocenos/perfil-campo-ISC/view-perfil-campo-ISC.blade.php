@extends('layouts.publico')

@section('title', 'Perfil Ingreso')

@section('content')

<div class="seccion-principal">

<!------------------------------------------------------------- IMG PARALLAX ----------------------------------------------------------->

	<div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/images/header/{{$subheader->sImg}}">

            <div class="encabezado">

               <h1>{{$subheader->sTitulo}}</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

    </div>

    <div class="contenedor-secciones">
    	
	<!-------------------------------------------------------------  PERFIL INGRESO ------------------------------------------------------->


		<div class="contenedor-componentes-info-perfiles">

				<div class="contenedor-titulo-perfil">

					<h3>Perfil Ingreso</h3>

					<div class="imagen-perfil-campo">

						<img src="{{ asset('img/ingreso.png')}}">
						
					</div>
					

				</div>

				<div class="contenedor-txt-perfil">

					<ol class="round">

					@foreach ($perfilingreso as $perfilingres)

						<li><i class="viñeta">{{$perfilingres->vineta}}</i> <p>{{$perfilingres->elemento}}</p></li>
					

					@endforeach

					</ol>


				</div>

		</div>	

<!----------------------------------------------------------------- PERFIL EGRESO---------------------------------------------------------->

		<div class="contenedor-componentes-info-perfiles">

				<div class="contenedor-titulo-perfil">

					<h3>Perfil Egreso</h3>

					<div class="imagen-perfil-campo">

						<img src="{{ asset('img/egreso.png')}}">
						
					</div>
					

				</div>

				<div class="contenedor-txt-perfil">

					<ol class="round">

					@foreach ($perfilegreso as $perfilegres)

						<li><i class="viñeta">{{$perfilegres->vineta}}</i> <p>{{$perfilegres->elemento}}</p></li>
					

					@endforeach

					</ol>


				</div>



		</div>

<!----------------------------------------------------------------- CAMPO LABORAL---------------------------------------------------------->

		<div class="contenedor-componentes-info-perfiles">

				<div class="contenedor-titulo-perfil">

					<h3>Campo Laboral</h3>

					<div class="imagen-perfil-campo">

						<img src="{{ asset('img/laboral.png')}}">
						
					</div>
					

				</div>

				<div class="contenedor-txt-perfil">

					<ol class="round">

					@foreach ($campolaboral as $campolabora)

						<li><i class="viñeta">{{$campolabora->vineta}}</i> <p>{{$campolabora->elemento}}</p></li>
					

					@endforeach

					</ol>


				</div>



		</div>





 	</div>
	

</div>

@endsection