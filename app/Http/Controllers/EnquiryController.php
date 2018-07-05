<?php

namespace App\Http\Controllers;

use App\Course;
use App\Enquiry;
use Illuminate\Http\Request;

use App\Http\Requests\EnquiryFormRequest;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.enquiries.index',[
            'enquiries'=>Enquiry::all(),
            'remarks'=>Enquiry::all()->pluck('remarks'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enquiries.create',[
            'courses'=>Course::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnquiryFormRequest $request)
    {
        $enquiry=new Enquiry();
        $enquiry->first_name=$request->input('first_name');
        $enquiry->last_name=$request->input('last_name');
        $enquiry->email=$request->input('email');
        $enquiry->address=$request->input('address');
        $enquiry->course_id=$request->input('course_id');
        $enquiry->contact_no=$request->input('contact_no');
        $enquiry->date_of_birth=$request->input('date_of_birth');
        $enquiry->remarks=$request->input('remarks');

        $enquiry->save();
        if($request->has('snc')){
            return redirect('admin/enquiries/create');
        }
        return redirect('admin/enquiries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.enquiries.edit',[
            'enquiry'=>Enquiry::findOrFail($id),
            'courses'=>Course::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        $enquiry->first_name=$request->input('first_name');
        $enquiry->last_name=$request->input('last_name');
        $enquiry->email=$request->input('email');
        $enquiry->address=$request->input('address');
        $enquiry->course_id=$request->input('course_id');
        $enquiry->contact_no=$request->input('contact_no');
        $enquiry->date_of_birth=$request->input('date_of_birth');
        $enquiry->remarks=$request->input('remarks');

        $enquiry->save();
        return redirect('admin/enquiries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enquiry=Enquiry::find($id);
        $enquiry->delete();

        return redirect('admin/enquiries');
    }
}
