<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Kanekescom\Siasn\Referensi\Filament\Resources\JabatanFungsionalUmumResource\Pages;
use Kanekescom\Siasn\Referensi\Models\JabatanFungsionalUmum;

class JabatanFungsionalUmumResource extends Resource
{
    protected static ?string $model = JabatanFungsionalUmum::class;

    protected static ?string $slug = 'jabatan-fungsional-umum';

    protected static ?string $pluralLabel = 'Jabatan Fungsional Umum';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Jabatan Fungsional Umum';

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
                Forms\Components\TextInput::make('cepat_kode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('wajib_ganti_tertentu')
                    ->maxLength(255),
                Forms\Components\TextInput::make('mgr_cepat_kode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_asli')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_menpan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('instansi_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal_peraturan_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jfu_urusan_pemerintahan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis_jabatan_umum_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis_jabatan_umum_nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('asn_jenjang_jabatan_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('asn_jenjang_jabatan_nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('level')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ref_urusan_pemerintahan_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ref_urusan_pemerintahan_nama')
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
                Tables\Columns\TextColumn::make('cepat_kode')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('wajib_ganti_tertentu')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('mgr_cepat_kode')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_asli')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_menpan')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('instansi_id')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal_peraturan_id')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jfu_urusan_pemerintahan')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_jabatan_umum_id')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_jabatan_umum_nama')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('asn_jenjang_jabatan_id')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('asn_jenjang_jabatan_nama')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('level')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('ref_urusan_pemerintahan_id')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('ref_urusan_pemerintahan_nama')
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
            'index' => Pages\ManageJabatanFungsionalUmums::route('/'),
        ];
    }
}
