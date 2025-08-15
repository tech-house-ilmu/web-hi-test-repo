<?php

namespace App\Filament\Resources\VpDetailsAboutResource\Pages;

use App\Filament\Resources\VpDetailsAboutResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVpDetailsAbout extends EditRecord
{
    protected static string $resource = VpDetailsAboutResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
