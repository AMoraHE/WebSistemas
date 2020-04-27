<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CuerposAcademico;
use Validator;


class CuerposAcademicosController extends Controller
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
        $cuerpos = CuerposAcademico::all();
        return view('admin.menu-conocenos.cuerpo-academico.view-cuerpo-academico', compact('cuerpos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu-conocenos.cuerpo-academico.agregar-cuerpo-academico');
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
            'nombre' => 'required|string',
            'grado' => 'required|string',
            'idCA' => 'required|string',
            'clave' => 'required|string',
            'integrantes' => 'required|string',
        ], [
            'nombre.required' => 'Se requiere que ingrese el nombre del CA',
            'nombre.string' => 'El nombre del CA ingresado contiene caracteres no válidos',
            'grado.required' => 'Se requiere que ingrese el grado del CA',
            'grado.string' => 'El grado del CA ingresado contiene caracteres no válidos',
            'idCA.required' => 'Se requiere que ingrese la ID del CA',
            'idCA.string' => 'El ID del CA ingresado contiene caracteres no válidos',
            'clave.required' => 'Se requiere que ingrese la clave del CA',
            'clave.string' => 'La clave del CA ingresada contiene caracteres no válidos',
            'integrantes.required' => 'Se requiere que ingrese los integrantes del CA',
            'integrantes.string' => 'Los integrantes del CA ingresados contienen caracteres no válidos',
        ]);

        if ($validator->fails()) {
            return redirect('/CuerposAcademicos/create')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $cuerpo = new CuerposAcademico;
            $cuerpo->nombre = $request->input('nombre');
            $cuerpo->grado = $request->input('grado');
            $cuerpo->idCA = $request->input('idCA');
            $cuerpo->clave = $request->input('clave');
            $cuerpo->integrantes = $request->input('integrantes');
            $cuerpo->slug = time().$request->input('nombre');
            $cuerpo->save();

            return redirect()->route('CuerposAcademicos.index')->with('status','Inserción Exitosa');
        }
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
        $CuerposAcademico = CuerposAcademico::where('slug', '=', $slug)->firstOrFail();
        return view('admin.menu-conocenos.cuerpo-academico.editar-cuerpo-academico', compact('CuerposAcademico'));
        //return $CuerposAcademico;
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
            'nombre' => 'required|string',
            'grado' => 'required|string',
            'idCA' => 'required|string',
            'clave' => 'required|string',
            'integrantes' => 'required|string',
        ], [
            'nombre.required' => 'Se requiere que ingrese el nombre del CA',
            'nombre.string' => 'El nombre del CA ingresado contiene caracteres no válidos',
            'grado.required' => 'Se requiere que ingrese el grado del CA',
            'grado.string' => 'El grado del CA ingresado contiene caracteres no válidos',
            'idCA.required' => 'Se requiere que ingrese la ID del CA',
            'idCA.string' => 'El ID del CA ingresado contiene caracteres no válidos',
            'clave.required' => 'Se requiere que ingrese la clave del CA',
            'clave.string' => 'La clave del CA ingresada contiene caracteres no válidos',
            'integrantes.required' => 'Se requiere que ingrese los integrantes del CA',
            'integrantes.string' => 'Los integrantes del CA ingresados contienen caracteres no válidos',
        ]);

        if ($validator->fails()) {
            return redirect('/CuerposAcademicos/'.$slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $CuerposAcademico = CuerposAcademico::where('slug', '=', $slug)->firstOrFail();
            $CuerposAcademico->fill($request->all());
            $CuerposAcademico->save();

            return redirect()->route('CuerposAcademicos.index')->with('status','Actualización Exitosa');
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
        $CuerposAcademico = CuerposAcademico::where('slug', '=', $slug)->firstOrFail();
        $CuerposAcademico->delete();
        return redirect()->route('CuerposAcademicos.index')->with('status','Eliminación exitosa');
        
        
    }
}
