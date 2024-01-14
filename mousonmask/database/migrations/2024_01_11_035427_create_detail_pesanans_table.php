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
            $table->id();
            $table->decimal('subtotal', 10, 2);
            $table->unsignedBigInteger('id_order');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_order')->references('id')->on('orders')->on('menus')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_pesanans');
    }
};
