<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class VolumeArticle extends Model
{
    protected $table = 'volume_article';

    public $timestamps = true;
    public function volumes(): BelongsToMany
    {
        return $this->belongsToMany(Volume::class, 'volume_article', 'article_id', 'volume_id')
            ->withPivot(['from_page', 'to_page'])
            ->withTimestamps();
    }
}
