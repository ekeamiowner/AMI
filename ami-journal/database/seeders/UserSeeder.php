<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory([
            'name' => 'Test Admin',
            'email' => 'admin@test.com',
            'accepted_reviewer' => '1',
        ])->create();

        User::factory([
            'name' => 'Test Reviewer',
            'email' => 'reviewer@test.com',
            'accepted_reviewer' => '1',
        ])->create();
        
        User::factory([
            'name' => 'Test User',
            'email' => 'user@test.com',
        ])->create();
    }
}
