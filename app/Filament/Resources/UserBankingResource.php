<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserBankingResource\Pages;
use App\Filament\Resources\UserBankingResource\RelationManagers;
use App\Models\UserBanking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserBankingResource extends Resource
{
    protected static ?string $model = UserBanking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserBankings::route('/'),
            'create' => Pages\CreateUserBanking::route('/create'),
            'edit' => Pages\EditUserBanking::route('/{record}/edit'),
        ];
    }
}
