<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        [
            'name' => 'Hand Bouquet',
            'image' => 'bunga1.jpg'
        ],
        [
            'name' => 'Wedding Bouquet',
            'image' => 'bunga2.jpg'
        ],
        [
            'name' => 'Table Arrangement',
            'image' => 'bunga3.jpg'
        ]
        ]);
    }
}
