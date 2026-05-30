<?php

namespace App\Filament\Resources\Profils\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProfilForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_lengkap')
                    ->required(),
                TextInput::make('no_identitas')
                    ->required(),
                TextInput::make('no_hp')
                    ->required(),
                Select::make('gender')
                    ->options(['laki-laki' => 'Laki laki', 'perempuan' => 'Perempuan'])
                    ->required(),
                TextInput::make('tempat_lahir')
                    ->required(),
                DatePicker::make('tanggal_lahir')
                    ->required(),
                Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
