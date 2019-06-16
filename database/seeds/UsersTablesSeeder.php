<?php

use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'administer@gmail.com',
                'password' => bcrypt('sean080597'),
                'sex' => '0',
                'address' => 'ádasd',
                'phone' => '0122142',
                'role_id' => 'adm',
                'image_id' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
