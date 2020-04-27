<?php

namespace App\Http\Controllers;

use App\lineas_investigacion;
use Illuminate\Http\Request;
use Validator;

class LineasInvestigacionController extends Controller
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
        $lineainvestigacion = lineas_investigacion::all();

        return view('admin.menu-conocenos.lineas-investigacion.view-lineas', compact('lineainvestigacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu-conocenos.lineas-investigacion.agregar-elemento-lineas');
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
            'programa' => 'required|string',
            'linea' => 'required|string',
            'clave' => 'required|string',
        ], [
            'programa.required' => 'Se requiere que ingrese el nombre del programa para la LI',
            'programa.string' => 'El nombre del programa ingresado contiene caracteres no válidos',
            'linea.required' => 'Se requiere que ingrese el nombre de la LI',
            'linea.string' => 'El nombre de la LI ingresado contiene caracteres no válidos',
            'clave.required' => 'Se requiere que ingrese la clave de la LI',
            'clave.string' => 'La clave de la LI ingresada contiene caracteres no válidos',
        ]);

        if ($validator->fails()) {
            return redirect('/CrearLineaInvestigacion')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $lineainvestigacion = new lineas_investigacion();

            $lineainvestigacion->programa = $request->input('programa');
            $lineainvestigacion->linea = $request->input('linea');
            $lineainvestigacion->clave = $request->input('clave');
            $lineainvestigacion->slug = time();
            $lineainvestigacion->save();

            return redirect()->route('LineasInvestigacion')->with('status','Registro Exitoso');
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
        $lineainvestigacion = lineas_investigacion::where('slug', '=', $slug)->firstOrFail();

        return $lineainvestigacion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $lineainvestigacion = lineas_investigacion::where('slug', '=', $slug)->firstOrFail();

        return view('admin.menu-conocenos.lineas-investigacion.editar-elemento-lineas', compact('lineainvestigacion'));
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
            'programa' => 'required|string',
            'linea' => 'required|string',
            'clave' => 'required|string',
        ], [
            'programa.required' => 'Se requiere que ingrese el nombre del programa para la LI',
            'programa.string' => 'El nombre del programa ingresado contiene caracteres no válidos',
            'linea.required' => 'Se requiere que ingrese el nombre de la LI',
            'linea.string' => 'El nombre de la LI ingresado contiene caracteres no válidos',
            'clave.required' => 'Se requiere que ingrese la clave de la LI',
            'clave.string' => 'La clave de la LI ingresada contiene caracteres no válidos',
        ]);

        if ($validator->fails()) {
            return redirect('/Lineas-Investigacion/'.$slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $lineainvestigacion = lineas_investigacion::where('slug', '=', $slug)->firstOrFail();

            $lineainvestigacion->programa = $request->input('programa');
            $lineainvestigacion->linea = $request->input('linea');
            $lineainvestigacion->clave = $request->input('clave');
            $lineainvestigacion->save();

            return redirect()->route('LineasInvestigacion')->with('status','Actualización Exitosa');
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
        $lineainvestigacion = lineas_investigacion::where('slug', '=', $slug)->firstOrFail();
        
        $lineainvestigacion->delete();

        return redirect()->route('LineasInvestigacion')->with('status','Eliminación Exitosa');
    }
}
