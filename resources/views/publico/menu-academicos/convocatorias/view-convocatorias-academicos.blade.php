@extends('layouts.publico')

@section('title', 'Convocatorias')

@section('content')

<!----------------------------------------------------------------- convocatorias ---------------------------------------------------------->


<div class="seccion-principal">

	<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Convocatorias.jpg">

            <div class="encabezado">

               <h1>Convocatorias</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>

	<!------------------------------------------------------------- CONVOCATORIAS ----------------------------------------------------------->

	<div class="contenedor-secciones">

		@foreach ($convocatorias as $convocatoria)

		<div class="contenedor-titulo-seccion">

			<h3><i class="icono-izquierda fas fa-file-invoice"></i>{{$convocatoria->convocatoria}}</h3>

		</div>

		<div class="contenedor-seccion-convocatoria">

			<div class="fecha-conv">

				<p>Fecha Incio</p>
				<p class="fecha-inicio-conv">{{$convocatoria->FInicio}}</p>
				
			</div>

			<div class="desc-conv">
				
			</div>
			
		</div>

		

		@endforeach

	</div>

	<div id="paginas">
			{{$convocatorias->links()}}
	</div>

</div>

@endsection
