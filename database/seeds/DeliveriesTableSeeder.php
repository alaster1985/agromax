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
            'DDP',
            'DAP',
            'DAT',
            'CIP',
            'CPT',
            'CIF',
            'CFR',
            'FOB',
            'FAS',
            'FCA',
            'EXW',
        ];
        foreach ($deliveries as $value) {
            DB::table('deliveries')->insert([
                'name' => $value,
            ]);
        }
    }
}
