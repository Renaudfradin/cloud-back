<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class ArticleCategory extends Model
{
    use HasApiTokens;
    use HasFactory;

    protected $guarded = ['id'];

    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
