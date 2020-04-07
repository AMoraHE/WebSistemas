<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Infraestructura;
use App\imagenLab;

class ImagenCelulaController extends Controller
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
        $imagenes = imagenLab::where('lab_id', 'celula')->get();

        return view('/admin/menu-inf/lab-celula/agregar-img-galeria', compact('imagenes'));
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
        'image' => 'required|mimes:jpeg,png,bmp,tiff,gif',
        ]);

        if ($validator->fails()) {
            return redirect('/Img-Lab-Celula/create')
                        ->withErrors($validator);
        }

        else
        {
            $imagen = new imagenLab();

            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $name = time().$file->getClientOriginalName();
                $imagen->imagen = $name; 
                $file->move(public_path().'/images/infra/',$name);
            }
    
            $imagen->lab_id = 'celula';

            $imagen->save();
                
            return redirect('/Img-Lab-Celula/create')->with('status', 'Imagen agregada con éxito');
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
