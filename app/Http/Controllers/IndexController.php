<?php

namespace App\Http\Controllers;

use App\admin;
use App\nintendo;
use App\pc;
use App\xbox;
use App\play_station;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nintendo=nintendo::all();
        $pc=pc::all();
        $xbox=xbox::all();
        $play=play_station::all();
        return view('index.index',compact('nintendo','pc','xbox','play'));
    }

    public function database()
    {
        $nintendo=nintendo::all();
        $admin=admin::all();
        $pc=pc::all();
        $xbox=xbox::all();
        $play=play_station::all();
        return view('admin.index',compact('admin','nintendo','pc','xbox','play'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.preguntas.crear');
    }

    public function createnin()
    {
        return view('admin.nintendo.crear');
    }

    public function createpc()
    {
        return view('admin.pc.crear');
    }
    public function createxbox()
    {
        return view('admin.xbox.crear');
    }
    public function createplay()
    {
        return view('admin.play.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'pregunta' => 'required'
        ]);

        admin::create($request->all());
        return redirect()->route('db');
       
    }

    public function storenin(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'img' => 'required'
        ]);

        nintendo::create($request->all());
        return redirect()->route('db');
       
    }

    public function storepc(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'img' => 'required'
        ]);

        pc::create($request->all());
        return redirect()->route('db');
       
    }

    public function storexbox(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'img' => 'required'
        ]);

        xbox::create($request->all());
        return redirect()->route('db');
       
    }

    public function storeplay(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'img' => 'required'
        ]);

        play_station::create($request->all());
        return redirect()->route('db');
       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function show(index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin=admin::FindOrFail($id);
        return view('admin.preguntas.editar',compact('admin'));
    }
    public function editnin($id)
    {
        $nintendo=nintendo::FindOrFail($id);
        return view('admin.nintendo.editar',compact('nintendo'));
    }

    public function editpc($id)
    {
        $pc=pc::FindOrFail($id);
        return view('admin.pc.editar',compact('pc'));
    }

    public function editxbox($id)
    {
        $xbox=xbox::FindOrFail($id);
        return view('admin.xbox.editar',compact('xbox'));
    }

    public function editplay($id)
    {
        $play=play_station::FindOrFail($id);
        return view('admin.play.editar',compact('play'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosadmin=request()-> except(['_token','_method']);

        admin::where('id','=',$id)->update($datosadmin);
        return redirect()->route('db');
    }

    public function updatenin(Request $request,$id)
    {
        $datosnin=request()-> except(['_token','_method']);

        nintendo::where('id','=',$id)->update($datosnin);
        return redirect()->route('db');
    }

    public function updatepc(Request $request,$id)
    {
        $datospc=request()-> except(['_token','_method']);

        pc::where('id','=',$id)->update($datospc);
        return redirect()->route('db');
    }

    public function updatexbox(Request $request,$id)
    {
        $datosxbox=request()-> except(['_token','_method']);

        xbox::where('id','=',$id)->update($datosxbox);
        return redirect()->route('db');
    }
    public function updateplay(Request $request,$id)
    {
        $datosplay=request()-> except(['_token','_method']);

        play_station::where('id','=',$id)->update($datosplay);
        return redirect()->route('db');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\index  $index
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        admin::destroy($id);

        return redirect()->route('db');
        
    }

    public function destroynin($id)
    {
        nintendo::destroy($id);

        return redirect()->route('db');
        
    }
    public function destroypc($id)
    {
        pc::destroy($id);

        return redirect()->route('db');
        
    }

    public function destroyxbox($id)
    {
        xbox::destroy($id);

        return redirect()->route('db');
        
    }

    public function destroyplay($id)
    {
        play_station::destroy($id);

        return redirect()->route('db');
        
    }
}
