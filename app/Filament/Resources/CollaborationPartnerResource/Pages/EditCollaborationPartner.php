<?php

namespace App\Filament\Resources\CollaborationPartnerResource\Pages;

use App\Filament\Resources\CollaborationPartnerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCollaborationPartner extends EditRecord
{
    protected static string $resource = CollaborationPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
