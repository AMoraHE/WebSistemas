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

   <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/Conocenos.jpg">

            <div class="encabezado">

               <h1>Organigrama</h1>
               <hr>

            </div>

          </div>   

          <div class="skew-abajo-org"></div>

      </div>


<!------------------------------------------------------------------ VISTA-ORGANIGRAMA ------------------------------------------------------------->
    <div class="contenedor-organigrama">
        <div class="contenedor-dir"><!------------------- CONTENEDOR DIR ----------------------------->
                @foreach($director as $direc)

                @if($direc->puesto == 'Dirección General')
                <div class="contenedor-inf-dir">
                    
                    <div class="contenedor_tarjeta">
                        <a href="/isc-inicio-formContacto/{{$direc->correo}}" onclick="return confirm('¿Contactar?')">
                            <figure id="tarjeta">
                                <img src="/images/organigrama/{{$direc->foto}}" class="frontal" alt="">
                                <figcaption class="trasera">
                                    <h2 class="titulo">{{$direc->nombre}}</h2>
                                    <hr>
                                        <p>{{$direc->puesto}}</p>
                                        <p>{{$direc->integrante}}</p>
                                        <p>{{$direc->correo}}</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                            
                </div>

                @endif  
                @endforeach


<!------------------- CONTENEDOR /SUB/DIV ----------------------------->
                 <div class="contenedor-inf-dir">
                
                 @foreach($director as $direc)


                    @if($direc->puesto == 'Dirección Académica y de vinculación')
                    <div class="contenedor_tarjeta">
                        <a href="/isc-inicio-formContacto/{{$direc->correo}}" onclick="return confirm('¿Contactar?')">
                            <figure id="tarjeta">
                                <img src="/images/organigrama/{{$direc->foto}}" class="frontal" alt="">
                                <figcaption class="trasera">
                                    <h2 class="titulo">{{$direc->nombre}}</h2>
                                    <hr>
                                        <p>{{$direc->puesto}}</p>
                                        <p>{{$direc->integrante}}</p>
                                        <p>{{$direc->correo}}</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    @endif

                     @if($direc->puesto == 'Subdirección Académica')
                    <div class="contenedor_tarjeta">
                        <a href="/isc-inicio-formContacto/{{$direc->correo}}" onclick="return confirm('¿Contactar?')">
                            <figure id="tarjeta">
                                <img src="/images/organigrama/{{$direc->foto}}" class="frontal" alt="">
                                <figcaption class="trasera">
                                    <h2 class="titulo">{{$direc->nombre}}</h2>
                                    <hr>
                                        <p>{{$direc->puesto}}</p>
                                        <p>{{$direc->integrante}}</p>
                                        <p>{{$direc->correo}}</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    @endif

                     @if($direc->puesto == 'División de ISC')
                    <div class="contenedor_tarjeta">
                        <a href="/isc-inicio-formContacto/{{$direc->correo}}" onclick="return confirm('¿Contactar?')">
                            <figure id="tarjeta">
                                <img src="/images/organigrama/{{$direc->foto}}" class="frontal" alt="">
                                <figcaption class="trasera">
                                    <h2 class="titulo">{{$direc->nombre}}</h2>
                                    <hr>
                                        <p>{{$direc->puesto}}</p>
                                        <p>{{$direc->integrante}}</p>
                                        <p>{{$direc->correo}}</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    @endif
                            
                
  
                @endforeach
                </div>

            <div class="contenedor-lab-doc"><!------------------- CONTENEDOR LAB/DOCENTES ----------------------------->

                <div class="titulo-org1">
                    <p id="titulo-organigrama">Laboratorios</p>
                    <hr>
                </div>

                <div class="titulo-org2">
                    <p id="titulo-organigrama">Docentes</p>
                    <hr>
                            
                </div>

                    <div class="contenedor-lab"><!------------------- CONTENEDOR LABORATORIOS ----------------------------->

                    <div class="contenedor-inf-lab">
                        @foreach($laboratorio as $lab)
                       
                            
                            <div class="contenedor_tarjeta">
                                <a href="/isc-inicio-formContacto/{{$lab->correo}}" onclick="return confirm('¿Contactar?')">
                                    <figure id="tarjeta">
                                        <img src="/images/organigrama/{{$lab->foto}}" class="frontal" alt="">
                                        <figcaption class="trasera">
                                            <h2 class="titulo">{{$lab->puesto}}</h2>
                                            <hr>
                                                <p>{{$lab->integrante}}</p>
                                                <p>{{$lab->correo}}</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                          
                        @endforeach
                    </div>

                    </div>

                    <div class="contenedor-doc"> <!------------------- CONTENEDOR DOCENTES ----------------------------->


                     <div class="contenedor-inf-doc">

                        @foreach($docente as $docen)

                            <div class="contenedor_tarjeta">
                                <a href="/isc-inicio-formContacto/{{$docen->correo}}" onclick="return confirm('¿Contactar?')">
                                    <figure id="tarjeta">
                                        <img src="/images/organigrama/{{$docen->foto}}" class="frontal" alt="">
                                        <figcaption class="trasera">
                                            <h2 class="titulo">{{$docen->puesto}}</h2>
                                            <hr>
                                                <p>{{$docen->integrante}}</p>
                                                <p>{{$docen->correo}}</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>

                        
                        @endforeach
                    </div>

                    </div>   
            </div>
        </div>
    </div>
</div>

@endsection