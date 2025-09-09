<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
 return $form
        ->schema([
            TextInput::make('title')
                ->label('Nama Event')
                ->required(),

            TextInput::make('tagline')
                ->required(),

            
            RichEditor::make('description')
                ->label('Deskripsi')
                ->required()
                ->columnSpanFull(), 

            TextInput::make('registration_link')
                ->label('Link Pendaftaran')
                ->url() 
                ->required(),

            
            FileUpload::make('images')
                ->multiple()       
                ->maxFiles(3)        
                ->image()            
                ->disk('public')// Simpan di disk publik
                ->directory('event')
                ->required(),

            Toggle::make('is_active')
                ->label('Tampilkan Event Ini?')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('title')
                ->label('Nama Event')
                ->searchable(),
            
            TextColumn::make('tagline')
                ->label('Tagline Event'),
            
            IconColumn::make('is_active')
                ->label('Status Aktif')
                ->boolean(),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ]) // <-- TAMBAHKAN BLOK INI
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
