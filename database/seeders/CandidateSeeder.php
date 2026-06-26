<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidate;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Candidate::truncate();

        Candidate::create([
            'nama'        => 'Siti Aisyah',
            'nim'         => '4124022',
            'prodi'       => 'Sistem Informasi',
            'organisasi'  => 'BEM',
            'ipk'         => 3.89,
            'visi'        => 'Menjadikan organisasi yang inovatif, profesional, dan berintegritas.',
            'misi'        => 'Meningkatkan kualitas program kerja, mempererat solidaritas anggota, serta memberikan pelayanan terbaik kepada mahasiswa.',
            'foto'        => null,
            'status'      => 'menunggu',
        ]);

        Candidate::create([
            'nama'        => 'Ahmad Fauzi',
            'nim'         => '4124035',
            'prodi'       => 'Sistem Informasi',
            'organisasi'  => 'HIMASI',
            'ipk'         => 3.75,
            'visi'        => 'Mewujudkan HIMASI sebagai organisasi yang aktif, kreatif, dan berprestasi.',
            'misi'        => 'Mengembangkan kompetensi mahasiswa Sistem Informasi melalui kegiatan akademik, organisasi, dan pengabdian kepada masyarakat.',
            'foto'        => null,
            'status'      => 'menunggu',
        ]);
    }
}