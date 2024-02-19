<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Kanekescom\Siasn\Referensi\Filament\Resources\KelJabatanResource\Pages;
use Kanekescom\Siasn\Referensi\Filament\Resources\KelJabatanResource\RelationManagers;
use Kanekescom\Siasn\Referensi\Models\KelJabatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KelJabatanResource extends Resource
{
    protected static ?string $model = KelJabatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('rumpunJabatanId')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama')
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
                    ->label('ID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rumpunJabatanId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lingkup')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pembinaId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenisJabatanUmumId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kodeRumpun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kodeKelompok')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenisJabatanUmumBaruId')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kesehatanNonmedis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('refUrusanPemerintahanId')
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
            'index' => Pages\ManageKelJabatans::route('/'),
        ];
    }
}
