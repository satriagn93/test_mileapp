<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TransactionsTableSeeder::class);
        $this->call(ConnotesTableSeeder::class);
        $this->call(CustomerAttributesTableSeeder::class);
        $this->call(OriginDatasTableSeeder::class);
        $this->call(DestinationDatasTableSeeder::class);
        $this->call(KoliDatasTableSeeder::class);
        $this->call(CustomFieldsTableSeeder::class);
        $this->call(CurrentLocationsTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
