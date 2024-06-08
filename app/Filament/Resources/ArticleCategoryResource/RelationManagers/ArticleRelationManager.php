<?php

namespace App\Filament\Resources\ArticleCategoryResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ArticleRelationManager extends RelationManager
{
    protected static string $relationship = 'article';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                Tables\Columns\TextColumn::make('id'),
            ]);
    }
}
