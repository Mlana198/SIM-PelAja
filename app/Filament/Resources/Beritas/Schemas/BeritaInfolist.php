<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BeritaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('gambar')
                    ->label('Gambar Berita')
                    ->disk('public')
                    ->square(),
                TextEntry::make('judul_berita')
                    ->label('Judul Berita'),
                TextEntry::make('isi_berita')
                    ->label('Isi Berita'),
                TextEntry::make('tanggal_berita')
                    ->label('Tanggal Berita'),
                TextEntry::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime(),
            ]);
    }
}
