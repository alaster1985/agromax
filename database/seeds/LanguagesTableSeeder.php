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
            '0English'     => ['en_GB' => 'for_English' ],
            '0Germany'     => ['de_DE' => 'for_Germany' ],
            '1Spain'     => ['es_ES' => 'for_Spain' ],
            '0France'     => ['fr_FR' => 'for_France' ],
            '1Korean'     => ['ko_KR' => 'for_Korean' ],
            '1Brazil'     => ['pt_BR' => 'for_Brazil' ],
            '0Italy'     => ['it_IT' => 'for_Italy' ],
            '1Japan'     => ['jp_JP' => 'for_Japan' ],
            '0Arabian'     => ['ar_TN' => 'for_Arabian' ],
            '1Greece'     => ['el_GR' => 'for_Greece' ],
            '1Netherlands'     => ['nl_NL' => 'for_Netherlands' ],
            '1China'     => ['zh_CN' => 'for_China' ],
            '1Taiwan'     => ['zh_TW' => 'for_Taiwan' ],
            '1Finland'     => ['fi_FI' => 'for_Finland' ],
            '1Portugal'     => ['pt_PT' => 'for_Portugal' ],
            '1Poland'     => ['pl_PL' => 'for_Poland' ],
            '1Russia'     => ['ru_RU' => 'for_Russia' ],
            '1India'     => ['hi_IN' => 'for_India' ],
            '0Turkey'     => ['tr_TR' => 'for_Turkey' ],
            '1Israel'     => ['he_IL' => 'for_Israel' ],
            '1Denmark'     => ['da_DK' => 'for_Denmark' ],
            '1Romania'     => ['ro_RO' => 'for_Romania' ],
            '1Slovakia'     => ['sk_SK' => 'for_Slovakia' ],
            '1Mexico'     => ['es_MX' => 'for_Mexico' ],
            '1Philippines'     => ['tl_PH' => 'for_Philippines' ],
            '1Czech'     => ['cs_CZ' => 'for_Czech' ],
        ];
        foreach ($languages as $name => $value) {
            foreach ($value as $key => $val) {
                DB::table('languages')->insert([
                    'name' => substr($name, 1),
                    'code' => $key,
                    'code_page' => $val,
                    'disable' => $name{0},
                ]);
            }

        }
    }
}
