<?php

namespace App\Http\Controllers;

use App\DurationType;
use Illuminate\Http\Request;

class DurationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/durationtypes.index',[
            'duration_types'=>DurationTypes::all(),
        ]);
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
     * @param  \App\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function show(DurationType $durationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function edit(DurationType $durationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DurationType $durationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DurationType  $durationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DurationType $durationType)
    {
        //
    }
}
