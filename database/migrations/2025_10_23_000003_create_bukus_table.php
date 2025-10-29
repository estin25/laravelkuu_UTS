<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('penerbit_id');
            $table->year('tahun_terbit')->nullable();
            $table->timestamps();

            // Relasi ke tabel kategori & penerbit
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
            $table->foreign('penerbit_id')->references('id')->on('penerbits')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
