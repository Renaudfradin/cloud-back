<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\UserBanking;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserBankingType extends GraphQLType
{
    protected $attributes = [
        'name' => 'UserBankin',
        'model' => UserBanking::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
                'description' => 'The id of the user',
            ],
            'user_id' => [
                'type' => Type::id(),
                'description' => 'The name of the user',
            ],
            'iban' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of the user',
            ],
            'bic' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the user',
            ],
            'created_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of the user',
            ],
            'updated_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of the user',
            ],
        ];
    }
}
