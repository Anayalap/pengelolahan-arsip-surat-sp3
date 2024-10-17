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
        Schema::create('rekom_rumah_ibadah', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat', 15);
            $table->string('nip_pegawai', 15);
            $table->date('tgl_surat');
            $table->string('perihal', 30);
            $table->string('cetakan_surat', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekom_rumah_ibadah');
    }
};
