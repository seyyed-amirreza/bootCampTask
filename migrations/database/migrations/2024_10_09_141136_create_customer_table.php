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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->char('firstName',30);
            $table->char('lastName',30);
            $table->string('userName',20)->unique();
            $table->timestamp('lastLogin');
            $table->string('password');
            $table->char('phoneNumber',11);
            $table->char('countryCode',4);
            $table->char('emial',254);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
