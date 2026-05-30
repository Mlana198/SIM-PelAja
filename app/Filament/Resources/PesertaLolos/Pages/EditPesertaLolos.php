<?php

namespace App\Filament\Resources\PesertaLolos\Pages;

use App\Filament\Resources\PesertaLolos\PesertaLolosResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPesertaLolos extends EditRecord
{
    protected static string $resource = PesertaLolosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
