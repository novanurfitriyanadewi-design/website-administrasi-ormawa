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

            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->string('nama_instansi');
            $table->string('nama_kegiatan');

            $table->string('judul');

            $table->text('deskripsi')->nullable();

            $table->string('file_proposal');

            $table->enum('status', [
                'sedang_diperiksa',
                'revisi',
                'diterima',
                'diteruskan_bpkm'
            ])->default('sedang_diperiksa');

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