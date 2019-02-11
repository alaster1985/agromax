<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'admin',
            'moderator',
            'manager1',
        ];
        foreach ($user as $key => $value){
            DB::table('users')->insert([
                'name' => $value,
                'email' => $value . '@gmail.com',
                'password' => bcrypt($value . '@gmail.com'),
                'role_id' => $key + 1,
            ]);
        }

    }
}
