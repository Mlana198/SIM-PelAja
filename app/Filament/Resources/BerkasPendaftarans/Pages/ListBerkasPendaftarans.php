<?php

namespace App\Filament\Resources\BerkasPendaftarans\Pages;

use App\Filament\Resources\BerkasPendaftarans\BerkasPendaftaranResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBerkasPendaftarans extends ListRecords
{
    protected static string $resource = BerkasPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
