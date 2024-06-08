<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class CourseRelationManager extends RelationManager
{
    protected static string $relationship = 'course';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('teacher.email')
                    ->label(__('User Email')),

                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('Category')),
            ]);
    }
}
