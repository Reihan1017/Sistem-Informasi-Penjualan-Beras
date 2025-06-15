<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('telepon');
            $table->text('alamat');
            $table->unsignedBigInteger('produk_id');
            $table->integer('jumlah');
            $table->text('catatan')->nullable();
            $table->timestamps();

            // relasi ke listproduks
            $table->foreign('produk_id')
                  ->references('id')
                  ->on('listproduks')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
