<?php

use Illuminate\Database\Seeder;

class ProductsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'abcas  ádas',
                'price' => '110111',
                'description' => '',
                'cate_id' => 'MK',
                'image_id' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
