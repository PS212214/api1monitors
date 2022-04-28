<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Asus',

        ]);
        DB::table('brands')->insert([
            'name' => 'BenQ',

        ]);
        DB::table('brands')->insert([
            'name' => 'Dell',

        ]);
        DB::table('brands')->insert([
            'name' => 'HP',

        ]);
        DB::table('brands')->insert([
            'name' => 'LG',

        ]);
        DB::table('brands')->insert([
            'name' => 'Samsung',

        ]);
        DB::table('brands')->insert([
            'name' => 'Acer',

        ]);
        DB::table('brands')->insert([
            'name' => 'Philips',

        ]);
        DB::table('brands')->insert([
            'name' => 'Apple',

        ]);
    }
}
