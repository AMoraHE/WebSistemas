@extends('layouts.administrador')

@section('title', 'Galería')

@section('content')
@include('common.errors')


<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">
	
			<h3>Agregar - Album</h3>

	 </div>


<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

	<form id="formulario" class="form-group" files = "true" method="POST" action="/Album" enctype="multipart/form-data">
	 

	  <!----------------------------------------------------------------- Cargar Imagen ---------------------------------------------------------->
	  @include('admin.menu-galeria.form')

	  	<div class="contenedor-botones">     

			<a id="save" texto="guardar el nuevo álbum?"><button type="submit" class="btn guardar"><span>Guardar</span></button></a>
			<a class="msj" mesanje="Cancelar?" href="/Album-Index"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

		</div>
		
	</form>

</div>


@endsection