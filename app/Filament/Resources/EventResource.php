<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = 'HI PROGRAMME';

    protected static ?string $navigationLabel = 'Upcoming Event (Detail Event)';

    protected static ?string $modelLabel = 'Event';

    protected static ?string $pluralModelLabel = 'Upcoming Events';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Nama Event')
                    ->required(),

                TextInput::make('tagline')
                    ->required(),

                RichEditor::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('registration_link')
                    ->label('Link Pendaftaran')
                    ->url()
                    ->required(),

                FileUpload::make('images')
                    ->multiple()
                    ->maxFiles(3)
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/heic', 'image/heif', 'image/*'])
                    ->helperText('Format: JPEG, PNG, WEBP, HEIC')
                    ->disk('public')// Simpan di disk publik
                    ->directory('event')
                    ->required(),

                TextInput::make('sort_order')
                    ->label('Urutan / Prioritas Tampilan')
                    ->numeric()
                    ->default(0),

                Toggle::make('show_on_home')
                    ->label('Tampilkan di Halaman Utama (Home)?')
                    ->default(true),

                Toggle::make('is_active')
                    ->label('Status Aktif')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Nama Event')
                    ->searchable(),

                TextColumn::make('tagline')
                    ->label('Tagline Event'),

                IconColumn::make('is_active')
                    ->label('Status Aktif')
                    ->boolean(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
