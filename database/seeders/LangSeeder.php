<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langs')->insert([
            'name' => 'Türkçe',
            'code' => 'tr',
        ]);
        DB::table('langs')->insert([
            'name' => 'English',
            'code' => 'en',
        ]);
    }
}
