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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('car_user_id')
                ->constrained('car_user')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('repair_shop_id')
                ->constrained('repair_shops')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('status_id')
                ->constrained('statuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->text('description');
            $table->integer('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
