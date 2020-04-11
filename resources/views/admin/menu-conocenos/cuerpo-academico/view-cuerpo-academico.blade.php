@extends('layouts.administrador')

@section('title', 'Cuerpo Académico')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<div class="seccion-principal">

<!----------------------------------------------------------------- CUERPO ACADÉMICO  ---------------------------------------------------------->

	<div class="contenedor-titulo-seccion">

		<h3>Cuerpo Académico</h3>

	</div>

	<div class="contenedor-botones">

		<a href="CuerposAcademicos/create"><button class="btn agregar"><span>Agregar</span></button></a>

	</div>

<!----------------------------------------------------------------- TABLA - CUERPO ACADÉMICO  ---------------------------------------------------------->
			
	<div class="contenedor-cuerpo-seccion">

		<div class="contenedor-texto-completo">

			<div class="tabla-informacion-escolar">

				<table>
							
					<thead>
						<tr>
							<th>Nombre del CA</th>
							<th>Grado del CA</th>
							<th>ID CA</th>
							<th>Clave CA</th>
							<th>Integrantes</th>
							<th>Eliminar</th>
							<th>Editar</th>
						</tr>
					</thead>

					@foreach($cuerpos as $cuerpo)

					<tr>
						<td>{{$cuerpo->nombre}}</td>
						<td>{{$cuerpo->grado}}</td>
						<td>{{$cuerpo->idCA}}</td>
						<td>{{$cuerpo->clave}}</td>
						<td>
							<ul>
								@foreach (explode(', ', $cuerpo->integrantes) as $integrantes)
								<li>{{$integrantes}}</li>
								@endforeach
							</ul>
						</td>
								
						<td>
							<a onclick="return confirm('¿Seguro que desea eliminar este elemento?')" href="/CuerposAcademicosEliminar/{{$cuerpo->slug}}"><button class="btn-tabla eliminar"><i class="far fa-trash-alt"></i></button></a>
						</td>

						<td>
							<a onclick="return confirm('¿Desea editar este elemento?')" href="/CuerposAcademicos/{{$cuerpo->slug}}/edit"><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a>
						</td>	

					</tr>

					@endforeach

				</table>		

			</div>

		</div>

	</div>
		
</div>

@endsection