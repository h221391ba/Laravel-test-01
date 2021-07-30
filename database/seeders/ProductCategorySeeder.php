<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use Illuminate\Support\Carbon;



class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2; $i++) {
            DB::table('product_categories')->insert([
                'name' => Str::random(8),
                'created_at' => Carbon::now()
            ]);
        }
    }
}
