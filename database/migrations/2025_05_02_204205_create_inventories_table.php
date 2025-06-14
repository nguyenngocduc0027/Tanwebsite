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
        Schema::create('inventories', function (Blueprint $table) { //hàng tồn kho
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->integer('total_quantity')->default(0);
            $table->integer('in_quantity')->default(0);
            $table->integer('out_quantity')->default(0);
            $table->integer('order_quantity')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
