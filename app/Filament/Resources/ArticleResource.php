<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'ARTICLES';

    protected static ?string $navigationLabel = 'Manajemen Artikel';

    protected static ?string $modelLabel = 'Artikel';

    protected static ?string $pluralModelLabel = 'Daftar Artikel';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->required()->label('Judul Artikel')->live(onBlur: true),
            Select::make('category')
                ->label('Kategori')
                ->options([
                    'promotional' => 'Promotional',
                    'education' => 'Education',
                    'entertainment' => 'Entertainment',
                    'engagement' => 'Engagement',
                    'inspiration' => 'Inspiration',
                ])
                ->required(),
            TextInput::make('editor')->required(),
            TextInput::make('author')->required(),
            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true)
                ->helperText('Contoh: kamu-harus-tahu-5-fakta-unik'),
            DatePicker::make('date')->label('Tanggal')->required(),
            TextInput::make('sort_order')
                ->label('Urutan Tampilan')
                ->numeric()
                ->default(0)
                ->helperText('Angka lebih kecil tampil lebih dulu.'),
            Toggle::make('is_featured')
                ->label('Jadikan Artikel Utama / Sorotan (Featured)')
                ->default(false),
            Toggle::make('is_published')
                ->label('Status Tayang (Published)')
                ->default(true),
            FileUpload::make('img')
                ->image()
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/heic', 'image/heif', 'image/*'])
                ->helperText('Format: JPEG, PNG, WEBP, HEIC')
                ->directory('articles')
                ->label('Gambar')
                ->required()
                ->imagePreviewHeight('300')
                ->columnSpan(2),
            RichEditor::make('text')->label('Isi Artikel')->required()->columnSpan(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable()->limit(50),
                TextColumn::make('author')->sortable(),
                BadgeColumn::make('category')->badge()->sortable(),
                Tables\Columns\TextInputColumn::make('sort_order')->label('Urutan')->sortable(),
                Tables\Columns\ToggleColumn::make('is_featured')
                    ->label('Featured')
                    ->afterStateUpdated(function ($record, $state) {
                        if ($state) {
                            // Nonaktifkan featured pada artikel lain agar hanya 1 artikel utama
                            Article::where('id', '!=', $record->id)->where('is_featured', true)->update(['is_featured' => false]);
                        }
                    }),
                Tables\Columns\ToggleColumn::make('is_published')->label('Tayang'),

                Tables\Columns\TextColumn::make('date')
                    ->label('Tanggal')
                    ->date('d/m/Y')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'entrepreneur' => 'Entrepreneur',
                        'career-development' => 'Career Development',
                        'skill-development' => 'Skill Development',
                    ]),
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
