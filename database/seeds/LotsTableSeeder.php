<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
            450,
            500,
            550,
            600,
            650,
        ];

        $tons = [
            100,
            150,
            200,
            250,
            300,
        ];

        for ($i = 1; $i <= 38; $i++) {
            $ind1 = rand(1,6);
            for ($j = 1; $j <= $ind1; $j++) {
                $indd = rand(1,3);
                $indp = rand(0,4);
                $indt = rand(0,4);
                DB::table('lots')->insert([
                    'product_id' => $i,
                    'delivery_id' => $indd,
                    'tons' => $tons[$indt],
                    'price' => $prices[$indp],
                    'port' => 'Some port № ' . ($i + $ind1 + $j +$indd + $indp + $indt),
                    'port_photo' => 'images/port.jpg',
                ]);
            }
        }

    }
}
