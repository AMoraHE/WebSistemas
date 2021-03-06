<?php

namespace App\Http\Controllers;

use App\perfil_egreso;
use Illuminate\Http\Request;
use Validator;

class PerfilEgresoController extends Controller
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
        $perfilegreso = perfil_egreso::all();

        return view('admin.menu-conocenos.perfil-egreso.view-perfil-ingreso', compact('perfilegreso'));
    }

    public function list()
    {
        $perfilegreso = perfil_egreso::all();

        //return $perfilingreso;
        return view('admin.menu-conocenos.perfil-egreso.editar-perfil-ingreso', compact('perfilegreso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu-conocenos.perfil-egreso.crear-perfil-ingreso');
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
            return redirect('/Perfil-Egreso-Crear')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $perfilegreso = new perfil_egreso();
            $perfilegreso->vineta = $request->input('vineta');
            $perfilegreso->elemento = $request->input('elemento');
            $perfilegreso->slug = time();
            $perfilegreso->save();

            return redirect()->route('editar-perfil-egreso')->with('status','Registro Exitoso');
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
        $perfilegreso = perfil_egreso::where('slug', '=', $slug)->firstOrFail();

        return $perfilegreso;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $perfilegreso = perfil_egreso::where('slug', '=', $slug)->firstOrFail();

        return view('admin.menu-conocenos.perfil-egreso.editar-elemento-perfil-ingreso', compact('perfilegreso'));
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
            return redirect('/PerfilEgreso/'.$slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $perfilegreso = perfil_egreso::where('slug', '=', $slug)->firstOrFail();
            $perfilegreso->vineta = $request->input('vineta');
            $perfilegreso->elemento = $request->input('elemento');
            $perfilegreso->slug = time();
            $perfilegreso->save();

            return redirect()->route('editar-perfil-egreso')->with('status','Actualización Exitosa');
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
        $perfilegreso = perfil_egreso::where('slug', '=', $slug)->firstOrFail();
        $perfilegreso->delete();

        return redirect()->route('editar-perfil-egreso')->with('status','Eliminación Exitosa');
    }
}
