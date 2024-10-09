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
        Schema::create('factor', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->timestamp('createdAt');
            $table->timestamp('paidAt');
            $table->integer('total',10);
            $table->text('contents');
            $table->char('status');
            $table->char('userName',20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factor');
    }
};
