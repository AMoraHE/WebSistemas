@extends('layouts.publico')

@section('title', 'Líneas de Investigación')

@section('content')

<div class="seccion-principal">

<!----------------------------------------------------------------- TABLA LINEAS INVESTIGACIÓN---------------------------------------->

	<div class="contenedor-titulo-seccion">

		<h3>Líneas de Investigación</h3>

	</div>

		<div class="tabla-informacion-escolar">

				<table>
									
					<thead>
						<tr>
							<th>Programa</th>
							<th>Líneas de Investigación</th>
							<th>CLave LI TECNM</th>
						</tr>
					</thead>

					@foreach ($lineainvestigacion as $lineainvestigacio)

						<tr>
							<td>{{$lineainvestigacio->programa}}</td>
							<td>{{$lineainvestigacio->linea}}</td>
							<td>{{$lineainvestigacio->clave}}</td>
							
						</tr>

					@endforeach

				</table>		

		</div>

				
</div>

@endsection
