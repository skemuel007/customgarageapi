<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
