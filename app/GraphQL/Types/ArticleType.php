<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Article;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ArticleType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Article',
        'model' => Article::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
                'description' => 'The id of the user',
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the user',
            ],
            'slug' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the user',
            ],
            'content' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the user',
            ],
            'image' => [
                'type' => Type::string(),
                'description' => 'The name of the user',
            ],
            'user_id' => [
                'type' => Type::id(),
                'description' => 'The name of the user',
            ],
            'category_id' => [
                'type' => Type::id(),
                'description' => 'The name of the user',
            ],
            'status' => [
                'type' => Type::boolean(),
                'description' => 'The name of the user',
            ],
            'created_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the user',
            ],
            'updated_at' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the user',
            ],
        ];
    }
}
