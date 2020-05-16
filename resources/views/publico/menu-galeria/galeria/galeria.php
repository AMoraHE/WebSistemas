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

		<div class="contenedor-seccion-titulos-grande">

  			<h1>LABORATORIOS</h1>

  		</div>



		<div class="contenedor-seccion-flex">

		@foreach($infras as $infra)

			<div class="contenedor-cuerpo-seccion-flex">

				<div class="contenedor-cuerpo-flex">

				<div class="contenedor-titulo-seccion-mas t-azul">
					
					<h3>{{$infra->nombre}}</h3>

				</div> 


					<div class="contenedor-seccion-img-lab">

							<img src="/images/infra/{{$infra->imgInicio}}" alt="{{$infra->imgInicio}}">

							<div class="contenedor-txt-efecto">
				                <h2>Responsable</h2>
				                <p>{{$infra->responsable}}</p>
				                @if($infra->slug == "cisco")
				                <button href="/isc-infraestructura-labCisco" class="btn-burbuja-1">Ver</button>
				                @elseif($infra->slug == "sistemas")
				                <button href="/isc-infraestructura-labSistemas" class="btn-burbuja-1">Ver</button>
				                @elseif($infra->slug == "celula")
				                <button href="/isc-infraestructura-labCelula" class="btn-burbuja-1">Ver</button>
				                @elseif($infra->slug == "micro")
				                <button href="/isc-infraestructura-labMicroprocesadores" class="btn-burbuja-1">Ver</button>
				                @endif
				            </div>
						
					</div>

				</div>

			</div>
		
		@endforeach

		</div>


	</div>

</div>

@endsection
