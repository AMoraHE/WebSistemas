@extends('layouts.administrador')

@section('title', 'Convocatorias')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- convocatorias ---------------------------------------------------------->


<div class="seccion-principal">

	<!-----------------Botones--------->

	<div class="contenedor-botones">

		<a onclick="return confirm('¿Desea agregar una nueva convocatoria?')" href="/ConvocatoriasAcademicos/create"><button class="btn"><span>Agregar</span></button></a>

	</div>

	@foreach ($convocatorias as $convocatoria)

	<div class="contenedor-titulo-seccion">

		<h3>{{$convocatoria->convocatoria}}</h3>

	</div>

	<div class="contenedor-img-grande">

		<img src="/images/convocatoria/{{$convocatoria->newimage}}">

	</div>

	<!----------------------------------------------------------------- DIVISOR ---------------------------------------------------------->

	<div class="divisor-contenido"></div>

	<!----------------------------------------------------------------- TABLA ---------------------------------------------------------->


	<div class="contenedor-cuerpo-seccion">

		<div class="contenedor-texto-completo">

			<div class="tabla-informacion-escolar">

				<table>

					<thead>
						<tr>
							<th>Convocatoria</th>
							<th>Descripcion</th>

						</tr>
					</thead>

						<tr>
							<td>{{$convocatoria->convocatoria}}</td>

							<td>{{$convocatoria->descripcion}}</td><!--Comentar-->

						</tr>

<!--					<thead>
						<tr>
							<th colspan="4">Descripción</th>
						</tr>
					</thead>

						<tr>
							<td colspan="4">{{$convocatoria->descripcion}}</td>
						</tr>	-->

				</table>

			</div>

		</div>

	</div>

<!---------------BOTONES convocatoria------------------------------------->

	<div class="contenedor-botones">

    <form method="POST" action="/ConvocatoriasAcademicos/{{$convocatoria->slug}}" enctype="multipart/form-data">
        @method('DELETE')
        @csrf

		<a onclick="return confirm('¿Desea eliminar la convocatoria seleccionada?')"><button type="submit" class="btn"><span>Eliminar</span></button></a>

  	</form>

	  	<a onclick="return confirm('¿Desea editar la convocatoria seleccionada?')" href="/ConvocatoriasAcademicos/{{$convocatoria->slug}}/edit">	<button class="btn"><span>Editar</span></button></a>

	</div>


	@endforeach

</div>

@endsection
