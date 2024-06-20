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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->string('NIK');
            $table->string('jenis_kelamin');
            $table->foreignId('jabatan_id')->references('id')->on('jabatans');
            $table->foreignId('divisi_id')->references('id')->on('divisis');
            $table->date('tgl_masuk');
            $table->string('gaji');
            $table->string('alamat');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
