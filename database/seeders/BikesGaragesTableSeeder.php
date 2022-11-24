<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BikesGaragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bike_garages')->insert([
            'bike_id' => 1,
            'garage_id' => 2
        ]);

        DB::table('bike_garages')->insert([
            'bike_id' => 2,
            'garage_id' => 2
        ]);
    }
}
