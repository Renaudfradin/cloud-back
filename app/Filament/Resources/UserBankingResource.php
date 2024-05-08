<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserBankingResource\Pages;
use App\Models\UserBanking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserBankingResource extends Resource
{
    protected static ?string $model = UserBanking::class;

    protected static ?string $recordTitleAttribute = 'bic';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'email')
                    ->required()
                    ->searchable()
                    ->preload(false)
                    ->native(false),

                Forms\Components\TextInput::make('iban')
                    ->required(),

                Forms\Components\TextInput::make('bic')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('user.email')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('iban')
                    ->label('IBAN')
                    ->sortable(),

                Tables\Columns\TextColumn::make('bic')
                    ->label('BIC')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserBankings::route('/'),
            'create' => Pages\CreateUserBanking::route('/create'),
            'view' => Pages\ViewUserBanking::route('/{record}'),
            'edit' => Pages\EditUserBanking::route('/{record}/edit'),
        ];
    }
}
