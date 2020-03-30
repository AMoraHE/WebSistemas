<?php

namespace App\Http\Controllers;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.menu-inicio.slider.slider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = Slider::all();


        return view('admin.menu-inicio.slider.crear',compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $slider = new Slider();
        $sliders = Slider::all();

        if(count($sliders) <=3){

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name2 = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/slider/',$name2);
            $slider->image = $name2;
        }

        $slider->contenido = $request->input('contenido');

        $slider->slug = time();

        $slider->save();
      }else{
        return 'Error limite de siliders';
      }
        return redirect()->route('slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('admin.menu-inicio.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {

        $slidersG = Slider::all();


        return view('admin.menu-inicio.slider.editar', compact('slidersG','slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if ($request->hasFile('image'))
        {
            $file_path =public_path().'/images/slider/'.$slider->image;
            if(file_exists($file_path))
            {
                unlink($file_path);
            }

            $file = $request->file('image');
            $name2 = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/slider/',$name2);
            $slider->image = $name2;
        }

        $slider->contenido =$request->input('contenido');
        $slider->slug = time();
        $slider->save();

        return redirect()->route('slider');
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

    public function confirmarslider(Request $request)
    {

      return false;

    }
}
