<?php

namespace App\Filament\Resources\BerkasPendaftarans\Pages;

use App\Filament\Resources\BerkasPendaftarans\BerkasPendaftaranResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBerkasPendaftaran extends EditRecord
{
    protected static string $resource = BerkasPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
