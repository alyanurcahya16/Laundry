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
    Schema::create('registrasi_hotels', function (Blueprint $table) {
        $table->id();
        $table->string('nama_perusahaan');
        $table->string('nama_hotel');
        $table->string('nama_pic');
        $table->string('nomor_pic');
        $table->string('nik_pic');
        $table->text('alamat_hotel');
        $table->string('jabatan_pic');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasi_hotels');
    }
};
