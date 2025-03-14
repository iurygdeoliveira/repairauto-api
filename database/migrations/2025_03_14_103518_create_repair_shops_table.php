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
        Schema::create('repair_shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tax_id');
            $table->string('description');
            $table->decimal('lat', 10, 0);
            $table->decimal('lng', 10, 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repair_shops');
    }
};
