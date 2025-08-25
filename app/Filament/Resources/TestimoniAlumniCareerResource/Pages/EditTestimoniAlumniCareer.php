<?php

namespace App\Filament\Resources\TestimoniAlumniCareerResource\Pages;

use App\Filament\Resources\TestimoniAlumniCareerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditTestimoniAlumniCareer extends EditRecord
{
    protected static string $resource = TestimoniAlumniCareerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Testimoni alumni berhasil diperbarui')
            ->body('Data testimoni alumni career telah diupdate.');
    }
}