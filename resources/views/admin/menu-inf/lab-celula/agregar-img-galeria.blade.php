@extends('layouts.administrador')

@section('title', 'Agregar Imágenes')

@section('content')

<div class="seccion-principal">

  <div class="contenedor-titulo-seccion">
  
      <h3>Celula de Desarrollo de Software</h3>

  </div>

  <!------------------------------------------------------------- INFORMACIÓN ---------------------------------------------------------->

  		@include('admin.menu-inf.formImg')

      <div class="contenedor-botones">

      <a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/Lab-Celula"><button type="button" class="btn"><span>Cancelar</span></button></a>
    
      </div>


</div>	

@endsection