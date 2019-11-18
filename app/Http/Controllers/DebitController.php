<?php

namespace App\Http\Controllers;

use App\Debit;
use App\Credit;
use App\Student;
use App\DebitType;
use App\CheckingAccount;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DebitController extends Controller
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
        $debitTypes = DebitType::all();
        return view('debit.storedebit')->with(['msg' => 'create', 'debitTypes' => $debitTypes, 'student_id' => $request['id']]);
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
            $student_id = $request['student_id'];
            $debit = new Debit();
            $debit->debit_date = substr($request['debit_date'],6,4)."-".substr($request['debit_date'],3,2)."-".substr($request['debit_date'],0,2);
            $debit->refering_mounth = $request['refering_mounth'];
            $debit->year = $request['year'];
            $dType = DebitType::find($request['debit_type_id']);
            $debit->desc_payment = $dType->debit_name;
            $debit->students_id = $student_id;
            $debit->debit_types_id = $request['debit_type_id'];

            $debit->save();
            $debitName = $debit->debitsType->debit_name;
            $debitAmount = $debit->debitsType->amount;
            $debitDate = $debit->debit_date;
            $idDebit = $debit->id;

            $debitTypes = DebitType::all();
            $checkingAccount = new CheckingAccount();
            $checkingAccount->account_date = $debitDate;
            $checkingAccount->credit = 0;
            $checkingAccount->debit = $debitAmount;
            $checkingAccount->regarding = $dType->debit_name;
            $checkingAccount->month = $request['refering_mounth'];
            $checkingAccount->year = $request['year'];
            $checkingAccount->addcash = 0;
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
            $checkingAccount->total = $total;
            $student = Student::find($student_id);
            $checkingAccount->courses_id = $student->courses->id;
            $checkingAccount->provenance_id = $idDebit;
            $checkingAccount->students_id = $student_id;

            $checkingAccount->save();

            if($total < 0){
                $stud = Student::find($request['students_id']);
                $stud->regular = false;
                $stud->save();
            }

            return view('debit.storedebit')->with(['debitTypes' => $debitTypes, 'student_id' => $student_id, 'msg' => 'success']);
        }
        catch(\Exception $e){
            return view('debit.storedebit')->with(['debitTypes' => $debitTypes, 'student_id' => $student_id, 'msg' => 'error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Debit $debit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $debit_id = $request['debit_id'];
        $account = CheckingAccount::where(['provenance_id' => $request['debit_id'], 'credit' => '0'])->first();
        $debit = Debit::find($debit_id);
        $debit->debit_date = substr($debit->debit_date,8,2).'-'.substr($debit->debit_date,5,2).'-'.substr($debit->debit_date,0,4);
        $debitTypes = DebitType::all();
        $debitTyp = DebitType::find($debit->debit_types_id);

        return view('debit.editdebit')->with(['debit' => $debit, 'debitTypes' => $debitTypes, 'account' => $account, 'debitTyp' => $debitTyp, 'msg' => '']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validationData = $request->validate(['year' => 'required|min:4']);
        try{
            $debit = Debit::find($request['debit_id']);
            $debit->debit_date = substr($request['debit_date'],6,4)."-".substr($request['debit_date'],3,2)."-".substr($request['debit_date'],0,2);
            $debit->refering_mounth = $request['refering_mounth'];
            $debit->year = $request['year'];
            $dType = DebitType::find($request['debit_type_id']);
            $debit->desc_payment = $dType->debit_name;
            $debit->debit_types_id = $request['debit_type_id'];
            $debit->save();

            $debitName = $debit->debitsType->debit_name;
            $debitAmount = $debit->debitsType->amount;
            $debitDate = $debit->debit_date;
            $student_id = $debit->students_id;

            $account = CheckingAccount::find($request['account_id']);
            $account->account_date = $debitDate;
            $account->credit = 0;
            $account->debit = $debitAmount;
            $checkingAccount->regarding = $dType->debit_name;
            $checkingAccount->month = $request['refering_mounth'];
            $checkingAccount->year = $request['year'];
            $credits = Credit::where('students_id', $student_id)->get();
            $debitTypes = DebitType::all();
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

            if($total < 0){
                $stud = Student::find($request['students_id']);
                $stud->regular = false;
                $stud->save();
            }

            $debit->debit_date = substr($debit->debit_date,8,2).'/'.substr($debit->debit_date,5,2).'/'.substr($debit->debit_date,0,4);

            return view('debit.editdebit')->with(['msg' => 'success', 'debit' => $debit, 'debitTypes' => $debitTypes, 'account' => $account, 'debitTyp' => DebitType::find($debit->debit_types_id)]);
        }
        catch(\Exception $e){
            return view('debit.editdebit')->with(['msg' => 'error', 'debit' => $debit, 'debitTypes' => $debitTypes, 'account' => $account, 'debitTyp' => DebitType::find($debit->debit_types_id)]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try{
            $account = CheckingAccount::find($request['id']);
            $debit = Debit::find($account->provenance_id);
            $debit->delete();
            $account->delete();

            $credits = Credit::where('students_id', $request['student_id'])->get();
            $creditTotal = 0;
            foreach ($credits as $credit) {
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
                if($total >= 0){
                    $stud = Student::find($request['student_id']);
                    $stud->regular = true;
                    $stud->save();
                } 
            }
            else {
                $accoun->total = $total;
                $accoun->save();
                if($total >= 0){
                    $stud = Student::find($request['student_id']);
                    $stud->regular = true;
                    $stud->save();
                }
            }
            
            $accounts = CheckingAccount::where('students_id', $request['student_id'])->get();
            $student = Student::find($request['student_id']);

            return view('reports.studentCheckingAccount')->with(['accounts' => $accounts, 'student' => $student, 'msg' => 'success', 'type' => 'Debito']);
        }
        catch(\Exception $e){
            return view('reports.studentCheckingAccount')->with(['accounts' => $accounts, 'student' => $student, 'msg' => 'error', 'type' => 'Debito']);
        }
    }
}
