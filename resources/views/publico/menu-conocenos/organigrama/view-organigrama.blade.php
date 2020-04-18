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
    <div class="chart" id="organigrama"> --@-- </div>

    <script>
        new Treant( chart_config );
    </script>
      

</div>

@endsection