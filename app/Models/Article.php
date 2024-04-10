<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function article(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function article_category(): HasMany
    {
        return $this->hasMany(Article_category::class);
    }
}
