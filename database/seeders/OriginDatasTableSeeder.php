<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OriginData;

class OriginDatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $origindata = new OriginData();
        $origindata->transaction_id = "d0090c40-539f-479a-8274-899b9970bddc";
        $origindata->customer_name = "PT. NARA OKA PRAKARSA";
        $origindata->customer_address = "JL. KH. AHMAD DAHLAN NO. 100, SEMARANG TENGAH 12420";
        $origindata->customer_email = "info@naraoka.co.id";
        $origindata->customer_phone = "024-1234567";
        $origindata->customer_zip_code = "12420";
        $origindata->zone_code = "CGKFT";
        $origindata->organization_id = 6;
        $origindata->location_id = "5cecb20b6c49615b174c3e74";
        $origindata->save();
    }
}
