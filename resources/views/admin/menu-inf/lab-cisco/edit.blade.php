@extends('layouts.administrador')

@section('title', 'Infra Edit')

@section('content')
@include('common.errors')


<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->
<form id="formulario" class="form-group" files="true" method="POST" action="/Lab-Cisco/{{$infra->slug}}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
    @include('admin.menu-inf.formEdit')
	 <div class="contenedor-botones">     

      <a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="/Lab-Cisco"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

    </div>
</form>

@endsection;