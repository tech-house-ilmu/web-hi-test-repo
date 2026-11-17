<?php

namespace App\Filament\Resources\HIProgrammeHeroResource\Pages;

use App\Filament\Resources\HIProgrammeHeroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHIProgrammeHeroes extends ListRecords
{
    protected static string $resource = HIProgrammeHeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
