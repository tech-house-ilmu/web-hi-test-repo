<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CollaborationPartnerResource\Pages;
use App\Models\CollaborationPartner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CollaborationPartnerResource extends Resource
{
    protected static ?string $model = CollaborationPartner::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'COMMUNITY COLLABORATION';

    protected static ?string $navigationLabel = 'Partner & Kolaborator';

    protected static ?string $modelLabel = 'Partner';

    protected static ?string $pluralModelLabel = 'Partner & Kolaborator';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nama Mitra / Partner')
                ->required(),
            Forms\Components\FileUpload::make('logo')
                ->label('Logo Mitra')
                ->image()
                ->directory('partners')
                ->required(),
            Forms\Components\TextInput::make('url')
                ->label('Website / Media Sosial Partner')
                ->url()
                ->placeholder('https://...'),
            Forms\Components\TextInput::make('sort_order')
                ->label('Urutan Logo')
                ->numeric()
                ->default(0),
            Forms\Components\Toggle::make('is_active')
                ->label('Aktif Ditampilkan')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo')
                    ->getStateUsing(fn ($record) => str_starts_with($record->logo, 'partner-') ? asset('img/partners/' . $record->logo) : asset('storage/' . $record->logo)),
                Tables\Columns\TextColumn::make('name')->label('Nama Mitra')->searchable()->weight('bold'),
                Tables\Columns\TextInputColumn::make('sort_order')->label('Urutan')->sortable(),
                Tables\Columns\ToggleColumn::make('is_active')->label('Status Aktif'),
            ])
            ->defaultSort('sort_order', 'asc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCollaborationPartners::route('/'),
            'create' => Pages\CreateCollaborationPartner::route('/create'),
            'edit' => Pages\EditCollaborationPartner::route('/{record}/edit'),
        ];
    }
}
