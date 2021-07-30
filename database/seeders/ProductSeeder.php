<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 40; $i++) {
            DB::table('products')->insert([
                'product_category_id' => rand(1, 14),
                'product_brand_id' => rand(1, 5),
                'name' => Str::random(15),
                'intro' => Str::random(30),
                'created_at' => Carbon::now()
            ]);
        }
    }
}
