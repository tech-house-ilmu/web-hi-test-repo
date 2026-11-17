<?php

namespace App\Filament\Resources\HomeImpactResource\Pages;

use App\Filament\Resources\HomeImpactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeImpacts extends ListRecords
{
    protected static string $resource = HomeImpactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
