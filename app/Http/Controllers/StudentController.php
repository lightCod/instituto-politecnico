<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $students = Student::where('courses_id', $id)->paginate(20);
        $courses = Course::all();
        $course = $courses->find($id);

        return view('students.liststudent')->with(['students' => $students, 'msg' => '', 'course' => $course]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.storestudent')->with('msg', 'create');
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
            $student = new Student();
            $student->name = $request['name'];
            $student->level = $request['level'];
            $student->contacto = $request['contacto'];
            $student->scholarship = $request['scholarship'];
            $student->scholarship_type = $request['scholarship_type'];
            $student->obs = $request['obs'];

            $student->save();

            return view('students.storestudent')->with('msg', 'success');
        }
        catch(Exception $e){
            return view('students.storestudent')->with('msg', 'error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return view('students.editstudent')->with(['student' => $student, 'msg' => '']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $student = Student::find($id);
            $student->name = $request['name'];
            $student->level = $request['level'];
            $student->contacto = $request['contacto'];
            $student->scholarship = $request['scholarship'];
            $student->scholarship_type = $request['scholarship_type'];
            $student->obs = $request['obs'];

            $student->save();

            return view('students.editstudent')->with(['student' => $student, 'msg' => 'success']);
        }
        catch(Exception $e){
            return view('students.editstudent')->with(['student' => $student, 'msg' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $student = Student::find($id);
            $student->delete();
            $students = Student::paginate(20);
            return view('students.liststudent')->with(['students' => $students, 'msg' => 'success']);
        }     
        catch(Exception $e){
            $students = Student::paginate(20);
            return view('students.liststudent')->with(['students' => $students, 'msg' => 'error']);
        }  
    }
    }
