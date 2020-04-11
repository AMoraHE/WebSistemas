@extends('layouts.administrador')

@section('title', 'Laboratorio de Cisco')

@section('content')
@include('common.errors')

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">
	
		<h3>Agregar - Laboratorio de Cisco</h3>

	</div>

<!----------------------------------------------------------------- Lab Cisco---------------------------------------------------------->

	<form id="formulario" class="form-group" files = "true" method="POST" action="/Lab-Cisco" enctype="multipart/form-data">
		

		<!----------------------------------------------------------------- Cargar Imagen ---------------------------------------------------------->
		@include('admin.menu-inf.form')

		<div class="contenedor-botones">
	                      
	    	<a id="save" texto="guardar la información?"><button type="submit" class="btn guardar"><span>Guardar</span></button></a>
	        <a class="msj" mesanje="Cancelar?" href="/Lab-Cisco"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
	      
	    </div>
	</form>

</div>

@endsection