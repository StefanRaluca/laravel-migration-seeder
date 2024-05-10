<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Company', 30);
            $table->string('Departure_station', 60);
            $table->string('Arrival_station', 60);
            $table->dateTime('Departure_time');
            $table->dateTime('Arrival_time');
            $table->string('Train_Code', 30)->nullable();
            $table->integer('Number_of_carriages')->nullable();
            $table->boolean('In_time')->default(1)->nullable();
            $table->boolean('Canceled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};