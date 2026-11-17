<?php

namespace App\Filament\Resources\CollaborationPartnerResource\Pages;

use App\Filament\Resources\CollaborationPartnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCollaborationPartners extends ListRecords
{
    protected static string $resource = CollaborationPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
