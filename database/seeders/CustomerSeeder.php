<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Mai Xuân Cường',
                'address' => 'Cam Hiếu - Cam Lộ - Quảng Trị',
                'email' => 'cuong12@gmail.com',
                'phone' => '0368849',
                'password' =>bcrypt('123456')
            ],
          
        ]);
    }
}
