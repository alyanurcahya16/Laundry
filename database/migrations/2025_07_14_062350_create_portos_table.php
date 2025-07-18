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
         Schema::create('portos', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('gambar')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('nama');
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portos');
    }
};
