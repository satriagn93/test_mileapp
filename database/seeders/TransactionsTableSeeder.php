<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaction = new Transaction;
        $transaction->id = "d0090c40-539f-479a-8274-899b9970bddc";
        $transaction->customer_name = "PT. AMARA PRIMATIGA";
        $transaction->customer_code = "1678593";
        $transaction->transaction_amount = "70700";
        $transaction->transaction_discount = "0";
        $transaction->transaction_additional_field = "";
        $transaction->transaction_payment_type = "29";
        $transaction->transaction_state = "PAID";
        $transaction->transaction_code = "CGKFT20200715121";
        $transaction->transaction_order = 121;
        $transaction->location_id = "5cecb20b6c49615b174c3e74";
        $transaction->organization_id = 6;
        $transaction->transaction_payment_type_name = "Invoice";
        $transaction->transaction_cash_amount = 0;
        $transaction->transaction_cash_change = 0;
        $transaction->save();
    }
}
