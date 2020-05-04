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
	
		<h3>Contactos</h3>

	</div>

	<div class="contenedor-contacto">

		<div class="foto-contacto">
			
			<img src="{{ asset('img/Mora.jpeg')}}">

		</div>

		<div class="contenedor-cuerpo-contacto">
			
		
			<div class="contenedor-txt-contacto">
				<p>División ISC</p>
				<p>Jefa de la academia</p>
				<p>MC. MAHALETH SALINAS SEGURA</p>
				
				@php
					$var = 'm.salinas@itscarrillopuerto.edu.mx'
				@endphp

				<h3>m.salinas@itscarrillopuerto.edu.mx</h3>

			</div>

			<div class="contenedor-botones">
				
				<a href="/isc-inicio-formContacto/{{$var}}"><button class="btn"><span>Contactar</span></button></a>

			</div>

		</div>

	</div>

</div>

@endsection
