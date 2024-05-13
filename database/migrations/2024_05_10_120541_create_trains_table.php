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
            $table->string('company', 30);
            $table->string('departure_station', 60);
            $table->string('arrival_station', 60);
            $table->dateTime('departure_time', 0);
            $table->dateTime('arrival_time', 0);
            $table->string('train_Code', 30)->nullable();
            $table->integer('number_of_carriages')->nullable();
            $table->boolean('in_time')->default(1)->nullable();
            $table->boolean('canceled')->default(0);
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