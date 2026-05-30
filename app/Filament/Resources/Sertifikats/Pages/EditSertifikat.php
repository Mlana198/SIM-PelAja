<?php

namespace App\Filament\Resources\Sertifikats\Pages;

use App\Filament\Resources\Sertifikats\SertifikatResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSertifikat extends EditRecord
{
    protected static string $resource = SertifikatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
