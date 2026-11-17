<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeHeroResource\Pages;
use App\Models\HomeHero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeHeroResource extends Resource
{
    protected static ?string $model = HomeHero::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationGroup = 'HOME';

    protected static ?string $navigationLabel = 'Hero Section';

    protected static ?string $modelLabel = 'Hero Section';

    protected static ?string $pluralModelLabel = 'Hero Section Home';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Konten Teks & CTA')->schema([
                Forms\Components\TextInput::make('headline')
                    ->label('Headline Utama')
                    ->required()
                    ->default('Learn, Grow, and Get Achievement Together'),
                Forms\Components\Textarea::make('subtitle')
                    ->label('Sub-judul / Paragraf')
                    ->rows(3)
                    ->required(),
                Forms\Components\Grid::make(2)->schema([
                    Forms\Components\TextInput::make('cta_text')
                        ->label('Teks Tombol CTA')
                        ->default('Jelajahi Semua Program')
                        ->required(),
                    Forms\Components\TextInput::make('cta_link')
                        ->label('Link Tombol CTA')
                        ->default('/programme/HI-programmes')
                        ->required(),
                ]),
                Forms\Components\Toggle::make('is_active')
                    ->label('Aktifkan Hero Ini')
                    ->default(true),
            ]),

            Forms\Components\Section::make('Banner / Slides Gambar')->schema([
                Forms\Components\Repeater::make('slides')
                    ->label('Daftar Banner Slider')
                    ->schema([
                        Forms\Components\FileUpload::make('img')
                            ->label('Upload Gambar Banner')
                            ->image()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/heic', 'image/heif', 'image/*'])
                            ->helperText('Format: JPEG, PNG, WEBP, HEIC')
                            ->directory('homepage')
                            ->columnSpan(1),
                        Forms\Components\TextInput::make('alt')
                            ->label('Alt Teks Gambar')
                            ->default('House Ilmu Indonesia')
                            ->columnSpan(1),
                    ])
                    ->columns(2)
                    ->collapsible()
                    ->defaultItems(1),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('headline')->limit(40)->searchable(),
                Tables\Columns\TextColumn::make('cta_text')->label('CTA Button'),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('Status Aktif'),
                Tables\Columns\TextColumn::make('updated_at')->dateTime('d/m/Y H:i')->label('Terakhir Diubah'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeHeroes::route('/'),
            'create' => Pages\CreateHomeHero::route('/create'),
            'edit' => Pages\EditHomeHero::route('/{record}/edit'),
        ];
    }
}
