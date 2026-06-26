<?php

namespace Database\Seeders;

use App\Models\JenisSurat;
use Illuminate\Database\Seeder;

class JenisSuratSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['Undangan', 'Pemberitahuan', 'Permohonan', 'Proposal'] as $nama) {
            JenisSurat::firstOrCreate(['nama' => $nama]);
        }
    }
}
