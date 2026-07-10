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
        Schema::create('emergency_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default('Siap Dinas');
            $table->string('phone')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('availability')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_vehicles');
    }
};
