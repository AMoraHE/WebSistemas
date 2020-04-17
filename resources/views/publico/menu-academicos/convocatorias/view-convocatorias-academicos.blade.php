@extends('layouts.publico')

@section('title', 'Convocatorias')

@section('content')

<!----------------------------------------------------------------- convocatorias ---------------------------------------------------------->


<div class="seccion-principal">

	<!-----------------Botones--------->


	@foreach ($convocatorias as $convocatoria)

	<div class="contenedor-titulo-seccion">

		<h3>{{$convocatoria->convocatoria}}</h3>

	</div>

	<!----------------------------------------------------------------- FORMULARIO ---------------------------------------------------------->

			<div class="contenedor-formulario-dividido">

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Inicio</label>
			        <input  data-date-format="l j, F, Y" id="FInicio" name="FInicio" value="{{$convocatoria->FInicio}}" readonly />

			      </div>

			    </div>

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Cierre</label>
			        <input data-date-format="l j, F, Y" id="FFin" name="FFin" value="{{$convocatoria->FFin}}" readonly />

			      </div>

			    </div>

			</div>

			<div class="formulario">

				<label>Descripción</label>
				<textarea readonly>{{$convocatoria->descripcion}}</textarea>
				
			</div>

			<div class="contenedor-enlaces">
			
				<a target="_blank" rel="noopener noreferrer" href="/isc-academicos-convocatoriasVer/{{$convocatoria->slug}}">{{$convocatoria->doc}}</a>

			</div>

			@php
			$var = $convocatoria->slug
			@endphp


<!---------------BOTONES convocatoria------------------------------------->

	<div class="contenedor-botones">

		<a href="/isc-academicos-convocatoriasDescargar/{{$convocatoria->slug}}"><button class="btn"><span>Descargar</span></button></a>


	</div>

	@endforeach

	<div id="paginas">
			{{$convocatorias->links()}}
	</div>

</div>

@endsection
