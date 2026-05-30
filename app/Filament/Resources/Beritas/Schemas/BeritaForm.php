<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('gambar')
                    ->label('Gambar Berita')
                    ->image()
                    ->acceptedFileTypes(['image/png', 'image/jpeg'])
                    ->disk('public')
                    ->directory('berita')
                    ->preserveFilenames()
                    ->nullable()
                    ->imagePreviewHeight('150')
                    ->columnSpanFull()
                    ->required(false),
                TextInput::make('judul_berita')
                    ->label('Judul Berita')
                    ->required(),
                TextInput::make('isi_berita')
                    ->label('Isi Berita')
                    ->required(),
                DatePicker::make('tanggal_berita')
                    ->label('Tanggal Berita')
                    ->required(),
            ]);
    }
}
