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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_karyawan');
            $table->integer('nik');
            $table->string('jenis_pegawai');
            $table->string('status_pegawai');
            $table->string('pendidikan');
            $table->date('tgl_lahir');
            $table->string('kota_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->integer('umur');
            $table->integer('no_hp');
            $table->foreignId('id_agama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
