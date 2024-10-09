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
            $table->char('name',30);
            $table->char('color',16);
            $table->smallInteger('stock',6);
            $table->char('picture');
            $table->char('brand',30);
            $table->char('size',20);
            $table->integer('price',10);
            $table->smallInteger('likes',6);
            $table->char('category',20);
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
