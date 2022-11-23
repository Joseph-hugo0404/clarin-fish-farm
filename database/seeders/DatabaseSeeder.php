<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('stock')->insert([
            'tilapia_stock' => '0',
            'carp_stock' => '0',
            'ornamental_stock' => '0',
            'cat_fish_stock' => '0',
            'beetle_fish_stock' => '0',
        ]);

        // DB::table('all_transaction')->insert([
        //     'tilapia' => '1',
        //     'carp' => '1',
        //     'ornamental' => '1',
        //     'cat_fish' => '1',
        //     'beetle_fish' => '1',
        // ]);
    }
}