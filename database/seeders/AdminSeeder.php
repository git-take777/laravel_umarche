<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
<<<<<<< HEAD
            'name' => 'テスト',
            'email' => 'test@test.com',
            'password' => Hash::make('password123'),
            'created_at' => '2021/09/21 11:11:11',
        ]);

=======
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('password123'),
            'created_at' => '2022/09/30 11:11:11',
        ]);
>>>>>>> 87fc93fadaa13d26f110745d3b4f88ae2fbb8019
    }
}