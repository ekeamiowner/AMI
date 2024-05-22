<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Editor;
use App\Models\Type;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) 
        {
            Article::create([
                'user_id' => 3,
                'editor_id' => 2,
                'recommended_editor_id' => 2,
                'title' => 'Article ' . $i,
                'abstract' => 'This is the abstract for Article ' . $i . '.',
                'state' => 'ACCEPTED',
                'page_count' => 10,
                'note' => 'This is a note for Article ' . $i,
                'language' => 'en',
                'doi' => '10.33039/ami.2024.05.09.' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'source' => 'pdf/8iMrRJFF72pwzXgLOchkFNPkBjN2QwJzb3w8zOOA.pdf',
                'type_id' => 1,
                'latex_path' => 'latex/diI6y09xKsBH5yBBYB0Tk9heOumm9RDKoCfcqHks.tex',
                'created_at' => '2024-05-09 10:00:' . $i,
                'updated_at' => '2024-05-09 10:00:' . $i,
            ]);
        }

        for ($i = 6; $i <= 10; $i++) 
        {
            Article::create([
                'user_id' => 3,
                'editor_id' => 2,
                'recommended_editor_id' => 2,
                'title' => 'Article ' . $i,
                'abstract' => 'This is the abstract for Article ' . $i . '.',
                'state' => 'ACCEPTED',
                'page_count' => 10,
                'note' => 'This is a note for Article ' . $i,
                'language' => 'en',
                'doi' => '10.33039/ami.2024.05.09.' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'source' => 'pdf/8iMrRJFF72pwzXgLOchkFNPkBjN2QwJzb3w8zOOA.pdf',
                'type_id' => 2,
                'latex_path' => 'latex/diI6y09xKsBH5yBBYB0Tk9heOumm9RDKoCfcqHks.tex',
                'created_at' => '2024-05-09 10:00:' . $i,
                'updated_at' => '2024-05-09 10:00:' . $i,
            ]);
        }

        for ($i = 11; $i <= 13; $i++) 
        {
            Article::create([
                'user_id' => 3,
                'editor_id' => 2,
                'recommended_editor_id' => 2,
                'title' => 'Article ' . $i,
                'abstract' => 'This is the abstract for Article ' . $i . '.',
                'state' => 'ACCEPTED',
                'page_count' => 10,
                'note' => 'This is a note for Article ' . $i,
                'language' => 'en',
                'doi' => '10.33039/ami.2024.05.09.' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'source' => 'pdf/8iMrRJFF72pwzXgLOchkFNPkBjN2QwJzb3w8zOOA.pdf',
                'type_id' => 1,
                'latex_path' => 'latex/diI6y09xKsBH5yBBYB0Tk9heOumm9RDKoCfcqHks.tex',
                'created_at' => '2024-05-09 10:00:' . $i,
                'updated_at' => '2024-05-09 10:00:' . $i,
            ]);
        }

        for ($i = 14; $i <= 15; $i++) 
        {
            Article::create([
                'user_id' => 3,
                'editor_id' => 2,
                'recommended_editor_id' => 2,
                'title' => 'Article ' . $i,
                'abstract' => 'This is the abstract for Article ' . $i . '.',
                'state' => 'ACCEPTED',
                'page_count' => 10,
                'note' => 'This is a note for Article ' . $i,
                'language' => 'en',
                'doi' => '10.33039/ami.2024.05.09.' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'source' => 'pdf/8iMrRJFF72pwzXgLOchkFNPkBjN2QwJzb3w8zOOA.pdf',
                'type_id' => 2,
                'latex_path' => 'latex/diI6y09xKsBH5yBBYB0Tk9heOumm9RDKoCfcqHks.tex',
                'created_at' => '2024-05-09 10:00:' . $i,
                'updated_at' => '2024-05-09 10:00:' . $i,
            ]);
        }

        for ($i = 16; $i <= 20; $i++) 
        {
            Article::create([
                'user_id' => 3,
                'editor_id' => 2,
                'recommended_editor_id' => 2,
                'title' => 'Article ' . $i,
                'abstract' => 'This is the abstract for Article ' . $i . '.',
                'state' => 'SUBMITTED',
                'page_count' => 10,
                'note' => 'This is a note for Article ' . $i,
                'language' => 'en',
                'doi' => '10.33039/ami.2024.05.09.' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'source' => 'pdf/8iMrRJFF72pwzXgLOchkFNPkBjN2QwJzb3w8zOOA.pdf',
                'type_id' => 1,
                'latex_path' => 'latex/diI6y09xKsBH5yBBYB0Tk9heOumm9RDKoCfcqHks.tex',
                'created_at' => '2024-05-09 10:00:' . $i,
                'updated_at' => '2024-05-09 10:00:' . $i,
            ]);
        }
        
    }
}
