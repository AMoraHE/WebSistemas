@extends('layouts.publico')

@section('title', 'Líneas de Investigación')

@section('content')

<div class="seccion-principal">

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

<!----------------------------------------------------------------- TABLA LINEAS INVESTIGACIÓN---------------------------------------->

<div class="contenedor-secciones">

	<div class="contenedor-seccion-titulos-grande">
		
		<h1>Líneas de investigación</h1>
	
	</div>
 	
 	<div class="tabla-informacion-escolar">

        <table>
            
            		<thead>
						<tr>
							<th>Programa</th>
							<th>Líneas de Investigación</th>
							<th>CLave LI TECNM</th>
						</tr>
					</thead>

					@foreach ($lineainvestigacion as $lineainvestigacio)

						<tr>
							<td>{{$lineainvestigacio->programa}}</td>
							<td>{{$lineainvestigacio->linea}}</td>
							<td>{{$lineainvestigacio->clave}}</td>
							
						</tr>

					@endforeach  

        </table>    

    </div>

<!----------------------------------------------------------------- TABLA CUERPOS ACÁDEMICOS---------------------------------------->
	<div class="seccion-divisor-seccion"></div>

		<div class="contenedor-seccion-titulos-grande">
			
			<h1>Cuerpos Académicos</h1>
		
		</div>

			<div class="tabla-informacion-escolar">

				<table>
							
					<thead>
						<tr>
							<th>Nombre del CA</th>
							<th>Grado del CA</th>
							<th>ID CA</th>
							<th>Clave CA</th>
							<th>Integrantes</th>
						</tr>
					</thead>

					@foreach($cuerpos as $cuerpo)

					<tr>
						<td>{{$cuerpo->nombre}}</td>
						<td>{{$cuerpo->grado}}</td>
						<td>{{$cuerpo->idCA}}</td>
						<td>{{$cuerpo->clave}}</td>
						<td>
								@foreach (explode(',', $cuerpo->integrantes) as $integrantes)

								@php
								$integrante = ltrim($integrantes);
								@endphp

								<p><i class="icono-izquierda far fa-user-circle"></i>{{$integrante}}</p>
								
								@endforeach
						</td>

					</tr>

					@endforeach

				</table>		

			</div>

		<div class="seccion-divisor-seccion"></div>


	
	</div>
		
				
</div>

@endsection
