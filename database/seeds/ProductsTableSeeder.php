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
            'mustard',
            'chickpea',
            'linen(grain)',
            'red & green lentils',
            'coriander',
            'millet',
            'lupine',
            'spelt',
            'safflower',
            'wheat common',
            'oat',
            'potato',
            'rapeseed',
            'sunflower',
            'barley',
            'corn',
            'soybean',
        ];

        $photos = [
            'sorghum',
            'beans',
            'mustard',
            'chickpea',
            'linen',
            'redLentils',
            'coriander',
            'millet',
            'lupine',
            'spelt',
            'safflower',
            'wheat-common',
            'oat',
            'potato',
            'rapeseed',
            'sunflower',
            'barley',
            'corn',
            'soybean',
        ];

        DB::table('products')->insert([
            'name' => 'other',
            'description' => 'other description',
            'photo' => 'images/noimage.jpg',
            'category_id' => 1,
        ]);

        for ($i = 0; $i < 19; $i++) {
            for ($j = 0; $j < 2; $j++) {
                DB::table('products')->insert([
                    'name' => $categories[$i] . '_№_' . ($j + 1),
                    'description' => 'For '. $categories[$i] . '_№_' . ($j + 1) . '  ' . 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                    'photo' => 'images/products/' . $photos[$i] . '.jpg',
                    'category_id' => $i + 2,
                ]);
            }

        }
    }
}
