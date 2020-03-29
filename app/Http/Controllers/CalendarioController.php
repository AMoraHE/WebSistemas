<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class CalendarioController extends Controller
{
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

          return 'hola';

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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

      case 'eliminar':

        break;

      case 'modificar':

        break;


      default:
      return $eventos;
        break;
    }
  }
}
