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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->timestamp('paidAt',precision: 0);
            $table->timestamp('startedAt',precision: 0);
            $table->timestamp('finishedAt',precision: 0);
            $table->char('userName')->length(20);
            $table->integer('total')->length(10);
            $table->integer('trackingNumber')->length(40);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
