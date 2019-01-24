<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'sorghum' => 'sorghum',
            'beans' => 'beans',
            'barley' => 'barley',
            'mustard' => 'mustard',
            'chickpea' => 'chickpea',
            'linen(grain)' => 'linen',
            'red & green lentils' => 'redLentils',
            'coriander' => 'coriander',
            'millet' => 'millet',
            'lupine' => 'lupine',
            'spelt' => 'spelt',
            'safflower' => 'safflower',
            'corn' => 'corn',
            'wheat common' => 'wheat-common',
        ];
        foreach ($categories as $key => $value) {
            DB::table('categories')->insert([
                'name' => $key,
                'photo' => 'images/products/' . $value . '.jpg',
            ]);
        }
    }
}
