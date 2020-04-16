@extends('layouts.publico')

@section('title', 'Correos')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif



<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		@php
			$var = 'armandomoraherrera@gmail.com'
		@endphp

		<a href="/isc-inicio-formContacto/{{$var}}"><h3>armandomoraherrera@gmail.com</h3></a>

	</div>

	<div class="contenedor-titulo-seccion">

		@php
			$var2 = '161k0021@itscarrillopuerto.edu.mx'
		@endphp

		<a href="/isc-inicio-formContacto/{{$var2}}"><h3>161k0021@itscarrillopuerto.edu.mx</h3></a>

	</div>


</div>

@endsection
