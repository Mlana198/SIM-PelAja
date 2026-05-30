<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\UserRole;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'role', 'gender'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    // app/Models/User.php

    public function profil(): BelongsTo
    {
        return $this->belongsTo(Profil::class, 'profil_id');
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if (!$this->role) {
            return false;
        }

        // Izinkan semua role masuk ke ID panel 'admin' karena ini pintu masuk utama
        if ($panel->getId() === 'admin') {
            return $this->role === UserRole::Admin;
        }

        return match ($panel->getId()) {
            'instruktur'      => $this->role === UserRole::Instruktur,
            'sub-koordinator' => $this->role === UserRole::SubKoordinator,
            'kabid'           => $this->role === UserRole::Kabid,
            'peserta'         => $this->role === UserRole::Peserta,
            default           => false,
        };
    }
    protected function casts(): array
    {
        return [
            'role' => UserRole::class,
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
