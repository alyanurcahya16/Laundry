<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('orders', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('telepon');
    $table->text('alamat');
    $table->string('layanan');
    $table->text('item');
    $table->integer('quantity');
    $table->text('catatan')->nullable();
    $table->string('status');
    $table->boolean('is_history')->default(false);
    $table->softDeletes();
    $table->timestamps();
});

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }

};
