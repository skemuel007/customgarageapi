<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Truncating data in items table...');
        DB::table('items')->delete();
        $this->command->info('Table [items] truncation completed.');
        $this->command->info('Seeding data into items table...');
        $json = File::get("database/data-sample/items.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Item::create(array(
                'id' => $obj->id,
                'type' => $obj->type,
                'name' => $obj->name,
                'company' => $obj->company,
                'bike_id' => $obj->bike_id
            ));
        }
        $this->command->info('Items table seeding completed.');
    }
}
