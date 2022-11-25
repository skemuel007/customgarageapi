<?php

namespace Database\Seeders;

use App\Models\Bike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class BikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Truncating data in bikes table...');
        DB::table('bikes')->delete();
        $this->command->info('Table [bikes] truncation completed.');
        $this->command->info('Seeding data into bikes table...');
        $json = File::get("database/data-sample/bikes.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Bike::create(array(
                'id' => $obj->id,
                'make' => $obj->make,
                'model' => $obj->model,
                'year' => $obj->year,
                'mods' => $obj->mods,
                'picture' => $obj->picture,
                'builder_id' => $obj->builder_id
            ));
        }
        $this->command->info('Bikes table seeding completed.');
    }
}
