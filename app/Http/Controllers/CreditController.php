<?php

namespace App\Http\Controllers;

use App\Credit;
use App\Debit;
use App\CheckingAccount;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CreditController extends Controller
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
    public function create(Request $request)
    {
        $student = Student::find($request['id']);
        return view('credit.storecredit')->with(['student' => $student, 'msg' => '']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationData = $request->validate(['year' => 'required|min:4']);
        try{
            $lastCredit = Credit::where('students_id', '=', $request['student_id'])->orderBy('created_at', 'desc')->first();
            $existCreditRecord = 1;
            try{
                $lastEntryDate = $lastCredit->created_at; 
            }
            catch(\Exception $e){
                $data = new \DateTime('NOW');
                $lastEntryDate = $data->format('Y-m-d H:i:s');
                $existCreditRecord = 0;
            }
            $date = new Carbon($lastEntryDate);
            $atualDate = new Carbon(substr($request['credit_date'],6,4)."-".substr($request['credit_date'],3,2)."-".substr($request['credit_date'],0,2));
            $lastEntryYear = $date->year;
            $atualYear = $atualDate->year;

            $student_id = $request['student_id'];
            $student = Student::find($request['student_id']);
            $credit = new Credit();
            if($lastEntryYear != $atualYear){
                $credit->nr = 1;
            }
            else {
                if($existCreditRecord == 1){
                    $credit->nr = $lastCredit->nr + 1;
                }
                else {
                    $credit->nr = 1;
                }
            }
            $credit->amount = str_replace (',', '.', str_replace ('.', '', $request['amount']));
            $credit->credit_date = substr($request['credit_date'],6,4)."-".substr($request['credit_date'],3,2)."-".substr($request['credit_date'],0,2);
            $credit->regarding = $request['regarding'];
            $credit->month = $request['month'];
            $credit->year = $request['year'];
            $credit->students_id = $request['student_id'];
            $credit->save();

            $idCredit = $credit->id;
            $credit_date = $credit->credit_date;

            $account = new CheckingAccount();
            $account->account_date = $credit_date;
            $creditAmount = str_replace (',', '.', str_replace ('.', '', $request['amount']));
            $account->credit = $creditAmount;
            $account->debit = 0;
            $account->regarding = $request['regarding'];
            $account->month = $request['month'];
            $account->year = $request['year'];
            $account->addcash = 1;
            $credits = Credit::where('students_id', $student_id)->get();
            $creditTotal = 0;
            foreach ($credits as $credit) {
                $creditTotal += $credit->amount;
            }
            $debitTotal = 0;
            $debits = Debit::where('students_id', $student_id)->get();
            foreach ($debits as $debit) {
                $debitTotal += $debit->debitsType->amount;
            }   
            $total = $creditTotal - $debitTotal;
            $account->total = $total;
            $student = Student::find($student_id);
            $account->courses_id = $student->courses_id;
            $account->provenance_id = $idCredit;
            $account->students_id = $student_id;
            $account->save();

            if($total >= 0){
                $stud = Student::find($student_id);
                $stud->regular = true;
                $stud->save();
            }

            return view('credit.storecredit')->with(['student' => $student, 'account' => $account, 'msg' => 'success']);
        }
        catch(\Exception $e) {
            return view('credit.storecredit')->with(['student' => $student, 'msg' => 'error']);
        }    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $credit = Credit::find($request['credit_id']);
        $account = CheckingAccount::where('provenance_id', '=', $request['credit_id'])->where('debit', '=', '0')->first();
        $credit->credit_date = substr($credit->credit_date,8,2).'-'.substr($credit->credit_date,5,2).'-'.substr($credit->credit_date,0,4);

        return view('credit.editcredit')->with(['credit' => $credit, 'account' => $account, 'msg' => '']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validationData = $request->validate(['year' => 'required|min:4']);
        try{
            $credit = Credit::find($request['credit_id']);
            $credit->regarding = $request['regarding'];
            $credit->amount = str_replace (',', '.', str_replace ('.', '', $request['amount']));
            $credit->credit_date = substr($request['credit_date'],6,4)."-".substr($request['credit_date'],3,2)."-".substr($request['credit_date'],0,2);
            $credit->regarding = $request['regarding'];
            $credit->month = $request['month'];
            $credit->year = $request['year'];
            $credit->save();
            $cred = $credit;

            $student_id = $cred->students_id;
            $credit_date = $cred->credit_date;

            $account = CheckingAccount::find($request['account_id']);
            $account->account_date = $credit_date;
            $creditAmount = str_replace (',', '.', str_replace ('.', '', $request['amount']));
            $account->credit = $creditAmount;
            $account->regarding = $request['regarding'];
            $account->month = $request['month'];
            $account->year = $request['year'];
            $credits = Credit::where('students_id', $student_id)->get();
            $creditTotal = 0;
            foreach ($credits as $credit) {
                $creditTotal += $credit->amount;
            }
            $debitTotal = 0;
            $debits = Debit::where('students_id', $student_id)->get();
            foreach ($debits as $debit) {
                $debitTotal += $debit->debitsType->amount;
            }   
            $total = $creditTotal - $debitTotal;
            $account->total = $total;
            $account->save();
            $cred->credit_date = substr($cred->credit_date,8,2).'/'.substr($cred->credit_date,5,2).'/'.substr($cred->credit_date,0,4);

            if($total >= 0){
                $stud = Student::find($student_id);
                $stud->regular = true;
                $stud->save();
            }

            return view('credit.editcredit')->with(['msg' => 'success', 'credit' => $cred, 'account' => $account]);
        }
        catch(\Exception $e) {
            return view('credit.editcredit')->with(['credit' => $credit, 'account' => $account, 'msg' => 'error']);
        }   
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $account = CheckingAccount::find($request['id']);
            $credit = Credit::find($account->provenance_id);
            $credit->delete();
            $account->delete();

            $credits = Credit::where('students_id', $request['student_id'])->get();
            $creditTotal = 0;
            foreach (
                $credits as $credit) {
                $creditTotal += $credit->amount;
            }

            $debitTotal = 0;
            $debits = Debit::where('students_id', $request['student_id'])->get();
            foreach ($debits as $debit) {
                $debitTotal += $debit->debitsType->amount;
            }   
            $total = $creditTotal - $debitTotal;
            $accoun = CheckingAccount::where('students_id', '=', $request['student_id'])->orderBy('created_at', 'desc')->first();
            if($accoun == null){
                if($total < 0){
                    $stud = Student::find($request['student_id']);
                    $stud->regular = false;
                    $stud->save();
                }
            }
            else{
                $accoun->total = $total;
                $accoun->save();
                if($total < 0){
                    $stud = Student::find($request['student_id']);
                    $stud->regular = false;
                    $stud->save();
                }
            }
            
            $accounts = CheckingAccount::where('students_id', $request['student_id'])->get();
            $student = Student::find($request['student_id']);

            return view('reports.studentCheckingAccount')->with(['accounts' => $accounts, 'student' => $student, 'msg' => 'success', 'type' => 'Credito']);
        }
        catch(\Exception $e){
            return view('reports.studentCheckingAccount')->with(['accounts' => $accounts, 'student' => $student, 'msg' => 'error', 'type' => 'Credito']);
        }
    }
}
