@extends('layouts.administrador')

@section('title', 'Galería')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	<div class="seccion-principal">

		<div class="contenedor-botones">

			<a onclick="return confirm('¿Desea registrar nueva información?')" href="/Album/create"><button class="btn"><span>Agregar Álbum</span></button></a>

		</div>
		
@foreach ($albums as $album)
	

<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->
		<div class="contenedor-botones">

			<a onclick="return confirm('¿Desea modificar la información del álbum?')" href="/Album/{{$album->slug}}/edit"><button class="btn"><span>Editar</span></button></a>

			<a onclick="return confirm('¿Desea eliminar este álbum?')" href="/Album-Delete/{{$album->slug}}"><button class="btn"><span>Eliminar</span></button></a>
			
		</div>

		<div class="contenedor-titulo-seccion">
	
			<h3>{{$album->titulo}}</h3>

		</div>


		@include('admin.menu-galeria.formShow')

<!----------------------------------------------------------------- Agregar IMG a la Mini Galeria Lab Celula---------------------------------------------------------->

		<div class="contenedor-botones">
			
			<a onclick="return confirm('¿Desea agregar imagenes?')" href="/Album/agregar/{{$album->slug}}"><button class="btn"><span>Agregar Imagen</span></button></a>

		</div>

		@endforeach

@endsection