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
        Schema::create('crawling_data', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img');
            $table->string('body');
            $table->unsignedBigInteger('parameters_id');
            $table->unsignedBigInteger('laps_id');
            $table->foreign('parameters_id')->references('id')->on('crawling_data_parameters');
            $table->foreign('laps_id')->references('id')->on('crawling_data_laps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crawling_data');
    }
};
