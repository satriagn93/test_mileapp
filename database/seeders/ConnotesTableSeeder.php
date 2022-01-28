<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Connote;

class ConnotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $connotes = new Connote;
        $connotes->id = "f70670b1-c3ef-4caf-bc4f-eefa702092ed";
        $connotes->connote_number = 1;
        $connotes->connote_service = "ECO";
        $connotes->connote_service_price = 70700;
        $connotes->connote_amount = 70700;
        $connotes->connote_code = "AWB00100209082020";
        $connotes->connote_booking_code = "";
        $connotes->connote_order = 326931;
        $connotes->connote_state = "PAID";
        $connotes->connote_state_id = 2;
        $connotes->zone_code_from = "CGKFT";
        $connotes->zone_code_to = "SMG";
        $connotes->transaction_id = "d0090c40-539f-479a-8274-899b9970bddc";
        $connotes->actual_weight = 20;
        $connotes->volume_weight = 0;
        $connotes->chargeable_weight = 20;
        $connotes->organization_id = 6;
        $connotes->location_id = "5cecb20b6c49615b174c3e74";
        $connotes->connote_total_package = "3";
        $connotes->connote_surcharge_amount = "0";
        $connotes->connote_sla_day = "4";
        $connotes->location_name = "Hub Jakarta Selatan";
        $connotes->location_type = "HUB";
        $connotes->source_tariff_db = "tariff_customers";
        $connotes->id_source_tariff = "1576868";
        $connotes->save();
    }
}
