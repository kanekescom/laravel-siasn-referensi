<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Kanekescom\Siasn\Referensi\Filament\Resources\RefDokumenResource\Pages;
use Kanekescom\Siasn\Referensi\Filament\Resources\RefDokumenResource\RelationManagers;
use Kanekescom\Siasn\Referensi\Models\RefDokumen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RefDokumenResource extends Resource
{
    protected static ?string $model = RefDokumen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('layananId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('layananNama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('subLayananId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('subLayananNama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('detailLayananId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('detailLayananNama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('document')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenisDokumen')
                    ->maxLength(255),
                Forms\Components\TextInput::make('fileType')
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkProses')
                    ->maxLength(255),
                Forms\Components\TextInput::make('mandatory')
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
                Tables\Columns\TextColumn::make('layananId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('layananNama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subLayananId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subLayananNama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('detailLayananId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('detailLayananNama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('document')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenisDokumen')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fileType')
                    ->searchable(),
                Tables\Columns\TextColumn::make('linkProses')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mandatory')
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
            'index' => Pages\ManageRefDokumens::route('/'),
        ];
    }
}
