@extends('layouts.administrador')

@section('title', 'Proyectos')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!---------------titulo index----------->

<div class="seccion-principal">

		<div class="contenedor-titulo-seccion">

			<h3>Proyectos</h3>
		</div>


<!-----------------Botones--------->
	

		<div class="contenedor-botones">
			<a onclick="return confirm('¿Desea agregar un nuevo Proyecto?')" href="/ProyectosAcademicos/create"><button class="btn"><span>Agregar Proyecto</span></button>
			</a>
		</div>

	@foreach ($proyectos as $proyecto)

		<div class="contenedor-titulo-seccion">

		<h3>{{$proyecto->aplicacion}}</h3>

	</div>

	<div class="contenedor-cuerpo-dividido">

		<div class="contenedor-img-dividido">

			<img src="/images/proyectos/{{$proyecto->newimage}}">

		</div>

		<div class="contenedor-texto-dividido">

			<p>{{$proyecto->proyecto}}</p>

		</div>
		<div class="contenedor-texto-dividido">

			<p>{{$proyecto->desarrolladores}}</p>

		</div>
		<div class="contenedor-texto-dividido">

			<p>{{$proyecto->objetivo}}</p>

		</div>
		<div class="contenedor-texto-dividido">

			<p>{{$proyecto->descripcion}}</p>

		</div>
		<div class="contenedor-texto-dividido">

			<p>{{$proyecto->resultados}}</p>

		</div>

	</div>

<!---------------BOTONES PROYECTOS------------------------------------->

	<div class="contenedor-botones">

    <form method="POST" action="/ProyectosAcademicos/{{$proyecto->slug}}" enctype="multipart/form-data">
        @method('DELETE')
        @csrf

		<a onclick="return confirm('¿Desea eliminar la noticia seleccionada?')"><button type="submit" class="btn"><span>Eliminar</span></button></a>

  	</form>

	  	<a onclick="return confirm('¿Desea editar la noticia seleccionada?')" href="/ProyectosAcademicos/{{$proyecto->slug}}/edit">	<button class="btn"><span>Editar</span></button></a>

	</div>


	@endforeach

</div>

@endsection