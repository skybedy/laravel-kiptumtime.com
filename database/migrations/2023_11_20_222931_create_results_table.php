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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained();
            $table->date('finish_time_date');
            $table->unsignedMediumInteger('finish_time_order')->nullable();
            $table->time('finish_time');
            $table->unsignedInteger('finish_time_sec');
            $table->double('finish_distance_km', 10, 2)->nullable();
            $table->double('finish_distance_mile', 10, 2)->nullable();
            $table->string('pace_km');
            $table->string('pace_mile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
