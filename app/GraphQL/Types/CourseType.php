<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CourseType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Course',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::id(),
                'description' => 'The last_name of the user',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Created_at the user',
            ],
            'slug' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Updated_at the user',
            ],
            'content' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Created_at the user',
            ],
            'teacher_id' => [
                'type' => Type::id(),
                'description' => 'Updated_at the user',
            ],
            'category_id' => [
                'type' => Type::id(),
                'description' => 'The last_name of the user',
            ],
            'url_course_video' => [
                'type' => Type::string(),
                'description' => 'Teacher of the user',
            ],
            'external_link' => [
                'type' => Type::string(),
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
