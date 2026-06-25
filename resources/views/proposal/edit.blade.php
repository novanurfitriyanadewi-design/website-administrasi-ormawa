@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Review Proposal</h3>

    <form action="{{ route('proposal.update', $proposal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="sedang_diperiksa">Sedang Diperiksa</option>
                <option value="revisi">Revisi</option>
                <option value="disetujui">Disetujui</option>
                <option value="ditolak">Ditolak</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Catatan DPM</label>
            <textarea name="catatan" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">
            Simpan
        </button>
    </form>
</div>
@endsection