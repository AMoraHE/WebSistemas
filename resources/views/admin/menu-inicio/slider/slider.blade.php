@extends('layouts.administrador')

@section('title', 'Lista de Sliders')

@section('content')
<div class="container">

</div>

<div class="contenedor-noticia">
  
  <div class="contenedor-botones">
    <a onclick="return confirm('¿Desea agregar un nuevo elemento?')" href="slider/create"><button class="btn"><span>Agregar</span></button></a>
  </div>
  @foreach ($sliders as $slider)

  <div class="contenedor-titulo-seccion">

      <h3>{{$slider->contenido}}</h3>

  </div>

  <div class="contenedor-cuerpo-noticia">

      <div class="contenedor-img-slider">

        <img src="../images/slider/{{$slider->image}}">

      </div>

  </div>

  <div class="contenedor-botones">
  <a onclick="return confirm('¿Desea editar el elemento seleccionado?')" href="/slider/{{$slider->slug}}/edit"><button class="btn"  ><span>Editar</span></button></a>
  <button class="btn"  ><span>Eliminar</span></button>


  </div>

@endforeach
</div>


@endsection
