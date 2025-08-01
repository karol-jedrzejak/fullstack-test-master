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
        Schema::table('receipt_registrations', function (Blueprint $table) {
            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores');
            $table->unsignedBigInteger('prize_id');
            $table->foreign('prize_id')->references('id')->on('prizes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('receipt_registrations', function (Blueprint $table) {
            $table->dropForeign(['store_id']);
            $table->dropForeign(['prize_id']);
            $table->dropColumn('store_id');
            $table->dropColumn('prize_id');
        });
    }
};
