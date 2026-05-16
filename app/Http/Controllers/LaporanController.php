<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\SuratKeluar;

class LaporanController extends Controller
{

    public function perKategori()
{
    
    // SURAT MASUK PER KATEGORI //
    $masukData = SuratMasuk::join('jenis_surats', 'surat_masuks.jenis_surat_id', '=', 'jenis_surats.id')
        ->selectRaw('jenis_surats.nama as nama, COUNT(*) as total')
        ->groupBy('jenis_surats.nama')
        ->get();

    $masukLabels = $masukData->pluck('nama');
    $masukValues = $masukData->pluck('total');


    
    // SURAT KELUAR PER KATEGORI //
    $keluarData = SuratKeluar::join('jenis_surats', 'surat_keluars.jenis_surat_id', '=', 'jenis_surats.id')
        ->selectRaw('jenis_surats.nama as nama, COUNT(*) as total')
        ->groupBy('jenis_surats.nama')
        ->get();

    $keluarLabels = $keluarData->pluck('nama');
    $keluarValues = $keluarData->pluck('total');


    
    // TOTAL (UNTUK DONUT) //
    $totalMasuk = $masukValues->sum();
    $totalKeluar = $keluarValues->sum();


    
    // PIVOT TABLE //
    $pivotData = collect();

    foreach ($masukData as $item) {
        $pivotData->push([
            'jenis' => 'Surat Masuk',
            'kategori' => $item->nama,
            'jumlah' => $item->total
        ]);
    }

    foreach ($keluarData as $item) {
        $pivotData->push([
            'jenis' => 'Surat Keluar',
            'kategori' => $item->nama,
            'jumlah' => $item->total
        ]);
    }


    return view('laporan.kategori', compact(
        'masukLabels',
        'masukValues',
        'keluarLabels',
        'keluarValues',
        'totalMasuk',
        'totalKeluar',
        'pivotData'
    ));
}
}