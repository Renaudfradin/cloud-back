<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'model' => User::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
                'description' => 'The id of the user',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the user',
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of the user',
            ],
            'last_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The last_name of the user',
            ],
            'teacher' => [
                'type' => Type::nonNull(Type::boolean()),
                'description' => 'Teacher of the user',
            ],
            'created_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Created_at the user',
            ],
            'updated_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Updated_at the user',
            ]
        ];
    }
}
