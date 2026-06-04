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
    Schema::create('pelanggan', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('no_wa');
        $table->text('alamat');

        // Ini kode untuk relasi ke tabel paket_internet
        $table->foreignId('paket_id')->constrained('paket_internet')->cascadeOnDelete(); 

        $table->string('status')->default('Aktif');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
