<?php

namespace App\Http\Controllers;

use App\nintendo;
use Illuminate\Http\Request;

class NintendoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrusel1=nintendo::select('SELECT * FROM nintendos WHERE id_nintendo = 1', [1]);
        $carrusel2=nintendo::select('SELECT * FROM nintendos WHERE id_nintendo = 2', [1]);
        $carrusel3=nintendo::select('SELECT * FROM nintendos WHERE id_nintendo = 3', [1]);
        $nintendo=nintendo::all();
        return view('nintendo.nintendo',compact('nintendo','carrusel1','carrusel2'));
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
     * @param  \App\nintendo  $nintendo
     * @return \Illuminate\Http\Response
     */
    public function show(nintendo $nintendo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nintendo  $nintendo
     * @return \Illuminate\Http\Response
     */
    public function edit(nintendo $nintendo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nintendo  $nintendo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nintendo $nintendo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nintendo  $nintendo
     * @return \Illuminate\Http\Response
     */
    public function destroy(nintendo $nintendo)
    {
        //
    }
}
