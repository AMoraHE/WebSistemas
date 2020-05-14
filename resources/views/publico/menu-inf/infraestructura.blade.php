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


<!------------------------------------------------------------- PROYECTOS ----------------------------------------------------------->

	<div class="contenedor-secciones">

		@foreach($infras as $infra)
		
		<div class="contenedor-cuerpo-seccion">

			<div class="contenedor-img-grande">

				<h2>{{$infra->nombre}}</h2 >
				<a target="_blank" rel="noopener noreferrer" href="/isc-infraestructura-labVerImg/{{$infra->id}}">			
					<img src="/images/infra/{{$infra->imgInicio}}" alt="{{$infra->imgInicio}}">
				</a>
				
			</div>

		</div>

		@endforeach

	</div>

</div>

@endsection
