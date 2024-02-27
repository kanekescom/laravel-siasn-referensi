<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Kanekescom\Siasn\Referensi\Filament\Resources\RefDokumenResource\Pages;
use Kanekescom\Siasn\Referensi\Models\RefDokumen;

class RefDokumenResource extends Resource
{
    protected static ?string $model = RefDokumen::class;

    protected static ?string $slug = 'ref-dokumen';

    protected static ?string $pluralLabel = 'Ref Dokumen';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Ref Dokumen';

    protected static ?string $navigationGroup = 'SIASN Referensi';

    protected static bool $shouldRegisterNavigation = true;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->maxLength(255)
                    ->label('ID'),
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
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true)
                    ->label('ID'),
                Tables\Columns\TextColumn::make('layananId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('layananNama')
                    ->wrap()
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('subLayananId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('subLayananNama')
                    ->wrap()
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('detailLayananId')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('detailLayananNama')
                    ->wrap()
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('document')
                    ->wrap()
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('jenisDokumen')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('fileType')
                    ->wrap()
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('linkProses')
                    ->wrap()
                    ->copyable()
                    ->sortable()
                    ->searchable(isIndividual: true),
                Tables\Columns\TextColumn::make('mandatory')
                    ->wrap()
                    ->copyable()
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
            'index' => Pages\ManageRefDokumens::route('/'),
        ];
    }
}
