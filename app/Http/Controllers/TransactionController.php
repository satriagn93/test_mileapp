<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\CustomerAttribute;
use App\Models\Connote;
use App\Http\Resources\TransactionResource;
use Redirect, DB, Response, PDF;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::with(['customerattributes','connotes','origin_datas','destination_datas','koli_datas','custom_fields','current_locations']);
        return TransactionResource::collection($transactions->paginate(50))->response();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction = new Transaction();
        $transaction->id = $request->id;
        $transaction->customer_name = $request->customer_name;
        $transaction->customer_code = $request->customer_code;
        $transaction->transaction_amount = $request->transaction_amount;
        $transaction->transaction_discount = $request->transaction_discount;
        $transaction->transaction_additional_field = $request->transaction_additional_field;
        $transaction->transaction_payment_type = $request->transaction_payment_type;
        $transaction->transaction_state = $request->transaction_state;
        $transaction->transaction_code = $request->transaction_code;
        $transaction->transaction_order = $request->transaction_order;
        $transaction->location_id = $request->location_id;
        $transaction->organization_id = $request->organization_id;
        $transaction->transaction_payment_type_name = $request->transaction_payment_type_name;
        $transaction->transaction_cash_amount = $request->transaction_cash_amount;
        $transaction->transaction_cash_change = $request->transaction_cash_change;

        if($transaction->save()) {
            foreach ($request->customer_name as $key => $u) {
                $connotes = array(
                    'transaction_id'       => $request->transaction_id[$key],
                    'customer_name'        => $request->customer_name[$key],
                    'customer_code'        => $request->customer_code[$key],
                    'transaction_amount'   => $request->transaction_amount[$key],
                    'transaction_discount' => $request->transaction_discount[$key],
                    'transaction_payment_type'        => $request->transaction_payment_type[$key],
                    'transaction_state'        => $request->transaction_state[$key],
                    'transaction_code'        => $request->transaction_code[$key],
                    'transaction_order'        => $request->transaction_order[$key],
                    'location_id'           => $request->location_id[$key],
                    'organization_id'       => $request->organization_id[$key],
                    'transaction_payment_type_name'        => $request->transaction_payment_type_name[$key],
                    'transaction_cash_amount'        => $request->transaction_cash_amount[$key],
                    'transaction_cash_change'        => $request->transaction_cash_change[$key]
                );
                // dd($item_store);
                Connote::create($connotes);
            }

            return new TransactionResource($transaction);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id)::with(['customerattributes','connotes','origin_datas','destination_datas','koli_datas','custom_fields','current_locations']);
        return TransactionResource::collection($transaction->paginate(50))->response();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->customer_name = $request->customer_name;
        $transaction->customer_code = $request->customer_code;
        $transaction->transaction_amount = $request->transaction_amount;
        $transaction->transaction_discount = $request->transaction_discount;
        $transaction->transaction_additional_field = $request->transaction_additional_field;
        $transaction->transaction_payment_type = $request->transaction_payment_type;
        $transaction->transaction_state = $request->transaction_state;
        $transaction->transaction_code = $request->transaction_code;
        $transaction->transaction_order = $request->transaction_order;
        $transaction->location_id = $request->location_id;
        $transaction->organization_id = $request->organization_id;
        $transaction->transaction_payment_type_name = $request->transaction_payment_type_name;
        $transaction->transaction_cash_amount = $request->transaction_cash_amount;
        $transaction->transaction_cash_change = $request->transaction_cash_change;

        if($transaction->save()) {
            return new TransactionResource($transaction);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        if($transaction->delete()) {
            return new TransactionResource($transaction);
        }
    }
}
