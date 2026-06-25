<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProposalController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 'dpm') {
            $proposals = Proposal::latest()->get();
        } else {
            $proposals = Proposal::where('user_id', $user->id)
                ->latest()
                ->get();
        }

        return view('proposal.index', compact('proposals'));
    }

    public function create()
    {
        if (Auth::user()->role == 'dpm') {
            return redirect()->route('proposal.index')
                ->with('error', 'DPM tidak dapat mengajukan proposal.');
        }

        return view('proposal.create');
    }

    public function store(Request $request)
    {
     $request->validate([
    'nama_kegiatan' => 'required',
    'judul' => 'required',
    'file_proposal' => 'required|mimes:pdf|max:2048',
]);

$file = $request->file('file_proposal')
        ->store('proposal', 'public');

Proposal::create([
    'user_id' => Auth::id(),
    'nama_instansi' => Auth::user()->name,
    'nama_kegiatan' => $request->nama_kegiatan,
    'judul' => $request->judul,
    'file_proposal' => $file,
    'status' => 'sedang_diperiksa',
    'catatan' => null,
]);
        return redirect()
            ->route('proposal.index')
            ->with('success', 'Proposal berhasil dikirim.');
    }

    public function show(Proposal $proposal)
    {
        return view('proposal.show', compact('proposal'));
    }

    public function update(Request $request, Proposal $proposal)
    {
        if (Auth::user()->role != 'dpm') {
            abort(403);
        }

        $request->validate([
            'status' => 'required'
        ]);

        $proposal->update([
            'status' => $request->status
        ]);

        return redirect()
            ->route('proposal.index')
            ->with('success', 'Status proposal berhasil diperbarui.');
    }

    public function revisi(Request $request, Proposal $proposal)
    {
        if (Auth::user()->role != 'dpm') {
            abort(403);
        }

        $request->validate([
            'catatan' => 'required'
        ]);

        $proposal->update([
            'status' => 'revisi',
            'catatan' => $request->catatan
        ]);

        return redirect()
            ->route('proposal.index')
            ->with('success', 'Proposal dikembalikan untuk revisi.');
    }

    public function destroy(Proposal $proposal)
    {
        $proposal->delete();

        return redirect()
            ->route('proposal.index')
            ->with('success', 'Proposal berhasil dihapus.');
    }
}