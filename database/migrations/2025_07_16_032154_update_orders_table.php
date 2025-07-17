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
        Schema::table('orders', function (Blueprint $table) {
            if (!Schema::hasColumn('orders', 'nama')) {
                $table->string('nama')->after('id');
            }
            if (!Schema::hasColumn('orders', 'telepon')) {
                $table->string('telepon')->after('nama');
            }
            if (!Schema::hasColumn('orders', 'alamat')) {
                $table->text('alamat')->after('telepon');
            }
            if (!Schema::hasColumn('orders', 'layanan')) {
                $table->string('layanan')->after('alamat');
            }
            if (!Schema::hasColumn('orders', 'item')) {
                $table->string('item')->after('layanan');
            }
            if (!Schema::hasColumn('orders', 'quantity')) {
                $table->integer('quantity')->nullable()->after('item');
            }
            if (!Schema::hasColumn('orders', 'catatan')) {
                $table->text('catatan')->nullable()->after('quantity');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'nama',
                'telepon',
                'alamat',
                'layanan',
                'item',
                'quantity',
                'catatan'
            ]);
        });
    }
};