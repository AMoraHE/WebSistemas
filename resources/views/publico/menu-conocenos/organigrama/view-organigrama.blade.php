@extends('layouts.publico')

@section('title', 'Organigrama')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

	
<!------------------------------------------------------------------ ORGANIGRAMA -------------------------------------------------------------->

<div class="seccion-principal">

  <div class="contenedor-titulo-seccion-select">

    <h3>Organigrama</h3>

  </div>


<!------------------------------------------------------------------ VISTA-ORGANIGRAMA ------------------------------------------------------------->

@foreach ($organigramas as $organigrama)
    <div class="contenedor-organigrama">
        <div class="contenedor-dir"><!------------------- CONTENEDOR DIR/SUB/DIV ----------------------------->
                <div class="contenedor-inf">
                    <a href="#">
                        <label>
                        <p id="titulo-organigrama">Dirección General</p>
                        <img src="img/1.jpg">
                        <p>Diego Briseño</p>
                        </label>
                    </a>
                            
                </div>
            <div class="contenedor-lab-doc"><!------------------- CONTENEDOR LAB/DOCENTES ----------------------------->

                <div class="titulo-org1">
                    <p id="titulo-organigrama">Laboratorios</p>
                </div>

                <div class="titulo-org2">
                    <p id="titulo-organigrama">Docentes</p>
                            
                </div>

                    <div class="contenedor-lab"><!------------------- CONTENEDOR LABORATORIOS ----------------------------->

                        <div class="contenedor-inf">
                    <a href="#">
                        <label>
                        <p id="titulo-organigrama">Laboratorio de Sistemas Computacionales</p>
                        <img src="img/1.jpg">
                        <p>Diego Briseño</p>
                        </label>
                    </a>
                            
                        </div>  
                    </div>

                    <div class="contenedor-doc"> <!------------------- CONTENEDOR DOCENTES ----------------------------->

                    <div class="contenedor-inf">
                    <a href="#">
                        <label>
                        <p id="titulo-organigrama">Docente</p>
                        <img src="img/1.jpg">
                        <p>MC. Arizbé del Socorro Arana Kantún</p>
                        </label>
                    </a>
                            
                    </div>

                    </div>   
            </div>
        </div>
    </div>

    @endforeach
</div>

@endsection