<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            'English' => ['en_GB' => 'forEnglish'],
            'Germany' => ['de_DE' => 'forGermany'],
            'Turkey' => ['tr_TR' => 'forTurkey'],
            'Italy' => ['it_IT' => 'forItaly'],
            'France' => ['fr_FR' => 'forFrance'],
            'نائب عينة' => ['ar_TN' => 'forArabian'],
        ];
        foreach ($languages as $name => $value) {
            foreach ($value as $key => $val) {
                DB::table('languages')->insert([
                    'name' => $name,
                    'code' => $key,
                    'code_page' => $val,
                ]);
            }

        }
    }
}
