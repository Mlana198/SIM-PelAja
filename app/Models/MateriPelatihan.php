<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MateriPelatihan extends Model
{
    protected $table = 'materi_pelatihan';

    protected $fillable = [
        'pelatihan_id',
        'user_id',
        'judul_materi',
        'deskripsi',
        'file_materi_path',
    ];

    public function pelatihan(): BelongsTo
    {
        return $this->belongsTo(Pelatihan::class, 'pelatihan_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
