<?php

namespace App\Http\Controllers;

use App\Shift;

use Illuminate\Http\Request;
use App\Http\Requests\ShiftFormRequest;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shifts.index',[
            'shifts'=>Shift::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shifts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShiftFormRequest $request)
    {
        $shift=new Shift();
        $shift->name=$request->input('name');
        $shift->code=$request->input('code');
        $shift->start=$request->input('start');
        $shift->end=$request->input('end');
        $shift->name=$request->input('name');

        $shift->save();

        if($request->has('snc')){
            return redirect('admin/shifts/create');
        }

        return redirect('admin/shifts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function show(Shift $shift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.shifts.edit',[
            'shift'=>Shift::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function update(ShiftFormRequest $request, Shift $shift)
    {
        $shift->name=$request->input('name');
        $shift->code=$request->input('code');
        $shift->start=$request->input('start');
        $shift->end=$request->input('end');
        $shift->name=$request->input('name');
        $shift->save();

        return redirect('admin/shifts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shift  $shift
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shift=Shift::find($id);

        $shift->delete();

        return redirect('admin/shifts');
    }
}
