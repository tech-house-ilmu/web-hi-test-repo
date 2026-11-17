<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutOrganizationResource\Pages;
use App\Models\AboutOrganization;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutOrganizationResource extends Resource
{
    protected static ?string $model = AboutOrganization::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $navigationGroup = 'ABOUT US';

    protected static ?string $navigationLabel = 'Organization (Visi & Misi)';

    protected static ?string $modelLabel = 'Organisasi';

    protected static ?string $pluralModelLabel = 'Profil Organisasi (About Us)';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Tabs::make('Organization Tabs')->tabs([
                Forms\Components\Tabs\Tab::make('Hero About Us')->schema([
                    Forms\Components\TextInput::make('hero_title')
                        ->label('Judul Hero')
                        ->default('Better Career for Better Future')
                        ->required(),
                    Forms\Components\Textarea::make('hero_subtitle')
                        ->label('Deskripsi Hero')
                        ->rows(3)
                        ->required(),
                ]),

                Forms\Components\Tabs\Tab::make('Visi & Misi')->schema([
                    Forms\Components\Textarea::make('vision')
                        ->label('Visi House Ilmu')
                        ->rows(3)
                        ->required(),
                    Forms\Components\Repeater::make('missions')
                        ->label('Poin-Poin Misi')
                        ->simple(Forms\Components\TextInput::make('mission')->required())
                        ->defaultItems(2),
                ]),

                Forms\Components\Tabs\Tab::make('Budaya & Nilai (Culture DEALS)')->schema([
                    Forms\Components\TextInput::make('core_value_title')
                        ->label('Core Value')
                        ->default('Edusociopreneur'),
                    Forms\Components\TextInput::make('our_value_title')
                        ->label('Our Value')
                        ->default('Learn, Grow, and Get Achievement Together'),
                    Forms\Components\TextInput::make('culture_title')
                        ->label('Culture Name')
                        ->default('DEALS'),
                    Forms\Components\Repeater::make('culture_items')
                        ->label('Detail Huruf Culture DEALS')
                        ->schema([
                            Forms\Components\TextInput::make('letter')->label('Huruf')->maxLength(2)->required(),
                            Forms\Components\TextInput::make('title')->label('Kata Kunci (Contoh: Discipline)')->required(),
                            Forms\Components\Textarea::make('description')->label('Keterangan Nilai')->rows(2)->required(),
                        ])
                        ->columns(3)
                        ->collapsible(),
                ]),

                Forms\Components\Tabs\Tab::make('Founder Story / Cerita')->schema([
                    Forms\Components\RichEditor::make('founder_story')
                        ->label('Cerita Perjalanan / Founder Story')
                        ->columnSpanFull(),
                ]),
            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hero_title')->label('Judul Hero')->weight('bold'),
                Tables\Columns\TextColumn::make('vision')->label('Visi')->limit(60),
                Tables\Columns\TextColumn::make('updated_at')->dateTime('d/m/Y H:i')->label('Terakhir Diubah'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutOrganizations::route('/'),
            'edit' => Pages\EditAboutOrganization::route('/{record}/edit'),
        ];
    }
}
