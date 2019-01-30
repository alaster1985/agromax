<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            'processing',
            'awaiting payment',
            'execution',
            'send',
            'finish',
            'rejected',
            ];
        foreach ($statuses as $value){
            DB::table('statuses')->insert([
                'status' => $value,
            ]);
        }
    }
}
