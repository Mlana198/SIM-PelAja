<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PesertaLolos extends Model
{
    protected $table = 'peserta_lolos';

    protected $fillable = [
        'user_id',
        'profil_id',
        'nama_lengkap',
        'no_identitas',
        'gender',
        'tempat_lahir',
        'tanggal_lahir',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function profil(): BelongsTo
    {
        return $this->belongsTo(Profil::class, 'profil_id');
    }

    public function penilaian(): HasMany
    {
        return $this->hasMany(Penilaian::class, 'peserta_lolos_id');
    }

    public function laporanPelatihan(): HasMany
    {
        return $this->hasMany(LaporanPelatihan::class, 'peserta_lolos_id');
    }
}
