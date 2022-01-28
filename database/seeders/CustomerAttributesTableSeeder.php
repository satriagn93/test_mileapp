<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerAttribute;

class CustomerAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ca = new CustomerAttribute;
        $ca->transaction_id = "d0090c40-539f-479a-8274-899b9970bddc";
        $ca->nama_sales = "Radit Fitrawikarsa";
        $ca->top = "14 Hari";
        $ca->jenis_pelanggan = "B2B";
        $ca->save();
    }
}
