<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stages = [
            'first_stage',
            'second_stage',
        ];
        foreach ($stages as $value){
            DB::table('stages')->insert([
                'stage' => $value,
            ]);
        }

    }
}
