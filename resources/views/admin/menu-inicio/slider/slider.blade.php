@extends('layouts.administrador')

@section('title', 'Lista de Sliders')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- SLIDER ---------------------------------------------------------->

<div class="seccion-principal">

  <div class="titulos-secciones-principales">

    <h1>LISTA DE SLIDERS</h1>
    
  </div>
  
  <div class="contenedor-botones">

    <a class="msj" mesanje="agregar más slider" href="slider/create"><button class="btn agregar"><span>Agregar</span></button></a>

  </div>

<!----------------------------------------------------------------- IMG SLIDER ---------------------------------------------------------->

  @foreach ($sliders as $slider)

  <div class="contenedor-titulo-seccion">
      
      <h3>{{$slider->titulo}}</h3>

  </div>

  <div class="contenedor-img-grande">

    <img src="/images/slider/{{$slider->image}}">

  </div>

  <div class="contenedor-titulo-seccion">

    <h3>{{$slider->contenido}}</h3>

  </div>

<!----------------------------------------------------------------- BOTONES SLIDER ---------------------------------------------------------->

  <div class="contenedor-botones">

    <a class="msj" mesanje="editar el slider?" href="/slider/{{$slider->slug}}/edit"><button class="btn editar"><span>Editar</span></button></a>
    <a class="msj" mesanje="eliminar el slider?" href="/slider-eliminar/{{$slider->slug}}"><button class="btn eliminar" type="submit"><span>Eliminar</span></button></a>

  </div>

    @endforeach

</div>

@endsection
