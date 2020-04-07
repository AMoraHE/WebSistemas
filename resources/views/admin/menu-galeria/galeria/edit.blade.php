@extends('layouts.administrador')

@section('title', 'Galería Edit')

@section('content')
@include('common.errors')


<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->
<form class="form-group" files="true" method="POST" action="/Album/{{$album->slug}}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
    @include('admin.menu-galeria.formEdit')
	  <div class="contenedor-botones">     
      <a onclick="return confirm('¿Desea guardar los cambios?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
        <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="/Album"><button type="button" class="btn"><span>Cancelar</span></button></a>
    </div>
</form>

@endsection;