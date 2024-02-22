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
            $table->dateTime('scheduled_date');

            $table->uuid('status_id');
            $table->uuid('external_pet_id');
            $table->uuid('worker_id');

            $table->foreign('external_pet_id')->references('id')->on('external_pets');
            $table->foreign('worker_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('statuses');
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
