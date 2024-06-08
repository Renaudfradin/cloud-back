<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;

final readonly class Logout
{
    public function __invoke()
    {
        Auth::user()->currentAccessToken()->delete();

        return 'Successfully logged out';
    }
}
