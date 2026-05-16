<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $fillable = [
    'jenis_surat_id',
    'nomor_surat',
    'perihal',
    'kepada',
    'tanggal_surat',
    'file'
];

public function jenisSurat()
{
    return $this->belongsTo(JenisSurat::class);
}
}