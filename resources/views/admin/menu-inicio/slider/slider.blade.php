@extends('layouts.administrador')

@section('title', 'Editar Noticia')

@section('content')
<div class="container">

</div>

<div class="contenedor-noticia">
  
  <div class="contenedor-botones">
    <a onclick="return confirm('¿Desea agregar un nuevo elemento?')" href="slider/create"><button class="btn"><span>Agregar</span></button></a>
  </div>
  @foreach ($sliders as $slider)

  <div class="contenedor-titulo-noticia">

      <h3>{{$slider->contenido}}</h3>

  </div>

  <div class="contenedor-cuerpo-noticia">

      <div class="contenedor-img-noticia">

        <img src="../images/slider/{{$slider->image}}">

      </div>

      <div class="contenedor-texto">

        <p> </p>

      </div>

  </div>

  <div class="contenedor-botones">
  <a onclick="return confirm('¿Desea editar el elemento seleccionado?')" href="/slider/{{$slider->slug}}/edit"><button class="btn"  ><span>editar</span></button>
</a>



  </div>

@endforeach
</div>


@endsection
