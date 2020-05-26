<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\informacion;
use Validator;

class InformacionCarreraController extends Controller
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
        $informaciones = informacion::all();
        return view('admin.menu-conocenos.informacion-carrera.view-informacion-carrera', compact('informaciones'));
        
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
        $informacion = informacion::where('slug', '=', $slug)->firstOrFail();
        return view('admin.menu-conocenos.informacion-carrera.editar-informacion-carrera', compact('informacion'));
        //return $informacion;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, informacion $informacion)
    {
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required|string',
            'img' => 'mimes:jpeg,png,bmp,tiff,gif|max:1024',
        ], [
            'img.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
            'img.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 1 MB (1024 KB)',
            'descripcion.required' => 'Se requiere que ingrese la descripción del elemento',
            'descripcion.string' => 'La descripción ingresada contiene caracteres no válidos',
        ]);

        if ($validator->fails()) {
            return redirect('/informacion/'.$informacion->slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            if ($request->hasFile('img'))
            {
                $file_path =public_path().'/images/informacion/'.$informacion->img;
                if(file_exists($file_path))
                {
                    unlink($file_path);
                }

                $file = $request->file('img');
                $name2 = time().$file->getClientOriginalName();
                $file->move(public_path().'/images/informacion/',$name2);
                $informacion->img = $name2;
            }

            //$informacion->fill($request->all());
            $informacion->descripcion = $request->input('descripcion');

            $informacion->save();

            return redirect()->route('informacion.index')->with('status','Actualización Exitosa');
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
