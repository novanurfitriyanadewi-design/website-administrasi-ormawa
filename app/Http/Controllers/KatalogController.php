<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    // 🔹 DATA PROGRAM (pakai SLUG, bukan ID)
    private function dataProgram()
    {
        return [
            'bem' => [
                'organisasi' => 'BEM FSAINTEK',
                'gambar' => 'images/bem.jpg',
            ],
            'dpm' => [
                'organisasi' => 'DPM FSAINTEK',
                'gambar' => 'images/dpm.jpg',
            ],
            'himasi' => [
                'organisasi' => 'HIMASI',
                'gambar' => 'images/himasi.jpg',
            ],
        ];
    }

    // 🔹 HALAMAN LIST PROGRAM
    public function index()
    {
        return view('program.index');
    }

    // 🔹 FILTER ORGANISASI (OPTIONAL)
    public function organisasi($organisasi)
    {
        return view('program.list', [
            'organisasi' => $organisasi
        ]);
    }

    // 🔹 DETAIL PROGRAM (PAKAI SLUG)
    public function show($slug)
    {
        $data = $this->dataProgram();

        if (!isset($data[$slug])) {
            abort(404);
        }

        return view('program.detail', [
            'item' => $data[$slug]
        ]);
    }
}