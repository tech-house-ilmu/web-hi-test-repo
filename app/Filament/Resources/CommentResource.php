<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;
    protected static ?string $navigationIcon   = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationLabel  = 'Komentar Artikel';
    protected static ?string $pluralModelLabel = 'Komentar Artikel';
    protected static ?string $modelLabel       = 'Komentar';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('article_id')
                ->label('Artikel')
                ->relationship('article', 'title')
                ->disabled(),
            Forms\Components\TextInput::make('name')->label('Nama')->disabled(),
            Forms\Components\TextInput::make('email')->label('Email')->disabled(),
            Forms\Components\Textarea::make('content')
                ->label('Isi Komentar')->rows(5)->disabled()->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('article.title')
                    ->label('Artikel')->limit(40)->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('content')
                    ->label('Komentar')->limit(60)
                    ->tooltip(fn ($record) => $record->content),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dikirim')->dateTime('d/m/Y H:i')->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('article_id')
                    ->label('Artikel')->relationship('article', 'title'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array { return []; }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComments::route('/'),
            'view'  => Pages\ViewComment::route('/{record}'),
        ];
    }
}