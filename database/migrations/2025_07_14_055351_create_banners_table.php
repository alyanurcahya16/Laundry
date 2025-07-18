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
        Schema::create('banners', function (Blueprint $table) {
    $table->id();
    $table->string('gambarbanner')->nullable();
    $table->string('gifbanner')->nullable();
    $table->string('tittle')->nullable();
    $table->text('deskripsi')->nullable();
    $table->string('linkgetrarted')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
