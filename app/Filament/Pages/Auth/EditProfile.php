<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\EditProfile as BaseEditProfile;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EditProfile extends BaseEditProfile
{
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('password')
                    ->password()
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn ($state) => filled($state) ? bcrypt($state) : null)
                    ->dehydrated(fn ($state) => filled($state))
                    ->placeholder('Kosongkan jika tidak ingin mengubah password'),

                TextInput::make('profil.nama_lengkap')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255),

                TextInput::make('profil.no_identitas')
                    ->label('No. Identitas (NIK/NIP/No. KTP)')
                    ->required()
                    ->maxLength(255),

                TextInput::make('profil.no_hp')
                    ->label('No. Handphone')
                    ->tel()
                    ->maxLength(255),

                Select::make('profil.gender')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ]),

                TextInput::make('profil.tempat_lahir')
                    ->label('Tempat Lahir'),

                DatePicker::make('profil.tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->native(false)
                    ->displayFormat('d/m/Y'),

                Textarea::make('profil.alamat')
                    ->label('Alamat Lengkap')
                    ->columnSpanFull(),
            ]);
    }
}
