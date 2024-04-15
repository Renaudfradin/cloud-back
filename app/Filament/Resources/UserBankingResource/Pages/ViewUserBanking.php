<?php

namespace App\Filament\Resources\UserBankingResource\Pages;

use App\Filament\Resources\UserBankingResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUserBanking extends ViewRecord
{
    protected static string $resource = UserBankingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
