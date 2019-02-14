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
//        $languages = [
//            'English'       => ['en_GB' => 'forEnglish' ],
//            'Germany'       => ['de_DE' => 'forGermany' ],
//            'Turkey'        => ['tr_TR' => 'forTurkey'  ],
//            'Italy'         => ['it_IT' => 'forItaly'   ],
//            'France'        => ['fr_FR' => 'forFrance'  ],
//            'نائب عينة'     => ['ar_TN' => 'forArabian' ],
//        ];

        $languages = [
            'English'     => ['en_GB' => 'for_English' ],
            'Germany'     => ['de_DE' => 'for_Germany' ],
            'Spain'     => ['es_ES' => 'for_Spain' ],
            'France'     => ['fr_FR' => 'for_France' ],
            'Korean'     => ['ko_KR' => 'for_Korean' ],
            'Brazil'     => ['pt_BR' => 'for_Brazil' ],
            'Italy'     => ['it_IT' => 'for_Italy' ],
            'Japan'     => ['jp_JP' => 'for_Japan' ],
            'Arabian'     => ['ar_TN' => 'for_Arabian' ],
            'Greece'     => ['el_GR' => 'for_Greece' ],
            'Netherlands'     => ['nl_NL' => 'for_Netherlands' ],
            'China'     => ['zh_CN' => 'for_China' ],
            'Taiwan'     => ['zh_TW' => 'for_Taiwan' ],
            'Finland'     => ['fi_FI' => 'for_Finland' ],
            'Portugal'     => ['pt_PT' => 'for_Portugal' ],
            'Poland'     => ['pl_PL' => 'for_Poland' ],
            'Russia'     => ['ru_RU' => 'for_Russia' ],
            'India'     => ['hi_IN' => 'for_India' ],
            'Turkey'     => ['tr_TR' => 'for_Turkey' ],
            'Israel'     => ['he_IL' => 'for_Israel' ],
            'Denmark'     => ['da_DK' => 'for_Denmark' ],
            'Romania'     => ['ro_RO' => 'for_Romania' ],
            'Slovakia'     => ['sk_SK' => 'for_Slovakia' ],
            'Mexico'     => ['es_MX' => 'for_Mexico' ],
            'Philippines'     => ['tl_PH' => 'for_Philippines' ],
            'Czech'     => ['cs_CZ' => 'for_Czech' ],
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
