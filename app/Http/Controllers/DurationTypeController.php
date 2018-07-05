<?php

namespace App\Http\Controllers;

use App\DurationType;
use Illuminate\Http\Request;
use App\Http\Requests\DurationTypeFormRequest;

class DurationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.durationtypes.index',[
            'durationtypes'=>DurationType::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.durationtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DurationTypeFormRequest $request)
    {
        $durationtype=new DurationType();
        $durationtype->name=$request->input('name');
        $durationtype->code=$request->input('code');

        $durationtype->save();
        if($request->has('snc')){
            return redirect('admin/durationtypes/create');
        }

        return redirect('admin/durationtypes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DurationType  $durationtype
     * @return \Illuminate\Http\Response
     */
    public function show(DurationType $durationtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DurationType  $durationtype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.durationtypes.edit',[
            'durationtype'=>DurationType::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DurationType  $durationtype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DurationType $durationtype)
    {
        $durationtype->name=$request->input('name');
        $durationtype->code=$request->input('code');
        $durationtype->save();

        return redirect('admin/durationtypes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DurationType  $durationtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(DurationType $durationtype)
    {
        //
    }
}
