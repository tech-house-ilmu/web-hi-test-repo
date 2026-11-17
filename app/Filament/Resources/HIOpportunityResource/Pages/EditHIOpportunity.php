<?php

namespace App\Filament\Resources\HIOpportunityResource\Pages;

use App\Filament\Resources\HIOpportunityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHIOpportunity extends EditRecord
{
    protected static string $resource = HIOpportunityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
