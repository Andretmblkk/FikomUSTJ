<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationLabel = 'Dokumen Penting';

    protected static ?string $modelLabel = 'Dokumen Penting';

    protected static ?string $pluralModelLabel = 'Dokumen Penting';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->rows(3),
                Forms\Components\Select::make('type')
                    ->label('Tipe')
                    ->options([
                        'panduan' => 'Panduan',
                        'template' => 'Template',
                        'form' => 'Formulir',
                        'jadwal' => 'Jadwal',
                        'peraturan' => 'Peraturan',
                    ])
                    ->required()
                    ->default('panduan'),
                Forms\Components\TextInput::make('file_url')
                    ->label('URL File/Download')
                    ->url()
                    ->maxLength(255)
                    ->helperText('Link untuk download dokumen'),
                Forms\Components\Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
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
                Tables\Columns\TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'panduan' => 'info',
                        'template' => 'success',
                        'form' => 'warning',
                        'jadwal' => 'danger',
                        'peraturan' => 'primary',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('file_url')
                    ->label('URL File')
                    ->url(fn ($record) => $record->file_url)
                    ->openUrlInNewTab()
                    ->limit(30)
                    ->toggleable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->label('Tipe')
                    ->options([
                        'panduan' => 'Panduan',
                        'template' => 'Template',
                        'form' => 'Formulir',
                        'jadwal' => 'Jadwal',
                        'peraturan' => 'Peraturan',
                    ]),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
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
            'index' => Pages\ManageServices::route('/'),
        ];
    }
}

