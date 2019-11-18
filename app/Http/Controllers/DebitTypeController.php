<?php

namespace App\Http\Controllers;

use App\DebitType;
use Illuminate\Http\Request;

class DebitTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $debittypes = DebitType::orderBy('created_at', 'desc')->get();
        return view('debittype.listdebittype')->with(['debittypes' => $debittypes, 'msg' => '']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('debittype.storedebittype')->with('msg', 'create');
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
            $debittype = new DebitType();
            $debittype->debit_name = $request['debitname'];
            $debittype->amount = str_replace (',', '.', str_replace ('.', '', $request['amount']));
            $debittype->start_charge_fine = 5;

            $debittype->save();

            return view('debittype.storedebittype')->with('msg', 'success');
        }
        catch(\Exception $e){
            return view('debittype.storedebittype')->with('msg', 'error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function show(DebitType $debitType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $debittype = DebitType::find($request['id']);

        return view('debittype.editdebittype')->with(['debittype' => $debittype, 'msg' => '']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $debittype = DebitType::find($request['id']);
            $debittype->debit_name = $request['debitname'];
            $debittype->amount = str_replace (',', '.', str_replace ('.', '', $request['amount']));

            $debittype->save();

            return view('debittype.editdebittype')->with(['debittype' => $debittype, 'msg' => 'success']);
        }
        catch(\Exception $e){
            return view('debittype.editdebittype')->with(['debittype' => $debittype, 'msg' => 'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentType  $paymentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try{
            $debittypes = DebitType::all();
            $debittype = DebitType::find($request['id']);
            $debittype->delete();
            return view('debittype.listdebittype')->with(['debittypes' => $debittypes, 'msg' => 'success']);
        }
        catch(\Exception $e){
            return view('debittype.listdebittype')->with(['debittypes' => $debittypes, 'msg' => 'error']);
        }
    }
    
}
