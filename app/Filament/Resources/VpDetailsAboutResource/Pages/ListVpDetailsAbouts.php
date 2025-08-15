<?php

namespace App\Filament\Resources\VpDetailsAboutResource\Pages;

use App\Filament\Resources\VpDetailsAboutResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVpDetailsAbouts extends ListRecords
{
    protected static string $resource = VpDetailsAboutResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
