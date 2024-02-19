<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Kanekescom\Siasn\Referensi\Filament\Resources\TingkatPendidikanResource\Pages;
use Kanekescom\Siasn\Referensi\Filament\Resources\TingkatPendidikanResource\RelationManagers;
use Kanekescom\Siasn\Referensi\Models\TingkatPendidikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TingkatPendidikanResource extends Resource
{
    protected static ?string $model = TingkatPendidikan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('golongan_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('golongan_awal_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_lama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('group_tk_pend_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('group_tk_pend_nm')
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
                Tables\Columns\TextColumn::make('golongan_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('golongan_awal_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_lama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('group_tk_pend_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('group_tk_pend_nm')
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
            'index' => Pages\ManageTingkatPendidikans::route('/'),
        ];
    }
}
