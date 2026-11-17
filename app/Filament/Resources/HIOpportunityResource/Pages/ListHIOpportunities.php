<?php

namespace App\Filament\Resources\HIOpportunityResource\Pages;

use App\Filament\Resources\HIOpportunityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHIOpportunities extends ListRecords
{
    protected static string $resource = HIOpportunityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
