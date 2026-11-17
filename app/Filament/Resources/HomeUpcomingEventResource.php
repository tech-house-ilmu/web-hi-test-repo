<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeUpcomingEventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeUpcomingEventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static ?string $navigationGroup = 'HOME';

    protected static ?string $navigationLabel = 'Upcoming Event (Prioritas Home)';

    protected static ?string $modelLabel = 'Prioritas Event Home';

    protected static ?string $pluralModelLabel = 'Prioritas Event Home';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Nama Event')
                ->disabled(),
            Forms\Components\TextInput::make('tagline')
                ->label('Tagline')
                ->disabled(),
            Forms\Components\TextInput::make('sort_order')
                ->label('Urutan / Prioritas di Home')
                ->numeric()
                ->helperText('Angka lebih kecil tampil lebih awal.')
                ->default(0),
            Forms\Components\Toggle::make('show_on_home')
                ->label('Tampilkan di Halaman Home?')
                ->default(true),
            Forms\Components\Toggle::make('is_active')
                ->label('Status Aktif')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Nama Event')->searchable()->weight('bold'),
                Tables\Columns\TextColumn::make('tagline')->label('Tagline')->limit(40),
                Tables\Columns\TextInputColumn::make('sort_order')->label('Prioritas / Urutan')->sortable(),
                Tables\Columns\ToggleColumn::make('show_on_home')->label('Muncul di Home'),
                Tables\Columns\ToggleColumn::make('is_active')->label('Status Aktif'),
            ])
            ->defaultSort('sort_order', 'asc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeUpcomingEvents::route('/'),
            'edit' => Pages\EditHomeUpcomingEvent::route('/{record}/edit'),
        ];
    }
}
