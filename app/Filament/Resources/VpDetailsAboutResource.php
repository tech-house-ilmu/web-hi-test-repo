<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VpDetailsAboutResource\Pages;
use App\Filament\Resources\VpDetailsAboutResource\RelationManagers;
use App\Models\VpDetailsAbout;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class VpDetailsAboutResource extends Resource
{
    protected static ?string $model = VpDetailsAbout::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\FileUpload::make('vp_details_img')->required(),
            Forms\Components\TextInput::make('vp_details_name')->required(),
            Forms\Components\TextInput::make('vp_details_position')->required(),
            Forms\Components\TextInput::make('vp_details_linkedin')->required(),
            Forms\Components\TextInput::make('vp_details_email')->email()->required(),  
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('vp_details_img'),
                Tables\Columns\TextColumn::make('vp_details_name'),
                Tables\Columns\TextColumn::make('vp_details_position'),
                Tables\Columns\TextColumn::make('vp_details_linkedin'),
                Tables\Columns\TextColumn::make('vp_details_email'),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\deleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListVpDetailsAbouts::route('/'),
            'create' => Pages\CreateVpDetailsAbout::route('/create'),
            'edit' => Pages\EditVpDetailsAbout::route('/{record}/edit'),
        ];
    }    
}
