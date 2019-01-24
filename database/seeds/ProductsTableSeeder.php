<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'sorghum',
            'beans',
            'barley',
            'mustard',
            'chickpea',
            'linen(grain)',
            'red & green lentils',
            'coriander',
            'millet',
            'lupine',
            'spelt',
            'safflower',
            'corn',
            'wheat common',
        ];

        $photos = [
            'sorghum',
            'beans',
            'barley',
            'mustard',
            'chickpea',
            'linen',
            'redLentils',
            'coriander',
            'millet',
            'lupine',
            'spelt',
            'safflower',
            'corn',
            'wheat-common',
        ];

        for ($i = 0; $i < 14; $i++) {
            for ($j = 0; $j < 2; $j++) {
                DB::table('products')->insert([
                    'name' => $categories[$i] . '_№_' . ($j + 1),
                    'photo' => 'images/products/' . $photos[$i] . '.jpg',
                    'category_id' => $i + 1,
                ]);
            }

        }
    }
}
