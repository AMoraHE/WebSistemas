@extends('layouts.administrador')

@section('title', 'Proyectos')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	<!-----------------Botones--------->

	<div class="contenedor-botones">

		<a onclick="return confirm('¿Desea agregar un nuevo Proyecto?')" href="/ProyectosAcademicos/create"><button class="btn"><span>Agregar</span></button></a>

	</div>

	@foreach ($proyectos as $proyecto)

	<div class="contenedor-titulo-seccion">

		<h3>{{$proyecto->proyecto}}</h3>

	</div>

	<div class="contenedor-img-grande">

		<img src="/images/proyectos/{{$proyecto->newimage}}">

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
							<th>Proyecto</th>
							<th>Desarrolladores</th>
							<!--th>Objetivo</th>--->
							<th>Descripción</th><!--Comentar-->
							<!----th>Resultados</th--->
						</tr>
					</thead>

						<tr>
							<td>{{$proyecto->proyecto}}</td>
							<td>{{$proyecto->desarrolladores}}</td>
							<!---<td>{{$proyecto->objetivo}}</td>---->
							<td>{{$proyecto->descripcion}}</td><!--Comentar-->
							<!----<td>{{$proyecto->resultados}}</td>---->
						</tr>

<!--					<thead>
						<tr>
							<th colspan="4">Descripción</th>
						</tr>
					</thead>

						<tr>
							<td colspan="4">{{$proyecto->descripcion}}</td>
						</tr>	-->

				</table>

			</div>

		</div>

	</div>

<!---------------BOTONES PROYECTOS------------------------------------->

	<div class="contenedor-botones">

    <form method="POST" action="/ProyectosAcademicos/{{$proyecto->slug}}" enctype="multipart/form-data">
        @method('DELETE')
        @csrf

		<a onclick="return confirm('¿Desea eliminar el proyecto {{$proyecto->proyecto}}?')"><button type="submit" class="btn"><span>Eliminar</span></button></a>

  	</form>

	  	<a onclick="return confirm('¿Desea editar el proyecto {{$proyecto->proyecto}}?')" href="/ProyectosAcademicos/{{$proyecto->slug}}/edit">	<button class="btn"><span>Editar</span></button></a>

	</div>


	@endforeach

</div>

@endsection
