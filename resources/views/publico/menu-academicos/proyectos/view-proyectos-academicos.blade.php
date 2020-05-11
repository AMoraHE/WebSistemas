@extends('layouts.publico')

@section('title', 'Proyectos')

@section('content')

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Convocatorias.jpg">

            <div class="encabezado">

               <h1>Proyectos</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>

    <div class="contenedor-secciones">

	@foreach ($proyectos as $proyecto)

	<div class="contenedor-titulo-seccion">

			<h3><i class="icono-izquierda fas fa-file-invoice"></i>{{$proyecto->proyecto}}</h3>

	</div>

	<div class="contenedor-seccion-img-grande">

		<img src="/images/proyectos/{{$proyecto->newimage}}">
		<div class="skew-abajo"></div>

	</div>

	
	<div class="seccion-divisor-seccion"></div>
	@endforeach

	</div>

	<div id="paginas">
			{{$proyectos->links()}}
	</div>

</div>

@endsection
