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
        Schema::create('care_services', function (Blueprint $table) {
            $table->uuid('id');
            $table->date('arrive');
            $table->date('departure');
            $table->unsignedInteger('total_price');
            $table->boolean('cancelled')->default(false);

            $table->uuid('external_pet_id');
            $table->uuid('user_id');


            $table->foreign('external_pet_id')->references('id')->on('external_pets');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('care_services');
    }
};
