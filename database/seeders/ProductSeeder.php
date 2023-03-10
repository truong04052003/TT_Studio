<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Mic Thu Âm AT100 + Soundcard K10',
            'price' =>  100000,
            'category_id' =>  1,
            'image' => '8879017e44544c50d3bacac1228bc4ad.jpg',
            'description'=>'Âm thanh chất lượng'
        ]);
      
    }
}
