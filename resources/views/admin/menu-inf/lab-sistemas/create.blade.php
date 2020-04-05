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
                      
        <a onclick="return confirm('¿Seguro que desea guardar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
        <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="/Lab-Sistemas"><button type="button" class="btn"><span>Cancelar</span></button></a>
      
    </div>
</form>
</form>
@endsection