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
        Schema::create('producto_venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('venta_id');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 10, 2);
            $table->timestamps();

            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_ventas');
    }
};
