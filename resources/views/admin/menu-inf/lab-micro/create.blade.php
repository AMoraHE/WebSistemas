@extends('layouts.administrador')

@section('title', 'Laboratorio de Microprocesadores')

@section('content')
@include('common.errors')

<div class="seccion-principal">

		<div class="contenedor-titulo-seccion">
	
			<h3>EAgregar - Laboratorio de Microprocesadores</h3>

		</div>

<!----------------------------------------------------------------- Lab microprocesadores---------------------------------------------------------->

<form class="form-group" files = "true" method="POST" action="/Lab-Micro" enctype="multipart/form-data">


	<!----------------------------------------------------------------- Cargar Imagen ---------------------------------------------------------->

	@include('admin.menu-inf.form')

	<div class="contenedor-botones">
                      
    	<a onclick="return confirm('¿Seguro que desea actualizar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
    	<a onclick="return confirm('¿Desea abandonar sin guardar?')" href="/Lab-Micro"><button type="button" class="btn"><span>Cancelar</span></button></a>
      
    </div>

</form>

</div>
@endsection