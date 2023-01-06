<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'access_name' => 'home',
        ]);
        DB::table('pages')->insert([
            'access_name' => 'about',
        ]);
        DB::table('pages')->insert([
            'access_name' => 'contact',
        ]);
    }
}
