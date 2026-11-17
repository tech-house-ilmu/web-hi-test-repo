<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CollaborationDocumentationResource\Pages;
use App\Models\CollaborationDocumentation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CollaborationDocumentationResource extends Resource
{
    protected static ?string $model = CollaborationDocumentation::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';

    protected static ?string $navigationGroup = 'COMMUNITY COLLABORATION';

    protected static ?string $navigationLabel = 'Dokumentasi Kolaborasi';

    protected static ?string $modelLabel = 'Dokumentasi Kolaborasi';

    protected static ?string $pluralModelLabel = 'Dokumentasi Kolaborasi (Carousel)';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Keterangan / Alt Foto')
                ->default('Dokumentasi Kolaborasi House Ilmu Indonesia'),
            Forms\Components\Select::make('collaboration_type')
                ->label('Tampilkan Pada Halaman')
                ->options([
                    'all' => 'Semua Halaman Kolaborasi',
                    'community' => 'Community Collaboration',
                    'affiliate' => 'Affiliate',
                    'event' => 'Event Collaboration',
                    'media_partner' => 'Media Partner',
                ])
                ->default('all')
                ->required(),
            Forms\Components\FileUpload::make('image')
                ->label('Upload Foto Kegiatan')
                ->image()
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/heic', 'image/heif', 'image/*'])
                ->helperText('Format: JPEG, PNG, WEBP, HEIC')
                ->directory('collaboration-docs')
                ->required()
                ->columnSpanFull(),
            Forms\Components\TextInput::make('sort_order')
                ->label('Urutan Tampilan Slider')
                ->numeric()
                ->default(0),
            Forms\Components\Toggle::make('is_active')
                ->label('Aktif Ditampilkan (Jika dinonaktifkan, section ini akan tersembunyi)')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Foto'),
                Tables\Columns\TextColumn::make('title')->label('Keterangan')->limit(40),
                Tables\Columns\TextColumn::make('collaboration_type')->label('Halaman')->badge(),
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
            'index' => Pages\ListCollaborationDocumentations::route('/'),
            'create' => Pages\CreateCollaborationDocumentation::route('/create'),
            'edit' => Pages\EditCollaborationDocumentation::route('/{record}/edit'),
        ];
    }
}
