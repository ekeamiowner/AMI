<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory([
            'full_name' => 'Site Admin',
            'email' => 'admin@test.com',
         ])->create();
        User::factory([
                          'full_name' => 'Test Editor',
                          'email' => 'editor@test.com',
                      ])->create();
        User::factory([
                          'full_name' => 'Test Technical Editor',
                          'email' => 'technical@test.com',
                      ])->create();
        User::factory(50)->create();
    }
}
