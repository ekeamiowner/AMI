<?php

namespace App\Models;

use App\Traits\ApiResource;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Volume extends Model
{
    use HasFactory, ApiResource;

    protected $fillable = ['title', 'description', 'release_year'];

    public function getTitleAttribute(): string
    {
        return $this->title ?? "#$this->id"; // Változtatás a mezőnévben, az angol változat alapján
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
