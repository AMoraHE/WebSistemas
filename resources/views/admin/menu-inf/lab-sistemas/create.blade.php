@extends('layouts.administrador')

@section('title', 'Laboratorio de Sistemas')

@section('content')
@include('common.errors')

	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion">
	
			<h3>Editar - Laboratorio de Sistemas</h3>

		</div>


<!----------------------------------------------------------------- Lab Sistemas---------------------------------------------------------->

<form class="form-group" files = "true" method="POST" action="/Lab-Sistemas" enctype="multipart/form-data">
	

	<!----------------------------------------------------------------- Cargar Imagen ---------------------------------------------------------->

	<form class="form-group" files = "true" method="POST" action="/Lab-Sistemas/{{$infra->slug}}" enctype="multipart/form-data">
  
 	@method('PUT')
	@include('admin.menu-inf.formEdit')

	<div class="contenedor-botones">
                      
        <a onclick="return confirm('¿Seguro que desea actualizar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
        <a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
      
    </div>
</form>
</form>
@endsection