<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'Kiều Anh Studio',
                'email' => 'hiiit@gmail.com',
                'address' => '133 Nguyễn Huệ',
                'phone' => '0982448555',
            ],
        ]);
    }
}
