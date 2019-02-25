<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $social = [
            'skype' => '+380919861009',
            'viber' => '380919861009',
            'whatsapp' => '380919861009',
            'telegram' => 'tuufiagro',
            'facebook' => 'https://www.facebook.com',
            'linkedin' => 'https://www.linkedin.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://www.instagram.com',
        ];
        foreach ($social as $key => $value){
            DB::table('socials')->insert([
                'name' => $key,
                'contact' => $value,
            ]);
        }
    }
}
