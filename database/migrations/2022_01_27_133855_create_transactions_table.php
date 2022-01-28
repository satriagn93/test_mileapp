<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('id');
            $table->string('customer_name');
            $table->string('customer_code');
            $table->string('transaction_amount');
            $table->string('transaction_discount');
            $table->string('transaction_additional_field')->nullable();
            $table->string('transaction_payment_type');
            $table->string('transaction_state');
            $table->string('transaction_code');
            $table->integer('transaction_order');
            $table->string('location_id');
            $table->integer('organization_id');
            $table->timestamps();
            $table->string('transaction_payment_type_name');
            $table->decimal('transaction_cash_amount');
            $table->decimal('transaction_cash_change');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
