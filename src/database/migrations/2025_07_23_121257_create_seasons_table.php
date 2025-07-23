<?php
// database/migrations/YYYY_MM_DD_HHMMSS_create_seasons_table.php

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
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('year');
            
            $table->unsignedBigInteger('team_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('driver_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('car_id')->constrained()->onDelete('cascade');
            
            $table->timestamps();

            // Ensure a driver can only be assigned to one team per year
            $table->unique(['year', 'driver_id']);
            // Ensure a car is only used once per year
            $table->unique(['year', 'car_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seasons');
    }
};