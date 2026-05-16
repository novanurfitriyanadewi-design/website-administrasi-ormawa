<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{
    protected $fillable = [
        'nama'
    ];

    public function suratKeluar()
    {
        return $this->hasMany(SuratKeluar::class);
    }
}