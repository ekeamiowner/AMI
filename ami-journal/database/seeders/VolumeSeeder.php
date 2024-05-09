<?php

namespace Database\Seeders;

use App\Models\Volume;
use Illuminate\Database\Seeder;

class VolumeSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 2; $i++) {
            Volume::create([
                'title' => 'Vol. ' . $i . ' (2024)',
                'description' => 'This is the description for Volume ' . $i . '.',
                'release_year' => 2024,
                'created_at' => '2024-05-09 10:00:' . $i,
            ]);
        }
    }
}
