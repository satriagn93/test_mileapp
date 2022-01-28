<?php

namespace Database\Seeders;

use App\Models\DestinantionData;
use Illuminate\Database\Seeder;

class DestinationDatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $da = new DestinantionData();
        $da->transaction_id = "d0090c40-539f-479a-8274-899b9970bddc";
        $da->customer_name = "PT AMARIS HOTEL SIMPANG LIMA";
        $da->customer_address = "JL. KH. AHMAD DAHLAN NO. 01, SEMARANG TENGAH";
        $da->customer_email = "";
        $da->customer_phone = "0248453499";
        $da->customer_address_detail = "KOTA SEMARANG SEMARANG TENGAH KARANGKIDUL";
        $da->customer_zip_code = "50241";
        $da->zone_code = "SMG";
        $da->organization_id = 6;
        $da->location_id = "5cecb20b6c49615b174c3e74";
        $da->save();
    }
}
