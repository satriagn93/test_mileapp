<?php

namespace Database\Seeders;

use App\Models\CustomField;
use Illuminate\Database\Seeder;
use App\Models\CustomerAttribute;

class CustomFieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cf = new CustomField();
        $cf->transaction_id = "d0090c40-539f-479a-8274-899b9970bddc";
        $cf->catatan_tambahan = "JANGAN DI BANTING \/ DI TINDIH";
        $cf->save();
    }
}
