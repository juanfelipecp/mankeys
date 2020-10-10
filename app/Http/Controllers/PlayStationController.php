<?php

namespace App\Http\Controllers;

use App\play_station;
use Illuminate\Http\Request;

class PlayStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $play=play_station::all();
        return view('play.play',compact('play'));
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
     * @param  \App\play_station  $play_station
     * @return \Illuminate\Http\Response
     */
    public function show(play_station $play_station)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\play_station  $play_station
     * @return \Illuminate\Http\Response
     */
    public function edit(play_station $play_station)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\play_station  $play_station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, play_station $play_station)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\play_station  $play_station
     * @return \Illuminate\Http\Response
     */
    public function destroy(play_station $play_station)
    {
        //
    }
}
