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
        Schema::create('fuel_products', function (Blueprint $table) {
            $table->id();
            // providers id
            $table->foreignId('provider_id')->constrained('fuel_providers');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('octane_number', 10)->nullable();
            $table->decimal('price_per_liter', 20, 2);
            $table->string('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_products');
    }
};
