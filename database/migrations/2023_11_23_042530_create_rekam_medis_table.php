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
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->integer('No_RM');
            $table->string('nama_pasien');
            $table->string('alamat');
            $table->date('tgl_kunjungan');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['Laki-Laki (L)', 'Perempuan (P)']);
            $table->date('tanggal_lahir');
            $table->string('nama_klinik');
            $table->integer('no_billing');
            $table->string('dpjp');
            $table->string('jenis_pembayaran');
            $table->enum('history_pasien', ['Data Pendaftaran', 'Status Pembayaran', 'Riwayat Pasien', 'Penunjang', 'Resep', 'DPJP', 'File SEP']);
            $table->enum('billing_pasien', ['Tarif Tindakan', 'Tarif Tindakan Paket']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
