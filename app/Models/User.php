<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\EngineManager;
use Laravel\Scout\Engines\Engine;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;
    use Notifiable;
    use Searchable;

    protected $guarded = ['id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function searchableAs(): string
    {
        return 'users';
    }

    public function toSearchableArray(): array
    {
        return [
            'email' => $this->email,
            'last_name' => $this->last_name,
            'name' => $this->name,
        ];
    }

    public function searchableUsing(): Engine
    {
        return app(EngineManager::class)->engine('algolia');
    }

    public function courseslist(): HasMany
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_user');
    }

    public function subscription(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function user_banking(): HasOne
    {
        return $this->hasOne(UserBanking::class);
    }

    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function isTeacher(): bool
    {
        return $this->teacher === true;
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
