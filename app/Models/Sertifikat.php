<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sertifikat extends Model
{
    protected $table = 'sertifikats';

    protected $fillable = [
        'kelulusan_id',
        'nomor_sertifikat',
        'tanggal_terbit',
        'ditandatangani_oleh_nama',
        'ditandatangani_oleh_nip',
        'file_sertifikat_path',
    ];

    public function kelulusan(): BelongsTo
    {
        return $this->belongsTo(Kelulusan::class, 'kelulusan_id');
    }
}
