<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Kanekescom\Siasn\Referensi\Filament\Resources\EselonResource\Pages;
use Kanekescom\Siasn\Referensi\Filament\Resources\EselonResource\RelationManagers;
use Kanekescom\Siasn\Referensi\Models\Eselon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EselonResource extends Resource
{
    protected static ?string $model = Eselon::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('terendah_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tertinggi_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('eselon_level_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('asn_jenjang_jabatan_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jabatan_asn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('level_kompetensi_jabatan')
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
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('terendah_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tertinggi_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('eselon_level_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asn_jenjang_jabatan_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan_asn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('level_kompetensi_jabatan')
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
            'index' => Pages\ManageEselons::route('/'),
        ];
    }
}
