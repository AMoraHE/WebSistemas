@extends('layouts.administrador')

@section('title', 'Editar Perfil Ingreso')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<!----------------------------------------------------------------- EDITAR PERFIL INGRESO ---------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Perfil Ingreso</h3>

	</div>

<!------------------------------------------------------------- TABLA EDITAR PERFIL INGRESO --------------------------------------------------->

	<div class="formulario">
			
		<label>Descripción Perfil Ingreso</label>
		<a onclick="alert('{{route('crear-perfil-ingreso')}}');"><button class="btn agregar"><span>Agregar</span></button></a>
	
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

					@foreach ($perfilingreso as $perfilingres)

					<tr>
						<td>{{$perfilingres->vineta}}</td>
						<td>{{$perfilingres->elemento}}</td>
						<td><a onclick="alert('Perfil-Ingreso-Eliminar/{{$perfilingres->slug}}');"><button class="btn-tabla eliminar"><i class="far fa-trash-alt"></i></button></a></td>
						<td><a onclick="alert('/PerfilIngreso/{{$perfilingres->slug}}/edit');"><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a></td>	
					</tr>

					@endforeach

				</table>		

			</div>

		</div>

	</div>

<!------------------------------------------------------------- BOTONES EDITAR PERFIL INGRESO --------------------------------------------------->

	<div class="contenedor-botones">

		<a onclick="alert('{{route('perfil-ingreso')}}');"> <button class="btn volver"><span>Volver</span></button> </a>

	</div>
		
</div>

@endsection