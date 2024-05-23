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
        Schema::create('training_services', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('date');
            $table->boolean('cancelled')->default(false);
            $table->unsignedInteger('total_price');


            $table->uuid('external_pet_id');
            $table->time('hour');
            $table->uuid('user_id');

            $table->foreign('external_pet_id')->references('id')->on('external_pets');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('hour')->references('hour')->on('training_hours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_services');
    }
};
