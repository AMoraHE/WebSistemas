@extends('layouts.administrador')

@section('title', 'Show Slider')

@section('content')
<div class="container">

      <div class="contenedor-titulo-noticia">

          <h3>{{$slider->contenido}}</h3>

      </div>

      <div class="contenedor-cuerpo-seccion">

          <div class="contenedor-img-noticia">

              <img src="/images/slider/{{$slider->image}}">

          </div>

          <div class="contenedor-texto">

              <p> </p>

          </div>

      </div>

      <div class="contenedor-botones">
          <a onclick="return confirm('¿Desea eliminar este elemento?')" href="/slider-eliminar/{{$slider->slug}}"><button class="btn"><span>Eliminar</span></button></a>
          <a onclick="return confirm('Desea editar este elemento?')" href="/slider/{{$slider->slug}}/editar">
              <button class="btn"><span>Editar</span></button>
          </a>

      </div>


</div>


@endsection
