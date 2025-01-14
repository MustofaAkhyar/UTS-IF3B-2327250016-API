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
        Schema::create('data_pengirimen', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('namaPengirim');
            $table->string('namaPenerima');
            $table->string('alamatPenerima');
            $table->string('namaBarang');
            $table->date('tanggalPengiriman');
            $table->integer('jumlahBarang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pengirimen');
    }
};
