<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('main')->insert([
            'main_title' => 'Влияйте на бизнес правильно',
            'application_text'=> 'Оставить заявку',
            'description_title'=>'Компания IMPACT',
            'description_content'=> 'Агентство по продвижению вашего бренда в цифровом пространстве'
        ]);
    }
}
