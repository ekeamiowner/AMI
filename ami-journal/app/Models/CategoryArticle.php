<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    protected $table = 'category_article';

    public $timestamps = false; // Mivel nincs időbélyeg, kikapcsoljuk

    /**
     * A CategoryArticle modell kapcsolatát a Category modellel definiáljuk.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * A CategoryArticle modell kapcsolatát az Article modellel definiáljuk.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
