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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('vehicle_type_id')->constrained('vehicle_types');
            $table->foreignId('vehicle_brand_id')->constrained('vehicle_brands');
            $table->foreignId('vehicle_model_id')->constrained('vehicle_models');
            $table->year('year');
            $table->decimal('tank_capacity', 10, 2);
            $table->decimal('efficiency', 10, 2);
            $table->string('registration_number')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
