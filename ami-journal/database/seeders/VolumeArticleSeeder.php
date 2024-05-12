<?php

namespace Database\Seeders;

use App\Models\VolumeArticle;
use Illuminate\Database\Seeder;

class VolumeArticleSeeder extends Seeder
{
    public function run(): void
    {   
        for ($volume_id = 1; $volume_id <= 2; $volume_id++) {
            for ($article_id = ($volume_id - 1) * 10 + 1, $page = 1; $article_id <= $volume_id * 10; $article_id++, $page += 10) {
                VolumeArticle::create([
                    'volume_id' => $volume_id,
                    'article_id' => $article_id,
                    'from_page' => $page,
                    'to_page' => $page + 9,
                ]);
            }
        }
    }
}