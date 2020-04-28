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
    <div class="contenedor-organigrama">
        <div class="contenedor-dir"><!------------------- CONTENEDOR DIR/SUB/DIV ----------------------------->
                @foreach($director as $direc)
                <div class="contenedor-inf">
                    <a href="/isc-inicio-formContacto/{{$direc->correo}}" onclick="return confirm('¿Contactar?')">
                        <label>
                            <p id="titulo-organigrama">{{$direc->nombre}}</p>
                            <img src="/images/organigrama/{{$direc->foto}}">
                            <p>{{$direc->puesto}}</p>
                            <p>{{$direc->integrante}}</p>
                            <p>{{$direc->correo}}</p>
                        </label>
                    </a>
                            
                </div>
                @endforeach
            <div class="contenedor-lab-doc"><!------------------- CONTENEDOR LAB/DOCENTES ----------------------------->

                <div class="titulo-org1">
                    <p id="titulo-organigrama">Laboratorios</p>
                </div>

                <div class="titulo-org2">
                    <p id="titulo-organigrama">Docentes</p>
                            
                </div>

                    <div class="contenedor-lab"><!------------------- CONTENEDOR LABORATORIOS ----------------------------->

                        @foreach($laboratorio as $lab)
                        <div class="contenedor-inf">
                            <a href="/isc-inicio-formContacto/{{$lab->correo}}" onclick="return confirm('¿Contactar?')">
                                <label>
                                    <img src="/images/organigrama/{{$lab->foto}}">
                                    <p>{{$lab->puesto}}</p>
                                    <p>{{$lab->integrante}}</p>
                                    <p>{{$lab->correo}}</p>
                                </label>
                            </a>
                        </div>  
                        @endforeach

                    </div>

                    <div class="contenedor-doc"> <!------------------- CONTENEDOR DOCENTES ----------------------------->

                        @foreach($docente as $docen)
                        <div class="contenedor-inf">
                            <a href="/isc-inicio-formContacto/{{$docen->correo}}" onclick="return confirm('¿Contactar?')">
                                <label>
                                    <img src="/images/organigrama/{{$docen->foto}}">
                                    <p>{{$docen->puesto}}</p>
                                    <p>{{$docen->integrante}}</p>
                                    <p>{{$docen->correo}}</p>
                                </label>
                            </a>
                        </div>
                        @endforeach

                    </div>   
            </div>
        </div>
    </div>
</div>

@endsection