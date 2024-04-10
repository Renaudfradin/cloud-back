<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArticleCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
