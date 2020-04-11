@extends('layouts.administrador')

@section('title', 'Galería Edit')

@section('content')
@include('common.errors')


<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->
<form id="formulario" class="form-group" files="true" method="POST" action="/Album/{{$album->slug}}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
    @include('admin.menu-galeria.formEdit')

	  <div class="contenedor-botones">     

      	<a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
        <a class="msj" mesanje="Cancelar?" href="/Album"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

    </div>

</form>

@endsection