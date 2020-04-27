<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class CalendarioController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        return view('admin.menu-inicio.calendario.calendario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $evento = new Evento();
          $evento->title = $request->input('title');
          $evento->descripcion = $request->input('descripcion');
          $evento->color = $request->input('color');
          $evento->textColor = $request->input('textColor');
          $evento->start = $request->input('start');
          $evento->end = $request->input('end');
          $evento->save();

          return $evento;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    //    $evento = new Evento();
    $id = $request->input('id');
    $title = $request->input('title');
    $descripcion = $request->input('descripcion');
    $color = $request->input('color');
    $textColor = $request->input('textColor');
    $start = $request->input('start');
    $end = $request->input('end');

   $datos = array('title'=>$title,'descripcion'=>$descripcion,
   'color'=>$color,'textColor'=>$textColor,'start'=>$start,'end'=>$end);
   $evento = Evento::updateData($id, $datos);
         echo 'Update successfully.';
    return   $evento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $evento=false;
        $evento = new Evento();
        $id = $request->input('id');
        $evento = Evento::deleteData($id);
        $eventos = Evento::all();
        return   $eventos;

    }

    public function eventos(Request $request)
  {
    $eventos = Evento::all();
      //return $eventos;
    // code...
    $accion = $request->input('accion');
    switch ($accion) {
      case 'agregar':
      $evento = new Evento();
      $evento->title = $request->input('title');
      $evento->descripcion = $request->input('descripcion');
      $evento->color = $request->input('color');
      $evento->textColor = $request->input('textColor');
      $evento->start = $request->input('start');
      $evento->end = $request->input('end');
      $evento->save();

      return $evento;

        break;

      default:
      return $eventos;
        break;
    }
  }

/* public function actualizacion(Request $request)
 {
   $id = $request->input('id');
   $title = $request->input('title');
   $descripcion = $request->input('descripcion');
   $color = $request->input('color');
   $textColor = $request->input('textColor');
   $start = $request->input('start');
   $end = $request->input('end');

  $datos = array('title'=>$title,'descripcion'=>$descripcion,
  'color'=>$color,'textColor'=>$textColor,'start'=>$start,'end'=>$end);
  $evento = Evento::updateData($id, $datos);
        echo 'Update successfully.';
   return   $evento;

 }*/

}
