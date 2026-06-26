@extends('layouts.admin')

@section('title', 'Dashboard Laporan')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">

    

    <!-- GRID CHART -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- BAR CHART -->
        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="font-semibold mb-4">Surat Masuk per Kategori</h2>
            <canvas id="masukChart"></canvas>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="font-semibold mb-4">Surat Keluar per Kategori</h2>
            <canvas id="keluarChart"></canvas>
        </div>

    </div>

    <!-- DONUT CHART -->
    <div class="bg-white p-6 rounded-xl shadow mt-6">
        <h2 class="font-semibold mb-4 text-center">
            Total Surat Masuk vs Surat Keluar
        </h2>
        <canvas id="donutChart" class="max-w-md mx-auto"></canvas>
    </div>

    <!-- PIVOT TABLE -->
    <div class="bg-white p-6 rounded-xl shadow mt-6">
        <h2 class="font-semibold mb-4">Detail Kategori</h2>

        <table class="w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border p-2">Jenis</th>
                    <th class="border p-2">Kategori</th>
                    <th class="border p-2">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pivotData ?? [] as $row)
                <tr>
                    <td class="border p-2">{{ $row['jenis'] }}</td>
                    <td class="border p-2">{{ $row['kategori'] }}</td>
                    <td class="border p-2 text-center">{{ $row['jumlah'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<!-- CHART JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {


    // BAR - SURAT MASUK //
    new Chart(document.getElementById('masukChart'), {
        type: 'bar',
        data: {
            labels: @json($masukLabels),
            datasets: [{
                label: 'Surat Masuk',
                data: @json($masukValues),
                backgroundColor: '#3B82F6'
            }]
        },
        options: { responsive: true }
    });

    // =========================
    // BAR - SURAT KELUAR
    // =========================
    new Chart(document.getElementById('keluarChart'), {
        type: 'bar',
        data: {
            labels: @json($keluarLabels),
            datasets: [{
                label: 'Surat Keluar',
                data: @json($keluarValues),
                backgroundColor: '#EF4444'
            }]
        },
        options: { responsive: true }
    });

    // =========================
    // DONUT CHART
    // =========================
    new Chart(document.getElementById('donutChart'), {
        type: 'doughnut',
        data: {
            labels: ['Surat Masuk', 'Surat Keluar'],
            datasets: [{
                data: [
                    {{ $totalMasuk }},
                    {{ $totalKeluar }}
                ],
                backgroundColor: ['#3B82F6', '#EF4444']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

});
</script>
@endsection