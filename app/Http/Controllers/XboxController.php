<?php

namespace App\Http\Controllers;

use App\xbox;
use Illuminate\Http\Request;

class XboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xbox=xbox::all();
        return view('xbox.xbox',compact('xbox'));
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
     * @param  \App\xbox  $xbox
     * @return \Illuminate\Http\Response
     */
    public function show(xbox $xbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\xbox  $xbox
     * @return \Illuminate\Http\Response
     */
    public function edit(xbox $xbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\xbox  $xbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, xbox $xbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\xbox  $xbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(xbox $xbox)
    {
        //
    }
}
