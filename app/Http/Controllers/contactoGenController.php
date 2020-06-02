<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\contactosGen;

class contactoGenController extends Controller
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
        //
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
        //
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
    public function edit($slug)
    {
        $contactoGen = contactosGen::where('slug', $slug)->firstOrFail();

        return view('admin.menu-footer.editar-footer-contactos', compact('contactoGen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
        'titulo' => 'required|string',
        'descripcion' => 'required|string',
        ], [
          'titulo.required' => 'Se requiere que ingrese el título',
          'titulo.string' => 'El título ingresado contiene caracteres no válidos',
          'descripcion.required' => 'Se requiere que ingrese una descripción',
          'descripcion.string' => 'La descripción ingresada contiene caracteres no válidos',
        ]);

        if ($validator->fails()) {
            return redirect('/admin-footer-contactoGen/'.$slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $contactoGen = contactosGen::where('slug', $slug)->firstOrFail();

            $contactoGen->descripcion =$request->input('descripcion');
            $contactoGen->titulo = $request->input('titulo');
            $contactoGen->save();

            return redirect('/admin-footer')->with('status', 'Actualización Exitosa');
        }
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
}
