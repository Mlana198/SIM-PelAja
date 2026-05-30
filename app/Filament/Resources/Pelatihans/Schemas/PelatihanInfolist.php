<?php

namespace App\Filament\Resources\Pelatihans\Schemas;

use Faker\Provider\Image;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PelatihanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // ImageEntry::make('gambar')
                //     ->label('Gambar')
                //     ->disk('public')
                //     ->square()
                //     ->placeholder(Image::imageUrl(400, 300, 'training', true)),
                ImageEntry::make('gambar')
                    ->label('Gambar')
                    ->getStateUsing(
                        fn($record) =>
                        asset('storage/' . ltrim($record->gambar, '/'))
                    )
                    ->square(),
                TextEntry::make('nama_pelatihan')
                    ->label('Nama Pelatihan'),
                TextEntry::make('deskripsi')
                    ->label('Deskripsi'),
                TextEntry::make('tanggal_pelatihan')
                    ->label('Tanggal Pelatihan')
                    ->date(),
                TextEntry::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
