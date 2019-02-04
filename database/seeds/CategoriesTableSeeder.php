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
            '1sorghum' => 'sorghum',
            '1beans' => 'beans',
            '1mustard' => 'mustard',
            '1chickpea' => 'chickpea',
            '1linen(grain)' => 'linen',
            '1red & green lentils' => 'redLentils',
            '1coriander' => 'coriander',
            '1millet' => 'millet',
            '1lupine' => 'lupine',
            '1spelt' => 'spelt',
            '1safflower' => 'safflower',
            '2wheat common' => 'wheat-common',
            '2oat' => 'oat',
            '2potato' => 'potato',
            '2rapeseed' => 'rapeseed',
            '2sunflower' => 'sunflower',
            '2barley' => 'barley',
            '2corn' => 'corn',
            '2soybean' => 'soybean',
        ];
        DB::table('categories')->insert([
            'name' => 'ancillary_name',
            'photo' => 'images/noimage.jpg',
            'type' => 'ancillary_type',
        ]);
        foreach ($categories as $key => $value) {
            DB::table('categories')->insert([
                'name' => substr($key, 1),
                'photo' => 'images/categories/' . $value . '.jpg',
                'type' => $key{0} == 1 ? 'upper' : 'lower',
            ]);
        }
    }
}
