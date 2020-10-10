<?php

namespace App\Http\Controllers;

use App\pc;
use Illuminate\Http\Request;

class PcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pc=pc::all();
        return view('pc.pc',compact('pc'));
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
     * @param  \App\pc  $pc
     * @return \Illuminate\Http\Response
     */
    public function show(pc $pc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pc  $pc
     * @return \Illuminate\Http\Response
     */
    public function edit(pc $pc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pc  $pc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pc $pc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pc  $pc
     * @return \Illuminate\Http\Response
     */
    public function destroy(pc $pc)
    {
        //
    }
}
