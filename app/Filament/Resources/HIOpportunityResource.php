<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HIOpportunityResource\Pages;
use App\Models\HITCCCategory;
use App\Models\HITCCProgramme;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class HIOpportunityResource extends Resource
{
    protected static ?string $model = HITCCProgramme::class;

    protected static ?string $slug = 'hi-opportunities';

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'HI OPPORTUNITIES';

    protected static ?string $navigationLabel = 'Peluang & Produk';

    protected static ?string $modelLabel = 'Peluang';

    protected static ?string $pluralModelLabel = 'Peluang & Produk (HI Opportunities)';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Informasi Peluang / Program')->schema([
                Forms\Components\Select::make('category_id')
                    ->label('Kategori Peluang')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Forms\Components\TextInput::make('title_program')
                    ->label('Judul Peluang / Program')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug URL')
                    ->required()
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('company_name')
                    ->label('Nama Lembaga / Penyelenggara')
                    ->default('House Ilmu Indonesia'),
                Forms\Components\Textarea::make('company_desc')
                    ->label('Deskripsi Singkat')
                    ->rows(3),
                Forms\Components\TextInput::make('registration_info')
                    ->label('Informasi Pendaftaran / Link'),
                Forms\Components\FileUpload::make('bg_poster_img')
                    ->label('Poster / Gambar')
                    ->image()
                    ->directory('opportunities'),
                Forms\Components\TextInput::make('sort_order')
                    ->label('Urutan Tampilan')
                    ->numeric()
                    ->default(0),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('bg_poster_img')->label('Poster'),
                Tables\Columns\TextColumn::make('title_program')->label('Judul')->searchable()->weight('bold'),
                Tables\Columns\TextColumn::make('category.name')->label('Kategori')->badge(),
                Tables\Columns\TextColumn::make('company_name')->label('Penyelenggara'),
                Tables\Columns\TextColumn::make('sort_order')->label('Urutan')->sortable(),
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
            'index' => Pages\ListHIOpportunities::route('/'),
            'create' => Pages\CreateHIOpportunity::route('/create'),
            'edit' => Pages\EditHIOpportunity::route('/{record}/edit'),
        ];
    }
}
