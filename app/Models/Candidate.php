<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'nama',
        'nim',
        'prodi',
        'organisasi',
        'ipk',
        'visi',
        'misi',
        'foto',
        'status'
    ];
}