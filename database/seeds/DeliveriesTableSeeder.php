<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deliveries = [
            'CIF',
            'FOB',
            'CCP',
        ];
        foreach ($deliveries as $value) {
            DB::table('deliveries')->insert([
                'name' => $value,
            ]);
        }
    }
}
