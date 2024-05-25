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
        Schema::create('generate_laporans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang',25);
            $table->date('tanggal_pembelian');
            $table->date('tanggal_pemakaian');
            $table->string('ruangan',25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generate_laporans');
    }
};
