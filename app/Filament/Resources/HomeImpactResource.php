<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeImpactResource\Pages;
use App\Models\HomeImpact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeImpactResource extends Resource
{
    protected static ?string $model = HomeImpact::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $navigationGroup = 'HOME';

    protected static ?string $navigationLabel = 'Our Impact';

    protected static ?string $modelLabel = 'Statistik Dampak';

    protected static ?string $pluralModelLabel = 'Our Impact Statistics';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('value')
                ->label('Angka / Nilai Statistik')
                ->placeholder('Contoh: 65+, 126+, 20.000+')
                ->required(),
            Forms\Components\TextInput::make('label')
                ->label('Label / Keterangan')
                ->placeholder('Contoh: Program, Batch, Relawan')
                ->required(),
            Forms\Components\TextInput::make('tag')
                ->label('Tag / Kategori Singkat')
                ->placeholder('Contoh: PROGRAM, RELAWAN'),
            Forms\Components\TextInput::make('sort_order')
                ->label('Urutan Tampilan')
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
                Tables\Columns\TextColumn::make('value')->label('Nilai')->weight('bold'),
                Tables\Columns\TextColumn::make('label')->label('Label'),
                Tables\Columns\TextColumn::make('tag')->label('Tag'),
                Tables\Columns\TextColumn::make('sort_order')->label('Urutan')->sortable(),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('Status'),
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
            'index' => Pages\ListHomeImpacts::route('/'),
            'create' => Pages\CreateHomeImpact::route('/create'),
            'edit' => Pages\EditHomeImpact::route('/{record}/edit'),
        ];
    }
}
