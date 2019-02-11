<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin' => 'CRUD lots, orders, categories, users',
            'moderator' => 'CRUD lots, orders, categories',
            'manager' => 'RU orders, R lots, categories',
        ];
        foreach ($roles as $role => $description) {
            DB::table('roles')->insert([
                'role' => $role,
                'description' => $description,
            ]);
        }
    }
}
