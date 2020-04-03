@extends('layouts.administrador')

@section('title', 'Infra Edit')

@section('content')
@include('common.errors')


<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->
<form class="form-group" files="true" method="POST" action="/Lab-Celula/{{$infra->slug}}">
  @method('PUT')
  @csrf
    @include('admin.menu-inf.formEdit')
	  <div class="contenedor-botones">     
      <a onclick="return confirm('¿Desea guardar los cambios?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
        <a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
    </div>
</form>

@endsection;