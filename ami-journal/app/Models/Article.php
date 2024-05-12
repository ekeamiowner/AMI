<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $table = 'articles';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'editor_id',
        'title',
        'abstract',
        'type_id',
        'note',
        'source',
        'latex_path',
        'state',
        'recommended_editor_id'
    ];

    protected $casts = [
        'deleted_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'editor_id');
    }

    public function recommended_editor()
    {
        return $this->belongsTo(User::class, 'recommended_editor_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function revisions()
    {
        return $this->hasMany(Revision::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_article', 'article_id', 'category_id');
    }

    public function volumes()
    {
        return $this->belongsToMany(Volume::class, 'volume_article', 'article_id', 'volume_id')
            ->withPivot(['from_page', 'to_page']);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}