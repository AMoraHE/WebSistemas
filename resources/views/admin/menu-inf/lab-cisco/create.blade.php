@extends('layouts.administrador')

@section('title', 'Laboratorio de Cisco')

@section('content')
@include('common.errors')

<div class="seccion-principal">

		<div class="contenedor-titulo-seccion">
	
			<h3>Editar - Laboratorio de Cisco</h3>

		</div>

<!----------------------------------------------------------------- Lab Cisco---------------------------------------------------------->

<form class="form-group" files = "true" method="POST" action="/Lab-Cisco" enctype="multipart/form-data">
	

	<!----------------------------------------------------------------- Cargar Imagen ---------------------------------------------------------->
	@include('admin.menu-inf.formEdit')

	<div class="contenedor-botones">
                      
    	<a onclick="return confirm('¿Seguro que desea actualizar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
        <a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
      
    </div>
</form>

</div>

@endsection