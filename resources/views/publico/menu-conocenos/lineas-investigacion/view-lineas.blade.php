@extends('layouts.publico')

@section('title', 'Líneas de Investigación')

@section('content')

<div class="seccion-principal">

	<div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Conocenos.jpg">

            <div class="encabezado">

               <h1>Líneas y Cuerpos</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>

<!----------------------------------------------------------------- TABLA LINEAS INVESTIGACIÓN---------------------------------------->

	<div class="contenedor-tabla">

		<div class="titulo-linea-cuerpo">
		 <p>Líneas de investigación</p>
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
<!----------------------------------------------------------------- TABLA CUERPOS ACÁDEMICOS---------------------------------------->
	<div class="contenedor-tabla">

		<div class="titulo-linea-cuerpo">
		 <p>Cuerpos Académicos</p>
		</div>

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
