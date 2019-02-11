<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(DeliveriesTableSeeder::class);
        $this->call(StagesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(DescriptionsTableSeeder::class);
        $this->call(LotsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
