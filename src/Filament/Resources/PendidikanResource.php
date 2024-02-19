<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Kanekescom\Siasn\Referensi\Filament\Resources\PendidikanResource\Pages;
use Kanekescom\Siasn\Referensi\Filament\Resources\PendidikanResource\RelationManagers;
use Kanekescom\Siasn\Referensi\Models\Pendidikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendidikanResource extends Resource
{
    protected static ?string $model = Pendidikan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tingkat_pendidikan_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('cepat_kode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('mgr_cepat_kode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_asli')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->maxLength(255),
                Forms\Components\TextInput::make('subrumpun_prog_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('cepat_kode_induk')
                    ->maxLength(255),
                Forms\Components\TextInput::make('subrumpun_prog_kode')
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
                Tables\Columns\TextColumn::make('tingkat_pendidikan_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cepat_kode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mgr_cepat_kode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_asli')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subrumpun_prog_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cepat_kode_induk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subrumpun_prog_kode')
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
            'index' => Pages\ManagePendidikans::route('/'),
        ];
    }
}
