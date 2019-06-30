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
        $this->call(CategoryTablesSeeder::class);
        $this->call(ProductsTablesSeeder::class);
        $this->call(RolesTablesSeeder::class);
        $this->call(UsersTablesSeeder::class);
    }
}
