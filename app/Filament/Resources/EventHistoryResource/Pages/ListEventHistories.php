<?php

namespace App\Filament\Resources\EventHistoryResource\Pages;

use App\Filament\Resources\EventHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventHistories extends ListRecords
{
    protected static string $resource = EventHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
