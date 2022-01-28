<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CurrentLocation;

class CurrentLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cl = new CurrentLocation();
        $cl->transaction_id = "d0090c40-539f-479a-8274-899b9970bddc";
        $cl->name = "Hub Jakarta Selatan";
        $cl->code = "JKTS01";
        $cl->type = "Agent";
        $cl->save();
    }
}
