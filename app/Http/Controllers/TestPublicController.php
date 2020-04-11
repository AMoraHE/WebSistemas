<?php

namespace App\Http\Controllers;

use Validator;
use App\Infraestructura;
use App\imagenLab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $infras = Infraestructura::where('slug', 'celula')->get();
        
        $imagenes = DB::table('imagen_labs')->join('infraestructuras', 'imagen_labs.lab_id', '=', 'infraestructuras.slug')->where('infraestructuras.slug', 'celula')->select('imagen_labs.*')->get();

        return view ('/layouts/TestPublic', compact('infras', 'imagenes'));
        //return view ('/public/menu-inf/TestPublic');
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
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Infraestructura $infra)
    {
        //$infra = Infraestructura::find($id);

        return view('/admin/menu-inf/lab-celula/show', compact('infra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
  public function edit($infras)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function update(Request $request,  $infras)
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
