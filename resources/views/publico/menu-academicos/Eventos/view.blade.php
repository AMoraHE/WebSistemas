@extends('layouts.publico')

@section('title', 'Eventos')

@section('content')

<div class="seccion-principal">

	

<!----------------------------------------------------------------- EVENTOS ---------------------------------------------------------->

	@foreach ($eventos as $evento)

	<div class="contenedor-titulo-seccion">

		<h3>{{$evento->titulo}}</h3>

	</div>

	<!----------------------------------------------------------------- FORMULARIOS ---------------------------------------------------------->

			<div class="contenedor-formulario-dividido">

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Inicio</label>
			        <input  data-date-format="l j, F, Y" id="FInicio" name="FInicio" value="{{$evento->FInicio}}" readonly />

			      </div>

			    </div>

			    <div class="columna-de-dos">

			      <div class="formulario">

			        <label>Fecha Cierre</label>
			        <input  data-date-format="l j, F, Y" id="FFin" name="FCierre" value="{{$evento->FCierre}}" readonly />

			      </div>

			    </div>

			</div>

			<div class="formulario">

				<label>Descripción</label>
				<textarea readonly>{{$evento->descripcion}}</textarea>
				
			</div>

				<div class="contenedor-enlaces">
						
					<a target="_blank" rel="" href="/isc-academicos-eventosVer/{{$evento->slug}}">{{$evento->documento}}</a>

				</div>

			<!----------------------------------------------------------------- BOTONES EVENTOS ---------------------------------------------------------->

				<div class="contenedor-botones">
						
					<a href="/isc-academicos-eventosDescargar/{{$evento->slug}}"><button class="btn"><span>Descargar</span></button></a>

				</div>

				@endforeach

	<div id="paginas">
			{{$eventos->links()}}
	</div>
				
</div>

@endsection
