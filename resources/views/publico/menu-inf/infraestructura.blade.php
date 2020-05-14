@extends('layouts.publico')

@section('title', 'Proyectos')

@section('content')

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/academicos.png">

            <div class="encabezado">

               <h1>Infraestructura</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>


<!------------------------------------------------------------- INFRA ----------------------------------------------------------->

	<div class="contenedor-secciones">

		<div class="contenedor-titulo-seccion-mas">

  			<h3>Laboratorios</h3>

  		</div>


		<div class="contenedor-seccion-flex">

		@foreach($infras as $infra)

			<div class="contenedor-cuerpo-seccion-flex">

				<div class="contenedor-cuerpo-flex"> 

					<h2>{{$infra->nombre}}</h2>

					<div class="contenedor-seccion-img-lab">

							<img src="/images/infra/{{$infra->imgInicio}}" alt="{{$infra->imgInicio}}">

							<div class="contenedor-txt-efecto">
				                <h2>Responsable</h2>
				                <p>{{$infra->responsable}}</p>
				                <a id="btn-time" href="/isc-infraestructura-labCisco"><button class="btn-burbuja-1">Ver</button></a>                
				            </div>
						
					</div>

				</div>

			</div>

		
		@endforeach

		</div>


	</div>

</div>

@endsection
