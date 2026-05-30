<?php

namespace App\Filament\Resources\PesertaLolos\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PesertaLolosForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Select::make('profil_id')
                    ->relationship('profil', 'id')
                    ->required(),
                TextInput::make('no_identitas')
                    ->required(),
                TextInput::make('nama_lengkap')
                    ->required(),
                DatePicker::make('tanggal_lahir')
                    ->required(),
                TextInput::make('tempat_lahir')
                    ->required(),
                Select::make('gender')
                    ->options(['laki-laki' => 'Laki laki', 'perempuan' => 'Perempuan'])
                    ->required(),
            ]);
    }
}
