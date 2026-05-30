<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Profil extends Model
{
    protected $table = 'profils';

    protected $fillable = [
        'nama_lengkap',
        'no_identitas',
        'no_hp',
        'gender',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
    ];

    public function pesertaLolos(): HasMany
    {
        return $this->hasMany(PesertaLolos::class, 'profil_id');
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'profil_id');
    }
}
