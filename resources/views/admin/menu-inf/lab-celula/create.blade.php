@extends('layouts.administrador')

@section('title', 'Campo Laboral')

@section('content')
@include('common.errors')


<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->
<form class="form-group" files = "true" method="POST" action="/Lab-Celula" enctype="multipart/form-data">
  @include('admin.menu-inf.form')
  
	  <div class="contenedor-botones">
                      
        <button type="submit" class="btn"><span>Guardar</span></button>
        <a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
      
    </div>
</form>

@endsection