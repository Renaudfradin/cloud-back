<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\Article;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class ArticlesQuery extends Query
{
    protected $attributes = [
        'name' => 'articles',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Article'));
    }

    public function resolve()
    {
        return Article::all();
    }
}
