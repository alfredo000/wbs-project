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
        Schema::create('aktivitas_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kolom untuk menghubungkan aktivitas dengan pengguna
            $table->unsignedBigInteger('pengaduan_id'); // Kolom untuk menghubungkan aktivitas dengan pengaduan
            $table->timestamps();

            // Indeks untuk kunci asing
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pengaduan_id')->references('id')->on('pengaduan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktivitas_users');
    }
};
