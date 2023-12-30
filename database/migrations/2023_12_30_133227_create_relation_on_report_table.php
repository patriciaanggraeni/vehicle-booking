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
        Schema::table('report', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->after('id');
            $table->unsignedBigInteger('users_id')->after('order_id');
            $table->foreign('order_id')->references('id')->on('order')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('users_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relation_on_report');
    }
};
