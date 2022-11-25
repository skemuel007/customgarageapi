<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Inserting data into users table...');
        DB::table('users')->insert([
            'name' => 'Salvation Kemuel',
            'email' => 'skemuel@yopmail.com',
            'password' => bcrypt('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'Dominion Lloyd',
            'email' => 'dominion@yopmail.com',
            'password' => bcrypt('123456')
        ]);

        $this->command->info('Data insertion into users table completed');
    }
}
