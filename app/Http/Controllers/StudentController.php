<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;
use App\Debit;
use App\DebitType;
use App\CheckingAccount;
use App\Credit;
use Illuminate\Http\Request;
use PDF;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $students = Student::where(['courses_id' => $request['id']])->orderBy('created_at', 'desc')->get();
        $course = Course::find($request['id']);

        return view('students.liststudent')->with(['students' => $students, 'course_id' => $request['id'], 'course' => $course, 'msg' => '']);
    }

    public function create(Request $request)
    {
        return view('students.storestudent')->with(['course_id' => $request['id'], 'msg' => 'create']);
    }

    public function search(Request $request){
        $students = Student::where('courses_id', $request['id'])->orderBy('created_at', 'desc')->get();
        $foundStudents = array();
        foreach ($students as $student){
            if(strpos($student->name, $request['search']) !== false){
                $foundStudents[] = $student;
            }
        }
        return view('students.liststudent')->with(['students' => $foundStudents, 'course_id' => $request['id'], 'msg' => '']);
    }

    public function store(Request $request)
    {
        try{
            $student = new Student();
            $student->name = $request['name'];
            $student->level = $request['level'];
            $student->contacto = $request['contacto'];
            $student->gender = $request['gender'];
            $student->scholarship = $request['scholarship'];
            $student->scholarship_type = $request['scholarship_type'];
            $student->last_school = $request['last_school'];
            $student->how_to_pay = $request['how_to_pay'];
            $student->funding_source = $request['funding_source'];
            $student->name_of_carer = $request['name_of_carer'];
            $student->contact_of_carer = $request['contact_of_carer'];
            $student->doc = $request['doc'];
            $student->doc_number = $request['doc_number'];
            $student->provenance = $request['provenance'];
            $student->address = $request['address'];
            $student->finish_year = $request['finish_year'];
            $student->date_birth = substr($request['date_birth'],6,4)."-".substr($request['date_birth'],3,2)."-".substr($request['date_birth'],0,2);
            $student->need_care = $request['need_care'];
            $student->courses_id = $request['id'];

            $student->save();

            return view('students.storestudent')->with(['course_id' => $request['id'], 'msg' => 'success']);
        }
        catch(\Exception $e){
            return view('students.storestudent')->with(['course_id' => $request['id'],'msg' => 'error']);
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
    public function edit(Request $request)
    {
        $student = Student::find($request['id']);
        $student->date_birth = substr($student->date_birth,8,2).'-'.substr($student->date_birth,5,2).'-'.substr($student->date_birth,0,4);
        return view('students.editstudent')->with(['student' => $student, 'msg' => '']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $student = Student::find($request['id']);
            $student->name = $request['name'];
            $student->level = $request['level'];
            $student->contacto = $request['contacto'];
            $student->gender = $request['gender'];
            $student->scholarship = $request['scholarship'];
            $student->scholarship_type = $request['scholarship_type'];
            $student->last_school = $request['last_school'];
            $student->how_to_pay = $request['how_to_pay'];
            $student->funding_source = $request['funding_source'];
            $student->name_of_carer = $request['name_of_carer'];
            $student->contact_of_carer = $request['contact_of_carer'];
            $student->doc = $request['doc'];
            $student->doc_number = $request['doc_number'];
            $student->provenance = $request['provenance'];
            $student->address = $request['address'];
            $student->finish_year = $request['finish_year'];
            $student->date_birth = substr($request['date_birth'],6,4)."-".substr($request['date_birth'],3,2)."-".substr($request['date_birth'],0,2);
            $student->need_care = $request['need_care'];
            $student->active = $request['active'];
            $student->save();

            return view('students.editstudent')->with(['student' => $student, 'msg' => 'success']);
        }
        catch(\Exception $e){
            return view('students.editstudent')->with(['student' => $student, 'msg' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try{
            $student = Student::find($request['id']);
            $course_id = $student->courses_id;
            $course = Course::find($course_id);
            $student->delete();
            
            $students = Student::where(['courses_id' => $course_id])->orderBy('created_at', 'desc')->get();

            return view('students.liststudent')->with(['students' => $students, 'course_id' => $course_id, 'course' => $course, 'msg' => 'success']);
        }     
        catch(\Exception $e){

            return view('students.liststudent')->with(['students' => $students, 'course_id' => $course_id, 'course' => $course, 'msg' => 'error']);
        }  
    }

    public function pdf(Request $request){
        $students = Student::where(['courses_id' => $request['id']])->orderBy('created_at', 'desc')->get();
        $course = Course::find($request['id']);
        $pdf = PDF::loadView('reports.studentsPdf', ['students' => $students, 'course' => $course])->setPaper('a2', 'landscape');
        $filename = 'Cursos';
        return $pdf->stream($filename. '.pdf');
    }

    public function changeCourse(Request $request){
        try{
            $courses = Course::all();
            $student = Student::find($request['student_id']);
            $student->courses_id = $request['course_id'];
            $student->save();
            $course = Course::find($student->courses_id);
            return view('students.changeCourse')->with(['student' => $student, 'courses' => $courses, 'course' => $course, 'msg' => 'success']);
        }
        catch(\Exception $e){
            return view('students.changeCourse')->with(['student' => $student, 'courses' => $courses,  'course' => $course, 'msg' => 'error']);
        }    
    }
    
    public function openChangeCourse(Request $request){
        $course = Course::find($request['course_id']);
        $student = Student::find($request['student_id']);
        $courses = Course::all();
        return view('students.changeCourse')->with(['student' => $student, 'courses' => $courses, 'course' => $course, 'msg' => '']);
    }

    public function automaticDebit(Request $request){
        try{
            $debitTypes = DebitType::all();
            $course = Course::find($request['course_id']);
            $students = Student::where(['courses_id' => $request['course_id']])->get();
            $amount = $request['refering_mounth'];
            $debit_types_id = $request['debit_type_id'];
            $i = 0;
            foreach($students as $student){
                $debit = new Debit();
                $debit->debit_date = substr($request['debit_date'],6,4)."-".substr($request['debit_date'],3,2)."-".substr($request['debit_date'],0,2);
                $debit->refering_mounth = $request['refering_mounth'];
                $debit->students_id = $student->id;
                $debit->debit_types_id = $debit_types_id;
                $debit->save();

                $debitName = $debit->debitsType->debit_name;
                $debitAmount = $debit->debitsType->amount;
                $debitDate = $debit->debit_date;
                $idDebit = $debit->id;

                $checkingAccount = new CheckingAccount();
                $checkingAccount->account_date = $debitDate;
                $checkingAccount->credit = 0;
                $checkingAccount->debit = $debitAmount;
                $checkingAccount->regarding = $debitName;
                $checkingAccount->addcash = 0;
                $credits = Credit::where('students_id', $debit->students_id)->get();
                $creditTotal = 0;
                foreach ($credits as $credit) {
                    $creditTotal += $credit->amount;
                }
                $debitTotal = 0;
                $debits = Debit::where('students_id', $debit->students_id)->get();
                foreach ($debits as $debit) {
                    $debitTotal += $debit->debitsType->amount;
                }   
                $total = $creditTotal - $debitTotal;
                $checkingAccount->total = $total;
                $student = Student::find($debit->students_id);
                $checkingAccount->courses_id = $student->courses->id;
                $checkingAccount->provenance_id = $idDebit;
                $checkingAccount->students_id = $debit->students_id;

                $checkingAccount->save();
            }
            return view('students.debitStudents')->with(['course' => $course, 'debitTypes' => $debitTypes, 'msg' => 'success']);
        }
        catch(Exception $e){
            return view('students.debitStudents')->with(['course' => $course, 'debitTypes' => $debitTypes, 'msg' => 'error']);
        }    
    }

    public function openAutomaticDebits(Request $request){
        $debitTypes = DebitType::all();
        $course = Course::find($request['course_id']);
        return view('students.debitStudents')->with(['course' => $course, 'debitTypes' => $debitTypes, 'msg' => '']);
    }
}
