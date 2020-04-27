<?php

namespace App\Http\Controllers;

use App\campo_laboral;
use Illuminate\Http\Request;
use Validator;

class CampoLaboralController extends Controller
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
        $campolaboral = campo_laboral::all();

        return view('admin.menu-conocenos.campo-laboral.view-campo-laboral', compact('campolaboral'));
    }

    public function list()
    {
        $campolaboral = campo_laboral::all();

        return view('admin.menu-conocenos.campo-laboral.editar-campo-laboral', compact('campolaboral'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu-conocenos.campo-laboral.crear-campo-laboral');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'vineta' => 'required|string|max:2',
            'elemento' => 'required|string',
        ], [
            'vineta.required' => 'Se requiere que ingrese la viñeta del elemento',
            'vineta.string' => 'La viñeta ingresada contiene caracteres no válidos',
            'vineta.max' => 'Las viñetas ingresads son demasiadas, se permite ingresar máximo 2',
            'elemento.required' => 'Se requiere que ingrese la descripción del elemento',
            'elemento.string' => 'La descripción ingresada contiene caracteres no válidos',
        ]);

        if ($validator->fails()) {
            return redirect('/Campo-Laboral-Crear')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $campolaboral = new campo_laboral();

            $campolaboral->vineta = $request->input('vineta');
            $campolaboral->elemento = $request->input('elemento');
            $campolaboral->slug = time();
            $campolaboral->save();

            return redirect()->route('CampoLaboralLista')->with('status','Registro Exitoso');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $campolaboral = campo_laboral::where('slug', '=', $slug)->firstOrFail();

        return $campolaboral;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $campolaboral = campo_laboral::where('slug', '=', $slug)->firstOrFail();

        return view('admin.menu-conocenos.campo-laboral.editar-elemento-campo-laboral', compact('campolaboral'));
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
            'vineta' => 'required|string|max:2',
            'elemento' => 'required|string',
        ], [
            'vineta.required' => 'Se requiere que ingrese la viñeta del elemento',
            'vineta.string' => 'La viñeta ingresada contiene caracteres no válidos',
            'vineta.max' => 'Las viñetas ingresads son demasiadas, se permite ingresar máximo 2',
            'elemento.required' => 'Se requiere que ingrese la descripción del elemento',
            'elemento.string' => 'La descripción ingresada contiene caracteres no válidos',
        ]);

        if ($validator->fails()) {
            return redirect('/CampoLaboral/'.$slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $campolaboral = campo_laboral::where('slug', '=', $slug)->firstOrFail();

            $campolaboral->vineta = $request->input('vineta');
            $campolaboral->elemento = $request->input('elemento');
            $campolaboral->slug = time();
            $campolaboral->save();

            return redirect()->route('CampoLaboralLista')->with('status','Actualización Exitosa');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $campolaboral = campo_laboral::where('slug', '=', $slug)->firstOrFail();

        $campolaboral->delete();

        return redirect()->route('CampoLaboralLista')->with('status','Eliminación Exitosa');
    }
}
