<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Subscription;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class SubscriptionType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Subscription',
        'model' => Subscription::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
                'description' => 'The last_name of the user',
            ],
            'user_id' => [
                'type' => Type::id(),
                'description' => 'The last_name of the user',
            ],
            'expiration_date' => [
                'type' => Type::nonNull(Type::string()),
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
