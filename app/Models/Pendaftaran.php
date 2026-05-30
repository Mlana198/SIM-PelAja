<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pendaftaran extends Model
{
    protected $table = 'pendaftarans';

    protected $fillable = [
        'user_id',
        'pelatihan_id',
        'tanggal_daftar',
        'status_verifikasi_berkas',
        'status_seleksi_adminstrasi',
        'disetujui_oleh_kabid',
        'catatan_keputusan',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pelatihan(): BelongsTo
    {
        return $this->belongsTo(Pelatihan::class, 'pelatihan_id');
    }

    public function berkasPendaftaran(): HasMany
    {
        return $this->hasMany(BerkasPendaftaran::class, 'pendaftaran_id');
    }

    public function jadwalInterview(): HasMany
    {
        return $this->hasMany(JadwalInterview::class, 'pendaftaran_id');
    }
}
