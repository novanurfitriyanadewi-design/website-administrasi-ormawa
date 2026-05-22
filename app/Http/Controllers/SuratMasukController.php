<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\JenisSurat;

class SuratMasukController extends Controller
{
 
    // INDEX + SEARCH //
    public function index(Request $request)
    {
        $q = $request->q;

        $data = SuratMasuk::with('jenisSurat')
            ->when($q, function ($query) use ($q) {
                $query->where('nomor_surat', 'like', "%$q%")
                      ->orWhere('pengirim', 'like', "%$q%")
                      ->orWhere('perihal', 'like', "%$q%")
                      ->orWhereHas('jenisSurat', function ($sub) use ($q) {
                          $sub->where('nama', 'like', "%$q%");
                      });
            })
            ->latest()
            ->paginate(6)
            ->withQueryString();

        return view('surat.masuk.index', compact('data'));
    }

   
    // CREATE //
     public function create()
    {
        $jenis = JenisSurat::all();
        return view('surat.masuk.create', compact('jenis'));
    }

   
    // STORE //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis_surat_id' => 'required|exists:jenis_surats,id',
            'nomor_surat'    => 'required|string|max:255',
            'perihal'        => 'required|string|max:255',
            'pengirim'       => 'required|string|max:255',
            'tanggal_surat'  => 'required|date',
            'file'           => 'nullable|file|mimes:pdf,jpg,png,doc,docx'
        ]);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')
                ->store('surat-masuk', 'public');
        }

        SuratMasuk::create($validated);

        return redirect()
            ->route('surat-masuk.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

  
    // EDIT //
    public function edit($id)
    {
        $suratMasuk = SuratMasuk::findOrFail($id);
        $jenis = JenisSurat::all();

        return view('surat.masuk.edit', compact('suratMasuk', 'jenis'));
    }

    
    // UPDATE //
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jenis_surat_id' => 'required|exists:jenis_surats,id',
            'nomor_surat'    => 'required|string|max:255',
            'perihal'        => 'required|string|max:255',
            'pengirim'       => 'required|string|max:255',
            'tanggal_surat'  => 'required|date',
            'file'           => 'nullable|file|mimes:pdf,jpg,png,doc,docx'
        ]);

        $surat = SuratMasuk::findOrFail($id);

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')
                ->store('surat-masuk', 'public');
        } else {
            $validated['file'] = $surat->file;
        }

        $surat->update($validated);

        return redirect()
            ->route('surat-masuk.index')
            ->with('success', 'Data berhasil diupdate');
    }

    
    // DELETE //
    public function destroy($id)
    {
        $surat = SuratMasuk::findOrFail($id);
        $surat->delete();

        return redirect()
            ->route('surat-masuk.index')
            ->with('success', 'Data berhasil dihapus');
    }
}