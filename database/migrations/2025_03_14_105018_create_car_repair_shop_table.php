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
        Schema::create('car_repair_shop', function (Blueprint $table) {
            $table->id();

            $table->foreignId('car_id')
                ->constrained('cars');

            $table->foreignId('repair_shop_id')
                ->constrained('repair_shops');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_repair_shop');
    }
};
