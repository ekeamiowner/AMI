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

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'volume_article', 'volume_id', 'article_id')
            ->withPivot(['from_page', 'to_page'])
            ->withTimestamps();
            return $this->hasMany(Article::class);
    }
    
}