<?php

namespace App\Http\Controllers;

use App\Infraestructura;
use Illuminate\Http\Request;

class CelulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('/admin/menu-inf/lab-celula/edit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/menu-inf/lab-celula/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $infra = new Infraestructura();

        if($request->hasFile('imgInicio')){
            $file = $request->file('imgInicio');
            $name = time().$file->getClientOriginalName();
            $infra->imgInicio = $name; 
            $file->move(public_path().'/images/',$name);
        }
    
            $infra->descripcion = $request->input('descripcion');
            $infra->responsable = $request->input('responsable');
            $infra->correo = $request->input('correo');
            $infra->slug = $request->input('slug');
            

            if($request->hasFile('img1')){
                $file = $request->file('img1');
                $name = time().$file->getClientOriginalName();
                $infra->img1 = $name; 
                $file->move(public_path().'/images/', $name);
            }

            if($request->hasFile('img2')){
                $file = $request->file('img2');
                $name = time().$file->getClientOriginalName();
                $infra->img2 = $name; 
                $file->move(public_path().'/images/', $name);
            }

            if($request->hasFile('img3')){
                $file = $request->file('img3');
                $name = time().$file->getClientOriginalName();
                $infra->img3 = $name; 
                $file->move(public_path().'/images/', $name);
            }

            if($request->hasFile('img4')){
                $file = $request->file('img4');
                $name = time().$file->getClientOriginalName();
                $infra->img4 = $name; 
                $file->move(public_path().'/images/', $name);
            }

            if($request->hasFile('img5')){
                $file = $request->file('img5');
                $name = time().$file->getClientOriginalName();
                $infra->img5 = $name; 
                $file->move(public_path().'/images/', $name);
            }
            
            if($request->hasFile('img6')){
                $file = $request->file('img6');
                $name = time().$file->getClientOriginalName();
                $infra->img6 = $name; 
                $file->move(public_path().'/images/', $name);
            }
            

            $infra->save();
                
            //return redirect()->route('trainers.index')->with('status', 'Entrenador creado correctamente');
            return 'Saved';
            
            //return $request->all();
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
}
