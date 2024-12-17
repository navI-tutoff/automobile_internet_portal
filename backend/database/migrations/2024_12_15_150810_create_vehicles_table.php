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
            $table->string('name');
            $table->string('photo');
            $table->string('equipment');
            $table->decimal('price', 8, 0)->default(0);
            $table->decimal('mileage', 8, 0)->default(0);
            $table->string('pre_rating');
            $table->string('seller_nick');
            $table->string('seller_city');
            $table->datetime('sell_date');
            $table->string('engine');
            $table->string('power');
            $table->string('gearbox');
            $table->string('drive');
            $table->string('color');
            $table->string('wheel');
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
