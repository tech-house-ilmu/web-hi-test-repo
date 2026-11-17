<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HIProgrammeHeroResource\Pages;
use App\Models\HIProgrammeHero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HIProgrammeHeroResource extends Resource
{
    protected static ?string $model = HIProgrammeHero::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';

    protected static ?string $navigationLabel = 'Hero HI Programme';

    protected static ?string $modelLabel = 'Hero Program';

    protected static ?string $pluralModelLabel = 'Hero Program HI';

    protected static ?string $navigationGroup = 'HI PROGRAMME';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Slider Hero')
                    ->description('Kelola keterangan judul, tipe program (daring/luring), dan poster gambar yang tampil di slider hero halaman HI Programme.')
                    ->schema([
                        Forms\Components\Grid::make(2)->schema([
                            Forms\Components\TextInput::make('title')
                                ->label('Nama Program')
                                ->helperText('Contoh: Webskill, Workskill, Chill-Ups')
                                ->required()
                                ->maxLength(255),

                            Forms\Components\TextInput::make('type')
                                ->label('Keterangan / Tipe Program')
                                ->helperText('Contoh: Program Daring atau Program Luring')
                                ->required()
                                ->default('Program Daring')
                                ->maxLength(255),

                            Forms\Components\TextInput::make('badge')
                                ->label('Badge Singkat (Opsional)')
                                ->helperText('Contoh: Webskill')
                                ->maxLength(100),

                            Forms\Components\TextInput::make('sort_order')
                                ->label('Urutan Slider')
                                ->numeric()
                                ->default(0)
                                ->helperText('Semakin kecil nilainya, semakin awal posisinya di slider (1, 2, 3...)'),
                        ]),

                        Forms\Components\FileUpload::make('image')
                            ->label('Poster Gambar Program')
                            ->image()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/heic', 'image/heif', 'image/*'])
                            ->disk('public')
                            ->directory('programmes-hero')
                            ->visibility('public')
                            ->helperText('Format yang didukung: JPEG, PNG, WEBP, HEIC. Kosongkan jika ingin memakai poster default.')
                            ->imagePreviewHeight('280')
                            ->columnSpanFull(),

                        Forms\Components\Textarea::make('desc')
                            ->label('Deskripsi Singkat')
                            ->rows(3)
                            ->columnSpanFull(),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktifkan di Slider Hero?')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Poster')
                    ->disk('public')
                    ->square()
                    ->defaultImageUrl(fn ($record) => asset($record->image && file_exists(public_path($record->image)) ? $record->image : 'img/programmes/poster-webskill.webp')),

                Tables\Columns\TextColumn::make('title')
                    ->label('Nama Program')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('type')
                    ->label('Keterangan / Tipe')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Program Daring' => 'info',
                        'Program Luring' => 'warning',
                        default => 'gray',
                    })
                    ->searchable(),

                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d/m/Y H:i')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order', 'asc')
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
            'index' => Pages\ListHIProgrammeHeroes::route('/'),
            'create' => Pages\CreateHIProgrammeHero::route('/create'),
            'edit' => Pages\EditHIProgrammeHero::route('/{record}/edit'),
        ];
    }
}
