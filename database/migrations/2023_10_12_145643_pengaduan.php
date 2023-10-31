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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('jenis_terlapor');
            $table->string('lingkup');
            $table->string('judul');
            $table->date('tanggal_kejadian');
            $table->text('keterangan');
            $table->string('nama_terlapor');
            $table->string('jabatan_terlapor');
            $table->string('instansi_terlapor');
            $table->string('nama_pelapor');
            $table->string('nomor_identitas')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('instansi_pelapor')->nullable();
            $table->string('judul_file')->nullable();
            $table->string('gambar')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
