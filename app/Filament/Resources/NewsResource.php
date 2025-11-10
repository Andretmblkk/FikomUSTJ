<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationLabel = 'Berita';

    protected static ?string $modelLabel = 'Berita';

    protected static ?string $pluralModelLabel = 'Berita';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'berita' => 'Berita',
                        'event' => 'Event',
                        'pengumuman' => 'Pengumuman',
                    ])
                    ->required()
                    ->default('berita'),
                Forms\Components\Textarea::make('content')
                    ->label('Konten')
                    ->required()
                    ->rows(5),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('news')
                    ->disk('public')
                    ->visibility('public'),
                Forms\Components\DateTimePicker::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->default(now()),
                Forms\Components\Toggle::make('is_published')
                    ->label('Publikasikan')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'berita' => 'info',
                        'event' => 'success',
                        'pengumuman' => 'warning',
                        default => 'gray',
                    }),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->circular(),
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'berita' => 'Berita',
                        'event' => 'Event',
                        'pengumuman' => 'Pengumuman',
                    ]),
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Status Publikasi'),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageNews::route('/'),
        ];
    }
}

