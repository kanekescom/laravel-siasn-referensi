<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Kanekescom\Siasn\Referensi\Filament\Resources\SatuanKerjaResource\Pages;
use Kanekescom\Siasn\Referensi\Models\SatuanKerja;

class SatuanKerjaResource extends Resource
{
    protected static ?string $model = SatuanKerja::class;

    protected static ?string $slug = 'satuan-kerja';

    protected static ?string $pluralLabel = 'Satuan Kerja';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Satuan Kerja';

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
                Forms\Components\TextInput::make('kanregId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lokasiId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('instansiId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('parentId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenisSatuanKerjaId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('unblockCode')
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
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('kanregId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('lokasiId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('instansiId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('parentId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('jenisSatuanKerjaId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('unblockCode')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(isIndividual: true),
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
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    //
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageSatuanKerjas::route('/'),
        ];
    }
}
