<?php

namespace App\Models;

use App\Traits\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory, ApiResource;

    protected $fillable = ['content', 'user_id', 'revision_id', 'state'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function revision(): BelongsTo
    {
        return $this->belongsTo(Revision::class);
    }

}
