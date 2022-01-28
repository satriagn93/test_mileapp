<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KoliData;

class KoliDatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $koda = new KoliData();
        $koda->transaction_id = "d0090c40-539f-479a-8274-899b9970bddc";
        $koda->koli_length = 0;
        $koda->awb_url = "https:\/\/tracking.mile.app\/label\/AWB00100209082020.1";
        $koda->koli_chargeable_weight = 9;
        $koda->koli_width = 0;
        $koda->koli_height = 0;
        $koda->koli_description = "V WARP";
        $koda->connote_id = "f70670b1-c3ef-4caf-bc4f-eefa702092ed";
        $koda->koli_volume = 0;
        $koda->koli_weight = 9;
        $koda->koli_id = "e2cb6d86-0bb9-409b-a1f0-389ed4f2df2d";
        $koda->koli_code = "AWB00100209082020.1";
        $koda->save();

        $koda = new KoliData();
        $koda->transaction_id = "d0090c40-539f-479a-8274-899b9970bddc";
        $koda->koli_length = 0;
        $koda->awb_url = "https:\/\/tracking.mile.app\/label\/AWB00100209082020.2";
        $koda->koli_chargeable_weight = 9;
        $koda->koli_width = 0;
        $koda->koli_height = 0;
        $koda->koli_description = "V WARP";
        $koda->connote_id = "f70670b1-c3ef-4caf-bc4f-eefa702092ed";
        $koda->koli_volume = 0;
        $koda->koli_weight = 9;
        $koda->koli_id = "3600f10b-4144-4e58-a024-cc3178e7a709";
        $koda->koli_code = "AWB00100209082020.2";
        $koda->save();


        $koda = new KoliData();
        $koda->transaction_id = "d0090c40-539f-479a-8274-899b9970bddc";
        $koda->koli_length = 0;
        $koda->awb_url = "https:\/\/tracking.mile.app\/label\/AWB00100209082020.3";
        $koda->koli_chargeable_weight = 9;
        $koda->koli_width = 0;
        $koda->koli_height = 0;
        $koda->koli_description = "LID HOT CUP";
        $koda->connote_id = "f70670b1-c3ef-4caf-bc4f-eefa702092ed";
        $koda->koli_volume = 0;
        $koda->koli_weight = 9;
        $koda->koli_id = "2937bdbf-315e-4c5e-b139-fd39a3dfd15f";
        $koda->koli_code = "AWB00100209082020.3";
        $koda->save();
    }
}
