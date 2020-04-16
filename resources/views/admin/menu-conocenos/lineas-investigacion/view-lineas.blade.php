@extends('layouts.administrador')

@section('title', 'Líneas de Investigación')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<div class="seccion-principal">

<!----------------------------------------------------------------- TABLA LINEAS INVESTIGACIÓN---------------------------------------->

	<div class="contenedor-titulo-seccion">

		<h3>Líneas de Investigación</h3>

	</div>

	<div class="contenedor-botones">

		<a class="msj" mesanje="agregar un nuevo elemento?" href="{{route('crear-Linea-Investigacion')}}"><button class="btn agregar"><span>Agregar</span></button></a>

	</div>

		<div class="tabla-informacion-escolar">

				<table>
									
					<thead>
						<tr>
							<th>Programa</th>
							<th>Líneas de Investigación</th>
							<th>CLave LI TECNM</th>
							<th>Eliminar</th>
							<th>Editar</th>
						</tr>
					</thead>

					@foreach ($lineainvestigacion as $lineainvestigacio)

						<tr>
							<td>{{$lineainvestigacio->programa}}</td>
							<td>{{$lineainvestigacio->linea}}</td>
							<td>{{$lineainvestigacio->clave}}</td>
							
							<td>
								<a class="msj" mesanje="eliminar este elemento?" href="Eliminar-Linea-Investigacion/{{$lineainvestigacio->slug}}"><button class="btn-tabla eliminar"><i class="far fa-trash-alt"></i></button></a>
							</td>

							<td>
								<a class="msj" mesanje="editar este elemento?" href="/Lineas-Investigacion/{{$lineainvestigacio->slug}}/edit"><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a>
							</td>	

						</tr>

					@endforeach

				</table>		

		</div>

				
</div>

@endsection
