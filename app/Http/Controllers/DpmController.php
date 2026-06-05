<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanDpm;
use App\Models\JenisSurat;

class DpmController extends Controller
{
    /**
     * HALAMAN DPM
     */
    public function index()
    {
        return view('program.dpm.index');
    }

    /**
     * FORM CREATE
     */
    public function create()
    {
        $jenis = JenisSurat::all();

        return view('program.dpm.create', compact('jenis'));
    }

    /**
     * STORE DATA
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_surat_id' => 'required|exists:jenis_surats,id',
            'nomor_surat'    => 'nullable|string|max:255',
            'perihal'        => 'required|string|max:255',
            'pengirim'       => 'required|string|max:255',
            'tanggal_surat'  => 'required|date',
            'file'           => 'nullable|file|mimes:pdf,jpg,png,doc,docx'
        ]);

        /**
         * Upload file
         */
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')
                ->store('pengajuan-dpm', 'public');
        }

        /**
         * Simpan database
         */
        PengajuanDpm::create($validated);

        return redirect()
            ->route('dpm.create')
            ->with('success', 'Pengajuan berhasil dikirim');
    }
}