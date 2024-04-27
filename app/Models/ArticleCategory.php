<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Sanctum\HasApiTokens;

class ArticleCategory extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $guarded = ['id'];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
