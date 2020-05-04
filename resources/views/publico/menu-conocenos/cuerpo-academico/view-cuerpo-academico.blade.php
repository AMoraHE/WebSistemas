@extends('layouts.publico')

@section('title', 'Cuerpo Académico')

@section('content')

<div class="seccion-principal">

<!----------------------------------------------------------------- CUERPO ACADÉMICO  ---------------------------------------------------------->

	<div class="contenedor-titulo-seccion-select">

		<h3>Cuerpos Académicos</h3>

	</div>


<!----------------------------------------------------------------- TABLA - CUERPO ACADÉMICO  ---------------------------------------------------------->
		<div class="contenedor-tabla">
			<div class="tabla-informacion-escolar">

				<table>
							
					<thead>
						<tr>
							<th>Nombre del CA</th>
							<th>Grado del CA</th>
							<th>ID CA</th>
							<th>Clave CA</th>
							<th>Integrantes</th>
						</tr>
					</thead>

					@foreach($cuerpos as $cuerpo)

					<tr>
						<td>{{$cuerpo->nombre}}</td>
						<td>{{$cuerpo->grado}}</td>
						<td>{{$cuerpo->idCA}}</td>
						<td>{{$cuerpo->clave}}</td>
						<td>
							<ol>
								@foreach (explode(', ', $cuerpo->integrantes) as $integrantes)
								<li>{{$integrantes}}</li>
								@endforeach
							</ol>
						</td>

					</tr>

					@endforeach

				</table>		

			</div>
		</div>
		
</div>

@endsection