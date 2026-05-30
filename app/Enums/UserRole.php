<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;
use Override;

enum UserRole: string implements HasLabel, HasColor
{
    case Admin = 'Admin';
    case Instruktur = 'Instruktur';
    case SubKoordinator = 'Sub-Koordinator';
    case Peserta = 'Peserta';
    case Kabid = 'Kabid';

    #[Override]
    public function getLabel(): string
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::Instruktur => 'Instruktur',
            self::SubKoordinator => 'Sub Koordinator',
            self::Peserta => 'Peserta',
            self::Kabid => 'Kepala Bidang'
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Admin => 'danger',
            self::Kabid => 'warning',
            self::Instruktur => 'success',
            self::SubKoordinator => 'info',
            self::Peserta => 'light',
            default => 'gray',
        };
    }
}
