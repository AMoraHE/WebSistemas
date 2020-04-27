<?php

namespace App\Http\Controllers;

use Validator;
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

    public function filtrar($id)
    {
        $slidersG = Slider::all();
        $slider = Slider::where('id', '=', $id)->firstOrFail();

        return view('admin.menu-inicio.slider.editar', compact('slidersG','slider'));
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

        if(count($sliders) <=3)
        {
            $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:jpeg,png,bmp,tiff,gif|max:1024',
            'contenido' => 'required|string',
            ], [
              'image.required' => 'Se requiere que seleccione un archivo en formato JPEG, PNG, BMP, TIFF, GIF',
              'image.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
              'image.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 1 MB (1024 KB)',
              'contenido.required' => 'Se requiere que ingrese un título para la imagen',
              'contenido.string' => 'El título ingresado contiene caracteres no válidos',
            ]);

            if ($validator->fails()) {
                return redirect('/slider/create')
                            ->withErrors($validator)
                            ->withInput($request->all());
            }

            else
            {
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

                return redirect()->route('slider')->with('status','Inserción Exitosa');
            }
        }

        else
        {
            return 'Error limite de siliders';
        }
        

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
        $validator = Validator::make($request->all(), [
        'image' => 'mimes:jpeg,png,bmp,tiff,gif|max:1024',
        'contenido' => 'required|string',
        ], [
              'image.required' => 'Se requiere que seleccione un archivo en formato JPEG, PNG, BMP, TIFF, GIF',
              'image.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
              'image.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 1 MB (1024 KB)',
              'contenido.required' => 'Se requiere que ingrese un título para la imagen',
              'contenido.string' => 'El título ingresado contiene caracteres no válidos',
            ]);

        if ($validator->fails()) {
            return redirect('/slider/'.$slider->slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
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

            return redirect()->route('slider')->with('status', 'Actualización Exitosa');
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
        $slider = Slider::where('slug', '=', $slug)->firstOrFail();
        $file_path =public_path().'/images/slider/'.$slider->image;
        if(file_exists($file_path))
        {
            unlink($file_path);
        }

        $slider->delete();

        return redirect()->route('slider')->with('status','Eliminación exitosa');
    }

    public function confirmarslider(Request $request)
    {

      return false;

    }
}
