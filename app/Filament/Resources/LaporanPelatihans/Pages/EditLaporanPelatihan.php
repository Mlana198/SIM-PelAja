<?php

namespace App\Filament\Resources\LaporanPelatihans\Pages;

use App\Filament\Resources\LaporanPelatihans\LaporanPelatihanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLaporanPelatihan extends EditRecord
{
    protected static string $resource = LaporanPelatihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
