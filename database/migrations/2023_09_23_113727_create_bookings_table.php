<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id')->nullable();
            $table->foreign('produk_id')->references('id')->on('produk');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('user');
            $table->string('jumlah');
            $table->string('tanggal_mulai');
            $table->string('waktu_mulai');
            $table->string('tanggal_selesai');
            $table->string('waktu_selesai');
            $table->string('subtotal_harga')->default('0');
            $table->string('bukti_bayar')->nullable();
            $table->string('status_pembayaran');
            $table->unsignedBigInteger('status_id')->default('1');
            $table->foreign('status_id')->references('id')->on('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
