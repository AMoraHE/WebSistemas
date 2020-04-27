<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProyectoGaleria;
use Validator;

class ProyectoGaleriaController extends Controller
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
        $identificador = $request->input('slug');
        $validator = Validator::make($request->all(), [
        'imagen' => 'required|mimes:jpeg,png,bmp,tiff,gif|max:512',
        'slug' => 'required|string',
        ], [
            'imagen.required' => 'Se requiere que seleccione un archivo en formato JPEG, PNG, BMP, TIFF, GIF',
            'imagen.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
            'imagen.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 512 KB',
            'slug.required' => 'El identificador no debe estar vacío, regrese al menú anterior y reintente',
            'slug.string' => 'El identificador contiene caracteres no válidos, regrese al menú anterior y reintente',
        ]);

        if ($validator->fails()) {
            return redirect('/ProyectosAcademicos/agregar/'.$identificador)
                        ->withErrors($validator);
        }

        else
        {
            $imagen = new ProyectoGaleria();

            if($request->hasFile('imagen'))
            {
                $file = $request->file('imagen');
                $name = time().$file->getClientOriginalName();
                $imagen->imagen = $name; 
                $file->move(public_path().'/images/proyectos/',$name);
            }
    
            $imagen->proySlug = $request->input('slug');

            $imagen->save();
                
            return redirect('/ProyectosAcademicos/agregar/'.$identificador)->with('status', 'Imagen agregada con éxito');
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
        $imagen = ProyectoGaleria::where('id', '=', $id)->firstOrFail();

        $oldFile = public_path().'/images/proyectos/'.$imagen->imagen;
        if(file_exists($oldFile))
        {
            unlink($oldFile);
        }

        $imagen->delete();

        return redirect('/ProyectosAcademicos')->with('status','Eliminación Exitosa');
    }
}
