<?php

namespace App\Filament\Resources\UserBankingResource\Pages;

use App\Filament\Resources\UserBankingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserBanking extends EditRecord
{
    protected static string $resource = UserBankingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
