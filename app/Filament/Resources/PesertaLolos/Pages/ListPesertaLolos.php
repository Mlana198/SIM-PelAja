<?php

namespace App\Filament\Resources\PesertaLolos\Pages;

use App\Filament\Resources\PesertaLolos\PesertaLolosResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPesertaLolos extends ListRecords
{
    protected static string $resource = PesertaLolosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
