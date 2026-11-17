<?php

namespace App\Filament\Resources\HIProgrammeHeroResource\Pages;

use App\Filament\Resources\HIProgrammeHeroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHIProgrammeHero extends EditRecord
{
    protected static string $resource = HIProgrammeHeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
