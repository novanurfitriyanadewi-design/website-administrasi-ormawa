<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel users
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();

            // Kolom sesuai Blade & Controller
            $table->string('nama_instansi');
            $table->string('nama_kegiatan');
            $table->string('judul');
            $table->text('deskripsi')->nullable();

            $table->string('file_proposal');

            // Status sinkron dengan Blade & Controller
            $table->enum('status', [
                'menunggu',
                'sedang_diperiksa',
                'revisi',
                'diterima',
                'diteruskan_bpkm'
            ])->default('menunggu');

            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
