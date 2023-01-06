<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $pages = DB::table('pages')->get();


        DB::table('page_details')->insert([
            'page_id' => $pages->where('access_name', 'home')->first()->id,
            'name' => 'Ana Sayfa',
            'title' => 'Ana Sayfa',
            'slug' => Str::slug('Ana Sayfa'),
            'lang' => 'tr',
        ]);

        DB::table('page_details')->insert([
            'page_id' => $pages->where('access_name', 'home')->first()->id,
            'name' => 'Home',
            'title' => 'Home',
            'slug' => Str::slug('Home'),
            'lang' => 'en',
        ]);


        DB::table('page_details')->insert([
            'page_id' => $pages->where('access_name', 'about')->first()->id,
            'name' => 'Hakkımızda',
            'title' => 'Hakkımızda',
            'slug' => Str::slug('Hakkımızda'),
            'lang' => 'tr',
        ]);

        DB::table('page_details')->insert([
            'page_id' => $pages->where('access_name', 'about')->first()->id,
            'name' => 'About',
            'title' => 'About',
            'slug' => Str::slug('About'),
            'lang' => 'en',
        ]);

        DB::table('page_details')->insert([
            'page_id' => $pages->where('access_name', 'contact')->first()->id,
            'name' => 'İletişim',
            'title' => 'İletişim',
            'slug' => Str::slug('İletişim'),
            'lang' => 'tr',
        ]);

        DB::table('page_details')->insert([
            'page_id' => $pages->where('access_name', 'contact')->first()->id,
            'name' => 'Contact',
            'title' => 'Contact',
            'slug' => Str::slug('Contact'),
            'lang' => 'en',
        ]);

        


        
    }
}
