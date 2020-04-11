@extends('layouts.administrador')

@section('title', 'Editar Campo Laboral')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<div class="seccion-principal">

<!----------------------------------------------------------------- EDITAR CAMPO LABORAL ---------------------------------------------------------->

	<div class="contenedor-titulo-seccion">

		<h3>Campo Laboral</h3>

	</div>

<!----------------------------------------------------------------- TABLA CAMPO LABORAL ---------------------------------------------------------->	

	<div class="formulario">
			
		<label>Descripción Campo Laboral</label>
		<a class="msj" mesanje="agregar un nuevo elemento?" href="{{route('CampoLaboralCrear')}}"><button class="btn agregar"><span>Agregar</span></button></a>

	</div>

	<div class="contenedor-cuerpo-seccion">

		<div class="contenedor-texto-completo">

			<div class="tabla-informacion-escolar">

				<table>
							
					<thead>
						<tr>
							<th>Viñetas</th>
							<th>Información</th>
							<th>Eliminar</th>
							<th>Editar</th>
						</tr>
					</thead>

					@foreach ($campolaboral as $campolabora)

					<tr>

						<td>{{$campolabora->vineta}}</td>
						<td>{{$campolabora->elemento}}</td>
						<td><a class="msj" mesanje="eliminar este elemento?" href="Campo-Laboral-Eliminar/{{$campolabora->slug}}"><button class="btn-tabla eliminar"><i class="far fa-trash-alt"></i></button></a></td>
						<td><a class="msj" mesanje="editar este elemento?" href="/CampoLaboral/{{$campolabora->slug}}/edit"><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a></td>	
					</tr>

					@endforeach

				</table>		

			</div>

		</div>

	</div>

<!----------------------------------------------------------------- BOTONES CAMPO LABORAL ---------------------------------------------------------->	

	<div class="contenedor-botones">

		<a class="msj" mesanje="volver?" href="{{route('CampoLaboralIndex')}}"><button class="btn volver"><span>Volver</span></button></a>

	</div>
		
</div>

@endsection