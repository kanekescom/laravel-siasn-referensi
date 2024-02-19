<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Kanekescom\Siasn\Referensi\Filament\Resources\LokasiResource\Pages;
use Kanekescom\Siasn\Referensi\Filament\Resources\LokasiResource\RelationManagers;
use Kanekescom\Siasn\Referensi\Models\Lokasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LokasiResource extends Resource
{
    protected static ?string $model = Lokasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kanregId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lokasiId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('cepatKode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenisKabupaten')
                    ->maxLength(255),
                Forms\Components\TextInput::make('removalDate')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenisDesa')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tanggalJorge')
                    ->maxLength(255),
                Forms\Components\TextInput::make('mgrCepatKode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ibukota')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kanregId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasiId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cepatKode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenisKabupaten')
                    ->searchable(),
                Tables\Columns\TextColumn::make('removalDate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenisDesa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggalJorge')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mgrCepatKode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibukota')
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
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageLokasis::route('/'),
        ];
    }
}
