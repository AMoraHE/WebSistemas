@extends('layouts.administrador')

@section('title', 'Laboratorio de Sistemas')

@section('content')
@include('common.errors')

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">
	
		<h3>Agregar - Laboratorio de Sistemas</h3>

	</div>


<!----------------------------------------------------------------- Lab Sistemas---------------------------------------------------------->

	<form class="form-group" files = "true" method="POST" action="/Lab-Sistemas" enctype="multipart/form-data">
		

		<!----------------------------------------------------------------- Cargar Imagen ---------------------------------------------------------->
		@include('admin.menu-inf.form')

		<div class="contenedor-botones">
	                      
	        <a onclick="return confirm('¿Desea guardar la información ingresada?')" href="/Lab-Sistemas-Registrar"><button type="submit" class="btn guardar"><span>Guardar</span></button></a>
	        <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="/Lab-Sistemas"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
	      
	    </div>
	    
	</form>

</div>

@endsection