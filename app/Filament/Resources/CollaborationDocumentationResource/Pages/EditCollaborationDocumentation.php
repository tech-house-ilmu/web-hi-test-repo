<?php

namespace App\Filament\Resources\CollaborationDocumentationResource\Pages;

use App\Filament\Resources\CollaborationDocumentationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCollaborationDocumentation extends EditRecord
{
    protected static string $resource = CollaborationDocumentationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
