<?php

namespace App\Filament\Resources\EventHistoryResource\Pages;

use App\Filament\Resources\EventHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEventHistory extends CreateRecord
{
    protected static string $resource = EventHistoryResource::class;
}
