<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(10);
        return view('courses.listcourses')->with(['courses' => $courses, 'msg' => '']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.storecourse')->with('msg', 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $course = new Course();
            $course->courseName = $request['coursename'];
            $course->duraction = $request['duration'];
            $course->year = $request['year'];
            $course->course_type = $request['course_name'];
            $course->monthly_payment = $request['monthly'];
            $course->obs = $request['obs'];

            $course->save();

            return view('courses.storecourse')->with('msg', 'success');
        }
        catch(Exception $e){
            return view('courses.storecourse')->with('msg', 'error');
        }
        
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
        $course = Course::find($id);

        return view('courses.editcourse')->with(['course' => $course, 'msg' => '']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $course = Course::find($id);

            $course->courseName = $request['coursename'];
            $course->duraction = $request['duration'];
            $course->year = $request['year'];
            $course->course_type = $request['course_name'];
            $course->monthly_payment = $request['monthly'];
            $course->obs = $request['obs'];

            $course->save();

            return view('courses.editcourse')->with(['course' => $course, 'msg' => 'success']);
        }
        catch(Exception $e){
            return view('courses.editcourse')->with('msg', 'error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        try{
            $course = Course::find($id);
            $course->delete();
            $courses = Course::paginate(10);
            return view('courses.listcourses')->with(['courses' => $courses, 'msg' => 'sucess']);
        }     
        catch(Exception $e){
            $courses = Course::paginate(10);
            return view('courses.listcourses')->with(['courses' => $courses, 'msg' => 'error']);
        }  
    }
}
