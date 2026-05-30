<?php

namespace App\Filament\Resources\Pelatihans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PelatihanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_pelatihan')
                    ->label('Nama Pelatihan')
                    ->required(),
                TextInput::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
                DatePicker::make('tanggal_pelatihan')
                    ->label('Tanggal Pelatihan')
                    ->required(),
                FileUpload::make('gambar')
                    ->label('Gambar Pelatihan')
                    ->image()
                    ->acceptedFileTypes(['image/png', 'image/jpeg'])
                    ->maxSize(2048)
                    ->disk('public')
                    ->directory('pelatihan')
                    ->preserveFilenames()
                    ->nullable()
                    ->imagePreviewHeight('150')
                    ->columnSpanFull()
                    ->required(false),
            ]);
    }
}
