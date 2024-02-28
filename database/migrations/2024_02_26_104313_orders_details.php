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
        Schema::create('orders_details', function (Blueprint $table){
            $table->unsignedBigInteger('id_orders');
            $table->foreign('id_orders')->references('id')->on('orders');

            $table->unsignedBigInteger('id_details');
            $table->foreign('id_details')->references('id')->on('sparePart');

            $table->Integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_details');
    }
};
