<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'role_id' => 1,
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(10)
        ]);
        DB::table('users')->insert([
            'name' => 'moder',
            'email' => 'moder@example.com',
            'role_id' => 2,
            'email_verified_at' => now(),
            'password' => bcrypt('moder'),
            'remember_token' => Str::random(10)
        ]);
    }
}
