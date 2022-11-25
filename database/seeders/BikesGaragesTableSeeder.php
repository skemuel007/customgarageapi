<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BikesGaragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Inserting data into bike_garages table...');
        DB::table('bike_garages')->insert([
            'bike_id' => 1,
            'garage_id' => 2
        ]);

        DB::table('bike_garages')->insert([
            'bike_id' => 2,
            'garage_id' => 2
        ]);

        $this->command->info('Data insertion into bike_garages table completed');
    }
}
