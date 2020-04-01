@extends('layouts.administrador')

@section('title', 'Campo Laboral')

@section('content')

		<div class="seccion-principal">

<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

	@include('admin.menu-inf.form')


	  <div class="contenedor-botones">
                      
        <a onclick="return confirm('¿Seguro que desea actualizar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
        <a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
      
    </div>

@endsection