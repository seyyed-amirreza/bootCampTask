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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->char('name')->length(30);
            $table->char('color')->length(16);
            $table->integer('stock')->length(6);
            $table->char('picture');
            $table->char('brand')->length(30);
            $table->char('size')->length(20);
            $table->integer('price')->length(10);
            $table->integer('likes')->length(6);
            $table->char('category')->length(20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
