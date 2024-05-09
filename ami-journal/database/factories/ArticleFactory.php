<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use App\Models\Volume;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition() : array
    {
        return [
            'title' => $this->faker->sentence(),
            'user_id' => User::factory()->create()->id,
            'abstract' => $this->faker->paragraph(),
            'state' => $this->faker->numberBetween(0, 10),
            'volume_id' => Volume::factory()->create()->id
        ];
    }
}
