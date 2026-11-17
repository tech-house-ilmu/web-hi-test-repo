<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CollaborationTypeResource\Pages;
use App\Models\CollaborationType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CollaborationTypeResource extends Resource
{
    protected static ?string $model = CollaborationType::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'COMMUNITY COLLABORATION';

    protected static ?string $navigationLabel = 'Tipe & Info Kolaborasi';

    protected static ?string $modelLabel = 'Tipe Kolaborasi';

    protected static ?string $pluralModelLabel = 'Tipe & Info Kolaborasi';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Informasi Utama')->schema([
                Forms\Components\TextInput::make('title')->label('Judul Tipe Kolaborasi')->required(),
                Forms\Components\TextInput::make('slug')->label('Slug')->disabled()->required(),
                Forms\Components\Textarea::make('description')->label('Deskripsi Kolaborasi')->rows(3)->required(),
                Forms\Components\Textarea::make('for_who')->label('Untuk Siapa')->rows(2)->required(),
            ]),

            Forms\Components\Section::make('Poin-Poin Detail')->schema([
                Forms\Components\Repeater::make('process')
                    ->label('Proses Kolaborasi (Langkah-Langkah)')
                    ->simple(Forms\Components\TextInput::make('step')->required()),

                Forms\Components\Repeater::make('activities')
                    ->label('Daftar Aktivitas')
                    ->simple(Forms\Components\TextInput::make('activity')->required()),

                Forms\Components\Repeater::make('benefits')
                    ->label('Daftar Manfaat')
                    ->simple(Forms\Components\TextInput::make('benefit')->required()),

                Forms\Components\Textarea::make('example')
                    ->label('Contoh Kolaborasi')
                    ->rows(3),
            ]),

            Forms\Components\Section::make('Call to Action (CTA)')->schema([
                Forms\Components\TextInput::make('cta_title')->label('Judul CTA')->default('MARI MENCIPTAKAN DAMPAK BERMAKNA BERSAMA'),
                Forms\Components\TextInput::make('cta_text')->label('Teks Tombol')->default('Mari Berkolaborasi'),
                Forms\Components\TextInput::make('cta_link')->label('Link Tombol')->default('https://bit.ly/PartnershipHouseilmu'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Nama Kolaborasi')->weight('bold'),
                Tables\Columns\TextColumn::make('slug')->label('Slug')->badge(),
                Tables\Columns\TextColumn::make('description')->label('Deskripsi')->limit(60),
                Tables\Columns\TextColumn::make('updated_at')->dateTime('d/m/Y H:i')->label('Terakhir Diubah'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCollaborationTypes::route('/'),
            'edit' => Pages\EditCollaborationType::route('/{record}/edit'),
        ];
    }
}
