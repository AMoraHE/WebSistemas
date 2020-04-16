@extends('layouts.publico')

@section('title', 'Programas')

@section('content')

<!----------------------------------------------------------------- programas ---------------------------------------------------------->


<div class="seccion-principal">

	<!-----------------Botones--------->

	

	@foreach ($programas as $programa)

	<div class="contenedor-titulo-seccion">

		<h3>{{$programa->programa}}</h3>

	</div>

	<!----------------------------------------------------------------- TABLA ---------------------------------------------------------->

			<div class="contenedor-formulario-dividido">

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Inicio</label>
			        <input  data-date-format="l j, F, Y" id="FInicio" name="FInicio" value="{{$programa->FInicio}}" readonly />

			      </div>

			    </div>

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Cierre</label>
			        <input  data-date-format="l j, F, Y" id="FFin" name="FFin" value="{{$programa->FFin}}" readonly />

			      </div>

			    </div>

			  </div>

			<div class="formulario">

				<label>Descripción</label>
				<textarea readonly>{{$programa->descripcion}}</textarea>
				
			</div>

			<div class="contenedor-enlaces">

				<a target="_blank" rel="noopener noreferrer" href="/isc-academicos-programasVer/{{$programa->slug}}">{{$programa->doc}}</a>

			</div>

			@php
			$var = $programa->slug
			@endphp

<!---------------BOTONES programas------------------------------------->

	<div class="contenedor-botones">

		<a href="/isc-academicos-programasDescargar/{{$programa->slug}}"><button class="btn"><span>Descargar</span></button></a>


	</div>

	@endforeach

	<div id="paginas">
			{{$programas->links()}}
	</div>

</div>

@endsection
