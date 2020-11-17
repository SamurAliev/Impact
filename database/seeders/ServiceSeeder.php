<?php

namespace Database\Seeders;

use App\Models\Description;
use App\Models\Service;
use App\Models\Tariff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::factory()->count(6)->create()->each(function($service) {
            $service->descriptions()->saveMany(Description::factory()->count(3)->make());
            $service->tariffs()->saveMany(Tariff::factory()->count(5)->make());
        });
    }
}
