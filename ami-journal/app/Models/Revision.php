<?php

namespace App\Models;

use App\Traits\ApiResource;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Revision extends Model
{
    use HasFactory, ApiResource;

    protected $fillable = ['article_id'];

    public function article(): BelongsTo {
        return $this->belongsTo(Article::class);
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class)->withPivot(['state', 'content']);
    }
}
