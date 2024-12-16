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
        Schema::create('item_campaign_nutrition', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_campaign_id');
            $table->foreignId('nutrition_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_campaign_nutrition');
    }
};
