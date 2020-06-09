@extends('layouts.publico')

@section('title', 'Cuerpo Académico')

@section('content')

<div class="seccion-principal">

<!----------------------------------------------------------------- CUERPO ACADÉMICO  ---------------------------------------------------------->

	<div class="contenedor-titulo-seccion">

		<div class="tlinea"></div>

		<h3>Cuerpos Académicos</h3>

		<div class="tlinea"></div>

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
								@foreach (explode(', ', $cuerpo->integrantes) as $integrantes)

								<p><i class="icono-izquierda far fa-user-circle"></i>{{$integrante}}</p>
								
								@endforeach
						</td>

					</tr>

					@endforeach

				</table>		

			</div>
		</div>
		
</div>

@endsection