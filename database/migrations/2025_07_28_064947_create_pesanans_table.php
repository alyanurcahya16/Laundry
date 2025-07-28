<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
$table->string('telepon')->nullable();
$table->text('alamat')->nullable();
$table->string('kategori');
$table->string('item');
$table->integer('jumlah');
$table->text('catatan')->nullable();
$table->decimal('jumlah_kg', 8, 2)->nullable();

            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
}
