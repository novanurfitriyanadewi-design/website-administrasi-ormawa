<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SuratMasuk;

class SuratMasukSeeder extends Seeder
{
    public function run(): void
    {
        SuratMasuk::create([
            'nomor_surat' => '164/PANPEL-SMO/BEM.FST/UNIPDU/A.9/II/2026',
            'tanggal' => '2026-02-14',
            'pengirim' => 'BEM SAINTEK',
            'perihal' => 'Undangan Pembukaan SMO'
        ]);

        SuratMasuk::create([
            'nomor_surat' => '167/PANPEL-SMO/BEM.FST/UNIPDU/A.10/II/2026',
            'tanggal' => '2026-02-14',
            'pengirim' => 'BEM SAINTEK',
            'perihal' => 'Undangan Penutupan SMO'
        ]);

        SuratMasuk::create([
            'nomor_surat' => '211/PANPEL-HITC/HIMASI/UNIPDU/A.20/IV/2026',
            'tanggal' => '2026-04-03',
            'pengirim' => 'HIMASI',
            'perihal' => 'Pembukaan HITC'
        ]);

                SuratMasuk::create([
            'nomor_surat' => '211/PANPEL-HITC/HIMASI/UNIPDU/A.21/IV/2026',
            'tanggal' => '2026-04-03',
            'pengirim' => 'HIMASI',
            'perihal' => 'Penutupan HITC'
             ]);

              SuratMasuk::create([
            'nomor_surat' => '211/PANPEL-SEMINAR/HIMASI/UNIPDU/A.21/V/2026',
            'tanggal' => '2026-05-03',
            'pengirim' => 'HIMASI',
            'perihal' => 'Pemberitahuan Seminar'
             ]);
    }
}