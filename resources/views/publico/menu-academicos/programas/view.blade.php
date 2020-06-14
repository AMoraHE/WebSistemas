@extends('layouts.publico')

@section('title', 'Programas')

@section('content')

<!----------------------------------------------------------------- programas ---------------------------------------------------------->


<div class="seccion-principal">

	<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/images/header/{{$subheader->sImg}}">

            <div class="encabezado">

               <h1>{{$subheader->sTitulo}}</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>

	<!------------------------------------------------------------- CONVOCATORIAS ----------------------------------------------------------->

	<div class="contenedor-secciones">

		@foreach ($programas as $programa)

			<div class="contenedor-titulo-seccion">

				<h3><i class="icono-izquierda fas fa-file-invoice"></i>{{$programa->programa}}</h3>

			</div>

			<div class="contenedor-seccion-convocatoria">
				
				<div class="contenedor-fecha-ecp">

					<h3><i class=" icono-izquierda far fa-calendar-plus"></i>{{$programa->FInicio}}</h3>
					<h1>|</h1>
					<h3><i class="icono-izquierda far fa-calendar-minus"></i>{{$programa->FFin}}</h3>
					
				</div>

				<div class="desc-conv">

					<div class="c-descripcion">

						<div class="txt">{!! $programa->descripcion !!}</div>
						
					</div>

					<div class="contenedor-enlaces">
					
						<a target="_blank" rel="noopener noreferrer" href="/isc-academicos-programasVer/{{$programa->slug}}">{{$programa->doc}}</a>

					</div>

					@php
					$var = $programa->slug
					@endphp
							
				</div>
				
			</div>

			<!---------------BOTONES convocatoria------------------------------------->

			<div class="contenedor-botones">

				<a href="/isc-academicos-programasDescargar/{{$programa->slug}}"><button class="btn"><span>Descargar <i class="icono-derecha far fa-save"></i></span></button></a>

			</div>




			<div class="seccion-divisor-seccion"></div>

		
		@endforeach

	</div>

	<div id="paginas">

		{{$programas->links()}}

	</div>

</div>

@endsection
