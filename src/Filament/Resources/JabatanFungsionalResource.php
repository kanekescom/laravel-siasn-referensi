<?php

namespace Kanekescom\Siasn\Referensi\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Kanekescom\Siasn\Referensi\Filament\Resources\JabatanFungsionalResource\Pages;
use Kanekescom\Siasn\Referensi\Models\JabatanFungsional;

class JabatanFungsionalResource extends Resource
{
    protected static ?string $model = JabatanFungsional::class;

    protected static ?string $slug = 'jabatan-fungsional';

    protected static ?string $pluralLabel = 'Jabatan Fungsional';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Jabatan Fungsional';

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
                Forms\Components\TextInput::make('min_gol_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('max_gol_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('bup_usia')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tun_jabatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('bobot')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kel_jabatan_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('cepat_kode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('mgr_cepat_kode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis')
                    ->maxLength(255),
                Forms\Components\TextInput::make('cepat_kode_new')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jml_formasi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_asli')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenjang')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jf_ex_medis')
                    ->maxLength(255),
                Forms\Components\TextInput::make('is_syarat_jabatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis_jabatan_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis_jabatan_nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode_jenjang_jabatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('asn_jenjang_jabatan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('level')
                    ->maxLength(255),
                Forms\Components\TextInput::make('rumpun_jabatan_id')
                    ->maxLength(255),
                Forms\Components\TextInput::make('rumpun_jabatan_nama')
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
                Tables\Columns\TextColumn::make('min_gol_id')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('max_gol_id')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('bup_usia')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tun_jabatan')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('bobot')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kel_jabatan_id')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('cepat_kode')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('mgr_cepat_kode')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('cepat_kode_new')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jml_formasi')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_asli')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenjang')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jf_ex_medis')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('is_syarat_jabatan')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_jabatan_id')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_jabatan_nama')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode_jenjang_jabatan')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('asn_jenjang_jabatan')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('level')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('rumpun_jabatan_id')
                    ->wrap()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('rumpun_jabatan_nama')
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
            'index' => Pages\ManageJabatanFungsionals::route('/'),
        ];
    }
}
