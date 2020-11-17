<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'main_title' => 'Оставьте заявку и мы свяжемся с вами',
            'name_input'=> 'Имя',
            'number_input'=> 'Номер',
            'button_send'=>'Отправить запрос'
        ]);
    }
}
