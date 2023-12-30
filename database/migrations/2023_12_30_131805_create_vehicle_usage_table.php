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
        Schema::create('vehicle_usage', function (Blueprint $table) {
            $table->id();
            $table->date('usage_date')->nullable();
            $table->decimal('fuel_concumption')->nullable();
            $table->date('service_schedule')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_usage');
    }
};
