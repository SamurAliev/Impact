<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'main_title' => 'IMPACT - маркетинговое агенство по продвижению бренда в цифровом пространстве',
            'partners_title'=> 'Нашим профессионалам доверяют:'
        ]);
    }
}
