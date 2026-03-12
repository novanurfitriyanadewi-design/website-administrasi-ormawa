<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        // Data organisasi
        $organisasi = [
            [
                'nama' => 'BEM SAINTEK',
                'deskripsi' => 'Badan Eksekutif Mahasiswa merupakan lembaga eksekutif yang menjalankan program kerja dan menyalurkan aspirasi mahasiswa.',
                'visi' => 'Mewujudkan organisasi mahasiswa yang aktif, kreatif, dan solidaritas.',
                'misi' => [
                    'Menyelenggarakan kegiatan mahasiswa',
                    'Menyalurkan aspirasi mahasiswa',
                    'Meningkatkan solidaritas antar mahasiswa'
                ]
            ],
            [
                'nama' => 'DPM SAINTEK',
                'deskripsi' => 'Dewan Perwakilan Mahasiswa adalah lembaga legislatif yang mengawasi kinerja BEM dan membuat peraturan organisasi mahasiswa.',
                'visi' => 'Mewujudkan organisasi mahasiswa yang transparan dan demokratis.',
                'misi' => [
                    'Mengawasi program kerja BEM',
                    'Menyusun peraturan organisasi',
                    'Mewakili aspirasi mahasiswa'
                ]
            ],
            [
                'nama' => 'HIMA SISTEM INFORMASI',
                'deskripsi' => 'Himpunan Mahasiswa merupakan organisasi mahasiswa tingkat program studi yang bertujuan mengembangkan potensi mahasiswa.',
                'visi' => 'Menjadikan mahasiswa yang aktif dan inovatif.',
                'misi' => [
                    'Mengadakan kegiatan akademik',
                    'Mengembangkan potensi mahasiswa',
                    'Meningkatkan solidaritas mahasiswa'
                ]
            ]
        ];

        // Data pengurus
        $pengurus = [
            [
                'nama' => 'Nova Nurfitriyana',
                'nim' => '4124051',
                'jabatan' => 'Anggota BEM SAINTEK',
                'prodi' => 'Sistem Informasi',
                'semester' => '4',
                'keahlian' => ['Manajemen Organisasi','Public Speaking','Laravel']
            ],
            [
                'nama' => 'Bimo Adi Nugroho',
                'nim' => '4124013',
                'jabatan' => 'Anggota BEM SAINTEK',
                'prodi' => 'Sistem Informasi',
                'semester' => '4',
                'keahlian' => ['Administrasi','Microsoft Office','PHP']
            ],
            [
                'nama' => 'Moh. Badrus Sholeh',
                'nim' => '4124008',
                'jabatan' => 'Anggota DPM SAINTEK',
                'prodi' => 'Sistem Informasi',
                'semester' => '4',
                'keahlian' => ['Akuntansi','Manajemen Keuangan','MySQL']
            ]
        ];

        return view('profil', compact('organisasi','pengurus'));
    }

    public function show($nim)
    {
        return "Profil pengurus dengan NIM: " . $nim;
    }


    
}

