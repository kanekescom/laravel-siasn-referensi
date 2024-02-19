<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Kanekescom\Siasn\Referensi\Filament\Resources\KelJabatanResource\Pages;
use Kanekescom\Siasn\Referensi\Models\KelJabatan;

class KelJabatanResource extends Resource
{
    protected static ?string $model = KelJabatan::class;

    protected static ?string $slug = 'kel-jabatan';

    protected static ?string $pluralLabel = 'Kel Jabatan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Kel Jabatan';

    protected static ?string $navigationGroup = 'SIASN REFERENSI';

    protected static bool $shouldRegisterNavigation = true;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->maxLength(255)
                    ->label('ID'),
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('rumpunJabatanId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lingkup')
                    ->maxLength(255),
                Forms\Components\Textarea::make('tugasPokok')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('pejabatPak')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('pembinaId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenisJabatanUmumId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kodeRumpun')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kodeKelompok')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenisJabatanUmumBaruId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kesehatanNonmedis')
                    ->maxLength(255),
                Forms\Components\TextInput::make('refUrusanPemerintahanId')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable()
                    ->label('ID'),
                Tables\Columns\TextColumn::make('nama')
                    ->grow()
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('rumpunJabatanId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('lingkup')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('pembinaId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenisJabatanUmumId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kodeRumpun')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kodeKelompok')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenisJabatanUmumBaruId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kesehatanNonmedis')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('refUrusanPemerintahanId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageKelJabatans::route('/'),
        ];
    }
}
