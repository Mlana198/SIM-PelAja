<?php

namespace App\Filament\Resources\LaporanPelatihans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LaporanPelatihansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pelatihans_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('pesertaLolos.id')
                    ->searchable(),
                TextColumn::make('kelulusans_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('file_laporan_pdf')
                    ->searchable(),
                TextColumn::make('rata_rata_nilai')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tanggal_pelaporan')
                    ->date()
                    ->sortable(),
                TextColumn::make('total_pendaftar')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_peserta_lolos')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_peserta_lulus')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
