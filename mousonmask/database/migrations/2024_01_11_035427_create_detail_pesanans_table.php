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
        Schema::create('detail_pesanans', function (Blueprint $table) {
            $table->id('id_detail');
            $table->integer('jumlah');
            $table->decimal('subtotal', 10, 2);
            $table->unsignedBigInteger('id_order');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_order')->references('id_order')->on('orders');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_pesanans');
    }
};
