<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $fillable = [
        'jenis_surat_id',
        'nomor_surat',
        'perihal',
        'pengirim',
        'tanggal_surat',
        'file'
    ];

    public function jenisSurat()
    {
        return $this->belongsTo(JenisSurat::class);
    }
}