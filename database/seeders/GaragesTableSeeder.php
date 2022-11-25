<?php

namespace Database\Seeders;

use App\Models\Garage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GaragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Truncating data in garages table...');
        DB::table('garages')->delete();
        $this->command->info('Table [garages] truncation completed.');
        $this->command->info('Seeding data into garages table...');
        $json = File::get("database/data-sample/garages.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Garage::create(array(
                'id' => $obj->id,
                'name' => $obj->name,
                'customer_level' => $obj->customer_level
            ));
        }
        $this->command->info('Garages table seeding completed.');
    }
}
