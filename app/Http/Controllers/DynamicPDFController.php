<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credit;
use App\Student;
use PDF;

class DynamicPDFController extends Controller
{

    function pdf(Request $request){
        $credit = Credit::find($request['credit_id']);
        $student = Student::find($credit->students_id);
        $pdf = PDF::loadView('receipts.receipt', ['credit' => $credit, 'student' => $student])->setPaper('a4', 'portrait');
        $filename = 'Recibo '.$student->name;
        return $pdf->stream($filename. '.pdf');
    }

}
