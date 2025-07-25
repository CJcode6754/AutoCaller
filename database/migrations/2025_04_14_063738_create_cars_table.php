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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('maker_id')->constrained('makers')->cascadeOnDelete();
            $table->foreignId('model_id')->constrained('models')->cascadeOnDelete();
            $table->integer('year');
            $table->integer('price');
            $table->string('vin', 255);
            $table->integer('mileage');
            $table->enum('inventory_type', ['New', 'Used']);
            $table->foreignId('car_type_id')->constrained('car_types')->cascadeOnDelete();
            $table->foreignId('fuel_type_id')->constrained('fuel_types')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('region_id')->constrained('regions')->cascadeOnDelete();
            $table->foreignId('city_id')->constrained('cities')->cascadeOnDelete();
            $table->string('address', 255);
            $table->string('phone', 45);
            $table->longText('description')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
