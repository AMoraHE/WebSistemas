@extends('layouts.publico')

@section('title', 'Eventos')

@section('content')

<div class="seccion-principal">

	<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->


 	<div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Eventos.jpg">

            <div class="encabezado">

               <h1>Eventos</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

    </div>

	

<!----------------------------------------------------------------- EVENTOS ---------------------------------------------------------->

	<div class="contenedor-secciones">

		@foreach ($eventos as $evento)

		<div class="contenedor-titulo-seccion">

			<h3><i class="icono-izquierda fas fa-file-invoice"></i>{{$evento->titulo}}</h3>

		</div>

		<div class="contenedor-seccion-convocatoria">

			<div class="contenedor-fecha-ecp">

				<h3><i class=" icono-izquierda far fa-calendar-plus"></i>{{$evento->FInicio}}</h3>

				<h1>|</h1>

				<h3><i class="icono-izquierda far fa-calendar-minus"></i>{{$evento->FCierre}}</h3>
					
			</div>

			<div class="desc-conv">

				<div class="c-descripcion">

					<p>{{$evento->descripcion}}</p>
					
				</div>

				<div class="contenedor-enlaces">
				
					<a target="_blank" rel="" href="/isc-academicos-eventosVer/{{$evento->slug}}">{{$evento->documento}}</a>

				</div>

			</div>
			
		</div>

		<!---------------BOTONES convocatoria------------------------------------->

		<div class="contenedor-botones">

			<a href="/isc-academicos-eventosDescargar/{{$evento->slug}}"><button class="btn"><span>Descargar <i class="icono-derecha far fa-save"></i></span></button></a>

		</div>




		<div class="seccion-divisor-seccion"></div>		

		@endforeach

	</div>

	<div id="paginas">
			{{$eventos->links()}}
	</div>
				
</div>

@endsection
