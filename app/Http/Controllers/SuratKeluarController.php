<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Models\JenisSurat;

class SuratKeluarController extends Controller
{
    /* INDEX / LIST DATA */
    public function index(Request $request)
    {
        $q = $request->q;

        $data = SuratKeluar::with('jenisSurat')
            ->when($q, function ($query) use ($q) {
                $query->where('nomor_surat', 'like', "%{$q}%")
                    ->orWhere('kepada', 'like', "%{$q}%")
                    ->orWhere('perihal', 'like', "%{$q}%");
            })
            ->latest()
            ->paginate(6);

        return view('surat.keluar.index', compact('data'));
    }

    /*CREATE FORM */
    public function create()
    {
        $jenis = JenisSurat::all();

        return view('surat.keluar.create', compact('jenis'));
    }

    /* STORE DATA */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_surat'    => 'required',
            'jenis_surat_id' => 'required|exists:jenis_surats,id',
            'perihal'        => 'required',
            'kepada'         => 'required',
            'tanggal_surat'  => 'required|date',
            'file'           => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')
                ->store('surat-keluar', 'public');
        }

        SuratKeluar::create($validated);

        return redirect()
            ->route('surat-keluar.index')
            ->with('success', 'Data surat keluar berhasil ditambahkan');
    }

    /* EDIT FORM */
    public function edit($id)
    {
        $suratKeluar = SuratKeluar::findOrFail($id);
        $jenis = JenisSurat::all();

        return view('surat.keluar.edit', compact('suratKeluar', 'jenis'));
    }

    /* UPDATE DATA */
    public function update(Request $request, $id)
    {
        $suratKeluar = SuratKeluar::findOrFail($id);

        $validated = $request->validate([
            'nomor_surat'    => 'required',
            'jenis_surat_id' => 'required|exists:jenis_surats,id',
            'perihal'        => 'required',
            'kepada'         => 'required',
            'tanggal_surat'  => 'required|date',
            'file'           => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048'
        ]);

        /* FILE BARU */
        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')
                ->store('surat-keluar', 'public');
        } else {
            $validated['file'] = $suratKeluar->file;
        }

        $suratKeluar->update($validated);

        return redirect()
            ->route('surat-keluar.index')
            ->with('success', 'Data surat keluar berhasil diupdate');
    }

    /* DELETE DATA */
    public function destroy($id)
    {
        $suratKeluar = SuratKeluar::findOrFail($id);
        $suratKeluar->delete();

        return redirect()
            ->route('surat-keluar.index')
            ->with('success', 'Data surat keluar berhasil dihapus');
    }
}