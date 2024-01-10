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
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->id('id_detail');
            $table->unsignedBigInteger('id_order');
            $table->unsignedBigInteger('id_customer');
            $table->integer('jumlah');
            $table->decimal('total_harga', 8, 2);
            $table->timestamps();

            $table->foreign('id_order')->references('id_order')->on('order');
            $table->foreign('id_customer')->references('id_customer')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pesanan');
    }
};
