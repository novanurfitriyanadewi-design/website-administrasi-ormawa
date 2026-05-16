<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuratKeluar;

class SuratKeluarSeeder extends Seeder
{
    public function run(): void
    {
        SuratKeluar::create([
            'nomor_surat' => '01/DPM.FST/UNIPDU/A.1/04/2026',
            'a' => '1',
            'b' => '-',
            'kepada' => 'BPKM'
        ]);

        SuratKeluar::create([
            'nomor_surat' => '02/DPM.FST/UNIPDU/A.2/04/2026',
            'a' => '2',
            'b' => '-',
            'kepada' => 'Dekan Fakultas'
        ]);

        SuratKeluar::create([
            'nomor_surat' => '03/DPM.FST/UNIPDU/A.3/04/2026',
            'a' => '3',
            'b' => '-',
            'kepada' => 'Kaprodi SI'
        ]);
    }
}