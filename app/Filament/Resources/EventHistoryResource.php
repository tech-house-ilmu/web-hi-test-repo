<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventHistoryResource\Pages;
use App\Models\EventHistory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class EventHistoryResource extends Resource
{
    protected static ?string $model = EventHistory::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

    protected static ?string $navigationGroup = 'EVENT HISTORY';

    protected static ?string $navigationLabel = 'Riwayat Event & Galeri';

    protected static ?string $modelLabel = 'Riwayat Event';

    protected static ?string $pluralModelLabel = 'Riwayat Event & Galeri';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Tabs::make('Event History Tabs')->tabs([
                Forms\Components\Tabs\Tab::make('Informasi Dasar')->schema([
                    Forms\Components\TextInput::make('title')
                        ->label('Judul Kegiatan')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    Forms\Components\TextInput::make('slug')
                        ->label('Slug')
                        ->required()
                        ->unique(ignoreRecord: true),
                    Forms\Components\TextInput::make('category')
                        ->label('Kategori Event')
                        ->default('Event Collaboration')
                        ->required(),
                    Forms\Components\Textarea::make('excerpt')
                        ->label('Ringkasan / Excerpt')
                        ->rows(2)
                        ->required(),
                    Forms\Components\FileUpload::make('poster')
                        ->label('Poster Utama')
                        ->image()
                        ->directory('event-history'),
                    Forms\Components\FileUpload::make('gallery')
                        ->label('Galeri Dokumentasi Foto Kegiatan')
                        ->multiple()
                        ->image()
                        ->directory('event-history')
                        ->columnSpanFull(),
                ])->columns(2),

                Forms\Components\Tabs\Tab::make('Narasumber & Jadwal')->schema([
                    Forms\Components\TextInput::make('speaker')->label('Nama Narasumber / Pembicara'),
                    Forms\Components\TextInput::make('profession')->label('Profesi / Jabatan Pembicara'),
                    Forms\Components\TextInput::make('date')->label('Hari & Tanggal')->placeholder('Contoh: Jumat, 14 Agustus 2026'),
                    Forms\Components\TextInput::make('time')->label('Waktu')->placeholder('Contoh: 18.30–20.30 WIB'),
                    Forms\Components\TextInput::make('location')->label('Lokasi / Platform')->placeholder('Contoh: Online melalui Zoom Meeting'),
                    Forms\Components\TextInput::make('collaborator')->label('Mitra Kolaborasi')->default('House Ilmu Indonesia'),
                ])->columns(2),

                Forms\Components\Tabs\Tab::make('Detail & Dokumentasi Lengkap')->schema([
                    Forms\Components\RichEditor::make('description')->label('Deskripsi Lengkap Kegiatan')->columnSpanFull(),
                    Forms\Components\Repeater::make('goals')
                        ->label('Tujuan Kegiatan (Points)')
                        ->simple(Forms\Components\TextInput::make('goal')->required())
                        ->columnSpanFull(),
                    Forms\Components\Textarea::make('agenda')->label('Agenda Kegiatan')->rows(3)->columnSpanFull(),
                    Forms\Components\Textarea::make('outcomes')->label('Hasil / Manfaat yang Diperoleh')->rows(3)->columnSpanFull(),
                    Forms\Components\Textarea::make('conclusion')->label('Kesimpulan')->rows(2)->columnSpanFull(),
                    Forms\Components\Textarea::make('closing')->label('Penutup')->rows(2)->columnSpanFull(),
                ]),

                Forms\Components\Tabs\Tab::make('Pengaturan Tampilan')->schema([
                    Forms\Components\TextInput::make('sort_order')
                        ->label('Urutan Tampilan')
                        ->numeric()
                        ->default(0),
                    Forms\Components\Toggle::make('is_published')
                        ->label('Status Tayang di Web')
                        ->default(true),
                ]),
            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('poster')->label('Poster'),
                Tables\Columns\TextColumn::make('title')->label('Judul Event')->searchable()->limit(50)->weight('bold'),
                Tables\Columns\TextColumn::make('speaker')->label('Narasumber'),
                Tables\Columns\TextColumn::make('date')->label('Tanggal'),
                Tables\Columns\TextInputColumn::make('sort_order')->label('Urutan')->sortable(),
                Tables\Columns\ToggleColumn::make('is_published')->label('Tayang'),
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
            'index' => Pages\ListEventHistories::route('/'),
            'create' => Pages\CreateEventHistory::route('/create'),
            'edit' => Pages\EditEventHistory::route('/{record}/edit'),
        ];
    }
}
