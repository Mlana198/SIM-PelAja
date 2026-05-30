<?php

namespace App\Filament\Resources\LaporanPelatihans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class LaporanPelatihanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('pelatihans_id')
                    ->required()
                    ->numeric(),
                Select::make('peserta_lolos_id')
                    ->relationship('pesertaLolos', 'id')
                    ->required(),
                TextInput::make('kelulusans_id')
                    ->required()
                    ->numeric(),
                TextInput::make('file_laporan_pdf')
                    ->required(),
                Textarea::make('kendala_dan_solusi')
                    ->columnSpanFull(),
                TextInput::make('rata_rata_nilai')
                    ->numeric(),
                Textarea::make('ringkasan_pelatihan')
                    ->columnSpanFull(),
                DatePicker::make('tanggal_pelaporan'),
                TextInput::make('total_pendaftar')
                    ->required()
                    ->numeric(),
                TextInput::make('total_peserta_lolos')
                    ->required()
                    ->numeric(),
                TextInput::make('total_peserta_lulus')
                    ->required()
                    ->numeric(),
            ]);
    }
}
