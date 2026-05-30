<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penilaian extends Model
{
    protected $table = 'penilaian';

    protected $fillable = [
        'user_id',
        'peserta_lolos_id',
        'jenis_penilaian',
        'nilai',
        'catatan_instruktur',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pesertaLolos(): BelongsTo
    {
        return $this->belongsTo(PesertaLolos::class, 'peserta_lolos_id');
    }

    public function kelulusa(): HasMany
    {
        return $this->hasMany(Kelulusan::class, 'penilaian_id');
    }
}
