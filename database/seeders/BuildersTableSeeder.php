<?php

namespace Database\Seeders;

use App\Models\Builder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BuildersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->command->info('Truncating data in builders table...');
        DB::table('builders')->delete();
        $this->command->info('Table [builders] truncation completed.');
        $this->command->info('Seeding data into builders table...');
        $json = File::get("database/data-sample/builders.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Builder::create(array(
                'id' => $obj->id,
                'name' => $obj->name,
                'description' => $obj->description,
                'location' => $obj->location
            ));
        }
        $this->command->info('Builders table seeding completed.');
    }
}
