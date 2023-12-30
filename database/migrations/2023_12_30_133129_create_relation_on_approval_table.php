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
        Schema::table('approval', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->after('id');
            $table->unsignedBigInteger('approver_id')->after('order_id');
            $table->foreign('order_id')->references('id')->on('order')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('approver_id')->references('id')->on('approver')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relation_on_approval');
    }
};
