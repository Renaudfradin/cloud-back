<?php

namespace App\Filament\Resources\UserBankingResource\Pages;

use App\Filament\Resources\UserBankingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserBankings extends ListRecords
{
    protected static string $resource = UserBankingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
