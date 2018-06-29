<?php

namespace App\Http\Controllers;


use App\Course;
use App\DurationType;
use Illuminate\Http\Request;
use App\Http\Requests\CourseFormRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.courses.index',[
            'courses'=>Course::all(),
            // 'duration_types'=>DurationType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.courses.create',[
            'duration_types'=>DurationType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseFormRequest $request)
    {
        $course=new Course();
        $course->name=$request->input('name');
        $course->description=$request->input('description');
        $course->fee=$request->input('fee');
        $course->duration=$request->input('duration');
        $course->duration_type_id=$request->input('duration_type_id');
        $course->availability=$request->input('availability');

        $course->save();

        return redirect('admin/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.courses.edit',[
            'course'=>Course::findOrFail($id),
            'duration_types'=>DurationType::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->name=$request->input('name');
        $course->description=$request->input('description');
        $course->fee=$request->input('fee');
        $course->duration=$request->input('duration');
        $course->duration_type_id=$request->input('duration_type_id');
        $course->availability=$request->input('availability');

        $course->save();

        return redirect('admin/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Course::find($id);

        $course->delete();
        return redirect('admin/courses');
    }
}
