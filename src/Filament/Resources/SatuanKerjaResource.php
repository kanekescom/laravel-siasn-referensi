<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Kanekescom\Siasn\Referensi\Filament\Resources\SatuanKerjaResource\Pages;
use Kanekescom\Siasn\Referensi\Filament\Resources\SatuanKerjaResource\RelationManagers;
use Kanekescom\Siasn\Referensi\Models\SatuanKerja;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SatuanKerjaResource extends Resource
{
    protected static ?string $model = SatuanKerja::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kanregId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lokasiId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('instansiId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama')
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
                    ->label('ID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kanregId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lokasiId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instansiId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('parentId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenisSatuanKerjaId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('unblockCode')
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
            'index' => Pages\ManageSatuanKerjas::route('/'),
        ];
    }
}
