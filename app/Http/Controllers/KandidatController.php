<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KandidatController extends Controller
{
    /**
     * Tampilkan semua kandidat
     */
    public function index()
    {
        $kandidats = Candidate::latest()->get();

        return view('kandidat.index', compact('kandidats'));
    }

    /**
     * Form tambah kandidat
     */
    public function create()
    {
        return view('kandidat.create');
    }

    /**
     * Simpan kandidat
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'organisasi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'foto' => 'nullable|image|max:2048'
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')
                ->store('kandidat', 'public');
        }

        Candidate::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'organisasi' => $request->organisasi,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'foto' => $foto,
            'status' => 'menunggu'
        ]);

        return redirect()
            ->route('kandidat.index')
            ->with('success', 'Kandidat berhasil ditambahkan');
    }

    /**
     * Detail kandidat
     */
    public function show(string $id)
    {
        $kandidat = Candidate::findOrFail($id);

        return view('kandidat.show', compact('kandidat'));
    }

    /**
     * Form edit kandidat
     */
    public function edit(string $id)
    {
        $kandidat = Candidate::findOrFail($id);

        return view('kandidat.edit', compact('kandidat'));
    }

    /**
     * Update kandidat
     */
    public function update(Request $request, string $id)
    {
        $kandidat = Candidate::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'organisasi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'ipk' => ['nullable', 'numeric', 'between:0,4.00'],
        ]);

        $kandidat->update($data);

        return redirect()
            ->route('kandidat.index')
            ->with('success', 'Data berhasil diubah');
    }

    /**
     * Hapus kandidat
     */
    public function destroy(string $id)
    {
        $kandidat = Candidate::findOrFail($id);

        if ($kandidat->foto) {
            Storage::disk('public')->delete($kandidat->foto);
        }

        $kandidat->delete();

        return redirect()
            ->route('kandidat.index')
            ->with('success', 'Data berhasil dihapus');
    }

    /**
     * Halaman verifikasi DPM
     */
    public function verifikasi()
    {
        $kandidats = Candidate::latest()->get();

        return view('verivikasi.kandidat', compact('kandidats'));
    }

    /**
     * Approve kandidat
     */
    public function approve($id)
    {
        $kandidat = Candidate::findOrFail($id);

        $kandidat->update([
            'status' => 'disetujui'
        ]);

        return back()->with(
            'success',
            'Kandidat disetujui'
        );
    }

    /**
     * Reject kandidat
     */
    public function reject($id)
    {
        $kandidat = Candidate::findOrFail($id);

        $kandidat->update([
            'status' => 'ditolak'
        ]);

        return back()->with(
            'success',
            'Kandidat ditolak'
        );
    }
}
