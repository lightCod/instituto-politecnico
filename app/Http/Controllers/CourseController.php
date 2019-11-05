<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use PDF;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::where('course_type', '=', 'Nao comercias')->orderBy('created_at', 'desc')->get();
        return view('courses.listcourses')->with(['courses' => $courses, 'msg' => '', 'course_type' => 'Nao comercias']);
    }

    public function create()
    {
        return view('courses.storecourse')->with('msg', 'create');
    }

    public function search(Request $request){
        $courses = Course::where('course_type', '=', $request['course_type'])->orderBy('created_at', 'desc')->get();
        $foundCourses = array();
        foreach($courses as $course){
            if(strpos($course->courseName, $request['search']) !== false){
                $foundCourses[] = $course;
            }
        }
        return view('courses.listcourses')->with(['courses' =>$foundCourses, 'msg' => '', 'course_type' => $request['course_type']]);
    }
    public function store(Request $request)
    {
        try{
            $course = new Course();
            $course->courseName = $request['coursename'];
            $course->duraction = $request['duration'];
            $course->year = $request['year'];
            $course->course_type = $request['course_name'];
            $course->monthly_payment = str_replace (',', '.', str_replace ('.', '', $request['monthly']));
            $course->save();

            return view('courses.storecourse')->with('msg', 'success');
        }
        catch(\Exception $e){
            return view('courses.storecourse')->with('msg', 'error');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $courses = Course::where('course_type', '=', 'Comercias')->orderBy('created_at', 'desc')->paginate(10);
        return view('courses.listcourses')->with(['courses' => $courses, 'msg' => '', 'course_type' => 'Comercias']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $course = Course::find($request['id']);

        return view('courses.editcourse')->with(['course' => $course, 'msg' => '']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $course = Course::find($request['id']);
            $course->duraction = $request['duration'];
            $course->year = $request['year'];
            $course->course_type = $request['course_name'];
            $course->monthly_payment = str_replace (',', '.', str_replace ('.', '', $request['monthly']));

            $course->save();

            return view('courses.editcourse')->with(['course' => $course, 'msg' => 'success']);
        }
        catch(\Exception $e){
            return view('courses.editcourse')->with('msg', 'error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    { 
        try{
            $course = Course::find($request['id']);
            $course->delete();
            $courses = Course::paginate(10);
            return view('courses.listcourses')->with(['courses' => $courses, 'course_type' => $course->course_type, 'msg' => 'success']);
        }     
        catch(\Exception $e){
            $courses = Course::paginate(10);
            return view('courses.listcourses')->with(['courses' => $courses, 'course_type' => $course->course_type, 'msg' => 'error']);
        }  
    }

        public function pdf(Request $request){
            $courses = Course::where('course_type', '=', $request['course_type'])->orderBy('created_at', 'desc')->get();
            $pdf = PDF::loadView('reports.coursesPdf', ['courses' => $courses])->setPaper('a4', 'portrait');
            $filename = 'Cursos';
            return $pdf->stream($filename. '.pdf');

    }
}
