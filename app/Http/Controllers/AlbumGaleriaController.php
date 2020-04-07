<?php

namespace App\Http\Controllers;

use Validator;
use App\album;
use App\albumGaleria;
use Illuminate\Http\Request;

class AlbumGaleriaController extends Controller
{
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
        'imagen' => 'required|mimes:jpeg,png,bmp,tiff,gif',
        'slug' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/Album/agregar/'.$identificador)
                        ->withErrors($validator);
        }

        else
        {
            $imagen = new albumGaleria();

            if($request->hasFile('imagen'))
            {
                $file = $request->file('imagen');
                $name = time().$file->getClientOriginalName();
                $imagen->imagen = $name; 
                $file->move(public_path().'/images/galeria/',$name);
            }
    
            $imagen->albumSlug = $request->input('slug');

            $imagen->save();
                
            return redirect('/Album/agregar/'.$identificador)->with('status', 'Imagen agregada con éxito');
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
        $imagen = albumGaleria::where('id', '=', $id)->firstOrFail();

        $oldFile = public_path().'/images/galeria/'.$imagen->imagen;
        if(file_exists($oldFile))
        {
            unlink($oldFile);
        }

        $imagen->delete();

        return redirect('/Album-Index')->with('status','Eliminación Exitosa');
    }
}
