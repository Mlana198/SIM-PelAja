<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelulusan extends Model
{
    protected $table = 'kelulusan';

    protected $fillable = [
        'user_id',
        'penilaian_id',
        'status_kelulusan',
        'total_nilai_akhir',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function penilaian(): BelongsTo
    {
        return $this->belongsTo(Penilaian::class, 'penilaian_id');
    }

    public function sertifikat(): HasOne
    {
        return $this->hasOne(Sertifikat::class, 'kelulusan_id');
    }

    public function laporanPelatihan(): HasMany
    {
        return $this->hasMany(LaporanPelatihan::class, 'kelulusan_id');
    }
}
