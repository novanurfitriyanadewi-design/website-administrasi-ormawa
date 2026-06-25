<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
  protected $fillable = [
    'user_id',
    'nama_instansi',
    'nama_kegiatan',
    'judul',
    'deskripsi',
    'file_proposal',
    'status',
    'catatan',
];

public function user()
{
    return $this->belongsTo(User::class);
}
}
