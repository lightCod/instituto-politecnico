<?php

namespace App\Http\Controllers;

use App\CheckingAccount;
use App\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use PDF;

class CheckingAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function daily()
    {
        $accounts = CheckingAccount::where('created_at', '>=', Carbon::today()->toDateString())->get();
        $totais = 0;
        foreach ($accounts as $account) {
            $totais += $account->credit;
        }
        return view('reports.daily')->with(['accounts' => $accounts, 'totais' => $totais]);
    }

    public function weekly()
    {
        $date = Carbon::today()->subDays(30);
        $accounts = CheckingAccount::where('created_at', '>=', $date)->get();
        $totais = 0;
        foreach ($accounts as $account) {
            $totais += $account->credit;
        }
        return view('reports.weekly')->with(['accounts' => $accounts, 'totais' => $totais]);
    }


    public function monthly()
    {
        $accounts = CheckingAccount::where('created_at', '>=', Carbon::now()->startOfMonth())->get();
        $totais = 0;
        foreach ($accounts as $account) {
            $totais += $account->credit;
        }
        return view('reports.monthly')->with(['accounts' => $accounts, 'totais' => $totais]);
    }

    public function account(Request $request)
    {
        $accounts = CheckingAccount::where('students_id', $request['id'])->get();
        $student = Student::find($request['id']);

        return view('reports.studentCheckingAccount')->with(['accounts' => $accounts, 'student' => $student, 'msg' => '']);
    }

    public function accountSitauation(Request $request)
    {
        $students = DB::table('students')->where('students.active', '=', '1')->where('students.courses_id', '=', $request['id'])->where('students.regular', '=', '1')->distinct()->get('students.name');
        return view('reports.evaluationList')->with('students', $students);
    }

    public function reportByDate(Request $request)
    {
        $from = substr($request['initial_date'],6,4)."-".substr($request['initial_date'],3,2)."-".substr($request['initial_date'],0,2);
        $to = substr($request['final_date'],6,4)."-".substr($request['final_date'],3,2)."-".substr($request['final_date'],0,2);
        $accounts = CheckingAccount::whereBetween('created_at', [$from, $to])->get();
        $totais = 0;
        foreach ($accounts as $account) {
            $totais += $account->credit;
        }
        return view('reports.byDate')->with(['accounts' => $accounts, 'totais' => $totais, 'initial_date' => $request['initial_date'], 'final_date' => $request['final_date']]);
    }

    public function openByDate() 
    {
        return view('reports.selectBydate')->with('msg', '');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(CheckingAccount $checkingAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CheckingAccount  $checkingAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckingAccount $checkingAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CheckingAccount  $checkingAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckingAccount $checkingAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CheckingAccount  $checkingAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckingAccount $checkingAccount)
    {
        //
    }

    public function pdf(Request $request){
        $accounts = CheckingAccount::where('students_id', $request['student_id'])->get();
        $student = Student::find($request['student_id']);
        $pdf = PDF::loadView('reports.studentAccountPdf', ['accounts' => $accounts, 'student' => $student])->setPaper('a4', 'portrait');
        $filename = 'Extrato '.$student->name;
        //dd('chegou');
        return $pdf->stream($filename. '.pdf');
    }

    public function dailyPdf()
    {
        $accounts = CheckingAccount::where('created_at', '>=', Carbon::today()->toDateString())->get();
        $totais = 0;
        foreach ($accounts as $account) {
            $totais += $account->credit;
        }
        $pdf = PDF::loadView('reports.dailyPdf', ['accounts' => $accounts, 'totais' => $totais])->setPaper('a4', 'portrait');
        $filename = 'Relatorio Diario';
        return $pdf->stream($filename. '.pdf');
    }

    public function weeklyPdf()
    {
        $date = Carbon::today()->subDays(30);
        $accounts = CheckingAccount::where('created_at', '>=', $date)->get();
        $totais = 0;
        foreach ($accounts as $account) {
            $totais += $account->credit;
        }
        $pdf = PDF::loadView('reports.weeklyPdf', ['accounts' => $accounts, 'totais' => $totais])->setPaper('a4', 'portrait');
        $filename = 'Relatorio Semanal';
        return $pdf->stream($filename. '.pdf');
    }


    public function monthlyPdf()
    {
        $accounts = CheckingAccount::where('created_at', '>=', Carbon::now()->startOfMonth())->get();
        $totais = 0;
        foreach ($accounts as $account) {
            $totais += $account->credit;
        }
        $pdf = PDF::loadView('reports.monthlyPdf', ['accounts' => $accounts, 'totais' => $totais])->setPaper('a4', 'portrait');
        $filename = 'Relatorio Mensal';
        return $pdf->stream($filename. '.pdf');
    }

    public function reportByDatePdf(Request $request)
    {
        $from = substr($request['initial_date'],6,4)."-".substr($request['initial_date'],3,2)."-".substr($request['initial_date'],0,2);
        $to = substr($request['final_date'],6,4)."-".substr($request['final_date'],3,2)."-".substr($request['final_date'],0,2);
        $accounts = CheckingAccount::whereBetween('created_at', [$from, $to])->get();
        $totais = 0;
        foreach ($accounts as $account) {
            $totais += $account->credit;
        }
        $pdf = PDF::loadView('reports.monthlyPdf', ['accounts' => $accounts, 'totais' => $totais])->setPaper('a4', 'portrait');
        $filename = 'Relatorio Por Data';
        return $pdf->stream($filename. '.pdf');
    }

    public function genderReport(){
        $female = Student::where(['gender' => 'F', 'active' => 1])->count();
        $male = Student::where(['gender' => 'M', 'active' => 1])->count();
        return view('reports.genders')->with(['female' => $female, 'male' => $male]);
    }

    public function accountSitauationPdf(Request $request)
    {
        $students = DB::table('students')->join('checking_accounts', 'students.id', '=', 'checking_accounts.students_id')->where('active', '=', '1')->where('total', '>=', '0')->where('checking_accounts.courses_id','=', $request['id'])->distinct()->get('name');
        $pdf = PDF::loadView('reports.evaluationListPdf', ['students' => $students])->setPaper('a4', 'portrait');
        $filename = 'Relatorio Por Data';
        return $pdf->stream($filename. '.pdf');
    }

}
