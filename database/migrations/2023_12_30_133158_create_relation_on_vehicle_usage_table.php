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
        Schema::table('vehicle_usage', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->after('id');
            $table->unsignedBigInteger('driver_id')->after('order_id');
            $table->foreign('order_id')->references('id')->on('order')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('driver_id')->references('id')->on('driver')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relation_on_vehicle_usage');
    }
};
