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
        Schema::create('about_us', function (Blueprint $table) {
    $table->id();
    $table->string('gambar1')->nullable();
    $table->string('gambar2')->nullable();
    $table->string('video_url')->nullable();
    $table->string('tittle')->nullable();
    $table->text('description')->nullable();
    $table->string('link')->nullable();
    $table->string('experience')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
