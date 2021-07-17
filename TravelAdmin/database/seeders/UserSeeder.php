<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' =>'admin1@gmail.com',
            'password' => '$2y$10$8uP4dDwGuoevHW7RFs0sD.szzeK0gMam8gkDiTXI/6Zbs6bid9qDK', // 123456789,
        ]);
    }
}
