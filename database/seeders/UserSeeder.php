<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'ใในใ',
            'email' => 'test@test.com',
            'password' => Hash::make('password123'),
            'created_at' => '2021/09/21 11:11:11',
        ]);
    }
}