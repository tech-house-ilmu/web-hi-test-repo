<?php

namespace App\Filament\Resources\HIProgrammeHeroResource\Pages;

use App\Filament\Resources\HIProgrammeHeroResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHIProgrammeHero extends CreateRecord
{
    protected static string $resource = HIProgrammeHeroResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
