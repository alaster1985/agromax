<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conditions = [
            'default',
            '20\' DV container bulk',
            '20\' DV container 50 kg bags',
            '40\' DV container bulk',
            '40\' DV container 50 kg bags',
            '20\' RF container (refrigerated)',
            '40\' RF container (refrigerated)',
        ];
        foreach ($conditions as $condition){
            DB::table('conditions')->insert([
                'condition' => $condition,
            ]);
        }
    }
}
