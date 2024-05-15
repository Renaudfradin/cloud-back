<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;

class Course extends Model
{
    use HasFactory;
    use HasApiTokens;
    use Searchable;

    protected $guarded = ['id'];

    public function searchableAs(): string
    {
        return 'course_index';
    }

    public function toSearchableArray() : array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'course_user');
    }

    public function category(): HasMany
    {
        return $this->hasMany(Category::class, 'name');
    }
}
